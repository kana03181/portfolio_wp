<?php
/*======================================
  Includes
======================================*/
require_once('lib/ViteHelper.php'); // こちらは削除しないでください。

/*======================================
  初期設定
======================================*/
function theme_setup()
{

  /*
    Titleタグ
  ----------------------------------- */
  add_theme_support('title-tag');

  /*
    HTML5をサポート
  ----------------------------------- */
  $args = [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script'
  ];
  add_theme_support('html5', $args);

  /*
    アイキャッチ画像
  ----------------------------------- */
  add_theme_support('post-thumbnails');

  /*
    カスタムロゴ
  ----------------------------------- */
  $args = [
    "width" => 160,
    "height" => 32,
    "flex-width" => true,
  ];

  add_theme_support('custom-logo', $args);


  /*
    画像サイズ
  ----------------------------------- */

  set_post_thumbnail_size(1110, 560, true); //制作実績の詳細ページ
  add_image_size("product-detail", 1110, 560, true); //制作実績の詳細ページ
  add_image_size("product-detail@2x", 2218, 1306, true); //制作実績の詳細ページ(retina)


  add_image_size("product-thumbnail", 535, 315, true); //制作実績一覧ページ
  add_image_size("product-thumbnail@2x", 1070, 630, true); //制作実績一覧ページ(retina)



  /*
    カスタムメニュー
  ----------------------------------- */
  $locations = [
    "global" => "Global Navigation",
    "footer" => "footer Navigation"
  ];
  register_nav_menus($locations);
}
add_action('after_setup_theme', 'theme_setup');

/*======================================
    ナビゲーションをカスタマイズ
======================================*/

// li のクラスをカスタマイズ
function custom_nav_menu_classes($classes, $item, $args)
{

  // 新しいクラスを入れる配列
  $new_classes = [];

  // ナビゲーションにis-currentを追加
  if (in_array("current-menu-item", $classes)) {
    $new_classes[] = "current-menu-item";
    $new_classes[] = "is-current";
  } else {
    if (is_tax("product_category") || is_singular('products')) {
      if (strpos($item->url, "/products/") !== false) {
        $new_classes[] = "current-menu-item";
        $new_classes[] = "is-current";
      }
    }
  }

  // ヘッダーメニュー（'global'）の <li> にカスタムクラスを追加
  if ($args->theme_location === "global") {
    $new_classes[] = "cm-h__navListItem";
  }
  if ($args->theme_location === "footer") {
    $new_classes[] = "item";
  }

  return $new_classes;
}
add_filter("nav_menu_css_class", "custom_nav_menu_classes", 10, 3);

// a のクラスをカスタマイズ
function custom_nav_menu_link($atts, $item, $args)
{
  if ($args->theme_location === "global") {
    $atts["class"] = "link";
  }
  if ($args->theme_location === "footer") {
    $atts["class"] = "item__link";
  }

  return $atts;
}
add_filter("nav_menu_link_attributes", "custom_nav_menu_link", 10, 3);


/*======================================
  コンテンツ幅
======================================*/
if (!isset($content_width)) {
  $content_width = 1110;
}


/*======================================
  フォントの追加
======================================*/
// function font_script()
// {
//   wp_enqueue_style("google-font", "https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap", array(), null);
// }
// add_action("wp_enqueue_scripts", "font_script");

/*======================================
  adminバーを非表示
======================================*/
add_filter("show_admin_bar", "__return_false");


/*======================================
  画質の劣化の無効化
======================================*/
add_filter('jpeg_quality', function ($arg) {
  return 100;
});
add_filter('big_image_size_threshold', '__return_false');


/*======================================
  不要な head内の要素削除
======================================*/
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);

/*======================================
  不要なクラス名を削除
======================================*/
function forcefully_remove_image_block_classes($content)
{
  // class属性を対象にし、wp-block-group, wp-block-list, wp-block-image, size-* を削除
  return preg_replace_callback(
    '/class="([^"]+)"/',
    function ($matches) {
      $classes = explode(' ', $matches[1]);
      $filtered = array_filter($classes, function ($class) {
        return !preg_match('/^(wp-block-group|wp-block-list|wp-block-image|size-[\w-]+)/', $class);
      });
      return $filtered ? 'class="' . implode(' ', $filtered) . '"' : '';
    },
    $content
  );
}
add_filter('the_content', 'forcefully_remove_image_block_classes', 99);

/*======================================
  カスタム投稿タイプ
======================================*/
function product_post_type_init()
{
  /*
    カスタム投稿タイプ（制作実績）
  ----------------------------------- */
  $labels = [
    "name" => "つくったもの",
    "all_items" => "制作実績一覧",
    "add_new_item" => "新規作品を追加",
    "edit_item" => "制作実績を編集"
  ];

  $args = [
    "labels" => $labels,
    "description" => "制作実績の紹介",
    "public" => true,
    "menu_position" => 5,
    "menu_icon" => "dashicons-laptop",
    "supports" => [
      "title",
      "editor",
      "thumbnail",
      "custom-fields",
    ],
    "has_archive" => true,
    "show_in_rest" => true,
    "taxonomies" => [
      "product_category",
    ]
  ];

  register_post_type("products", $args);

  /*
    カスタムタクソノミー（カテゴリー）
  ----------------------------------- */
  $labels = [
    "name" => "制作過程の役割",
    "add_new_item" => "新規追加",
  ];

  $args = [
    "labels" => $labels,
    "description" => "制作過程での役割を分類するタクソノミー",
    "show_admin_column" => true,
    "show_in_rest" => true,
    "hierarchical" => true,
    "rewrite" => array("slug" => "product_category"),
    "public" => true,
    "query_var" => true,
    "publicly_queryable" => true,
  ];


  register_taxonomy("product_category", "products", $args);
}
add_action("init", "product_post_type_init");

// 投稿一覧に「リンク」カラムを追加
function my_product_admin_customizations()
{
  add_filter("manage_products_posts_columns", function ($columns) {
    $new_columns = [];
    foreach ($columns as $key => $value) {
      $new_columns[$key] = $value;
      if ($key === "taxonomy-product_category") {
        $new_columns["custom_link"] = "リンク";
      }
    }
    return $new_columns;
  });

  add_action("manage_products_posts_custom_column", function ($column_key, $post_id) {
    if ($column_key === "custom_link") {
      $post = get_post($post_id);
      echo esc_html($post->post_name);
    }
  }, 10, 2);
}
add_action("admin_init", "my_product_admin_customizations");

/*======================================
  Ajaxでカテゴリーを取得
======================================*/

// Ajaxリクエストを処理する関数
function filter_posts_by_category()
{

  // カテゴリースラッグを受け取る
  $category_slug = isset($_GET["category_slug"]) ? sanitize_text_field($_GET["category_slug"]) : "";

  // カテゴリースラッグが "all" の場合はすべての投稿を表示
  if ($category_slug === "all") {
    $args = [
      "post_type" => "products",  // カスタム投稿タイプ名
      "posts_per_page" => -1,     // すべての投稿を表示
      "orderby" => "date",
      "order" => "ASC",
    ];
  } else {
    // カテゴリーのIDを取得
    $category = get_term_by("slug", $category_slug, "product_category"); // product_category はカスタムタクソノミー名

    if ($category) {
      // クエリを設定
      $args = [
        "post_type" => "products",  // カスタム投稿タイプ名
        "posts_per_page" => -1,     // すべての投稿を表示
        "orderby" => "date",
        "order" => "ASC",
        "tax_query" => [
          [
            "taxonomy" => "product_category",
            "field"    => "id",
            "terms"    => $category->term_id,
          ]
        ],
      ];
    } else {
      echo "該当するカテゴリが見つかりません。";
      die();
    }
  }

  // クエリを実行
  $query = new WP_Query($args);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
?>
      <article class="p-product__bodyMainBlock">
        <h3 class="title">
          <?php
          //カスタムフィールド "subTitle" の値を表示
          if (get_field("subTitle")) : ?>
            <span class="title__sub"><?php the_field("subTitle"); ?></span>
          <?php endif; ?>
          <span class="title__main"><?php the_title(); ?></span>
        </h3>
        <?php
        $excerpt = get_the_excerpt();

        if (!empty($excerpt)) {
          if (preg_match('/^.*?。/u', $excerpt, $matches)) {
            $first_sentence = trim($matches[0]);
          } else {
            $first_sentence = $excerpt;
          }

          if (strlen($first_sentence) > 0) {
            echo '<p class="txt">' . esc_html($first_sentence) . '</p>';
          }
        }
        ?>

        <?php
        // 投稿のカテゴリーを取得
        $terms = get_the_terms(get_the_ID(), "product_category");
        if ($terms && !is_wp_error($terms)) : ?>
          <ul class="category">
            <?php foreach ($terms as $term) : ?>
              <li class="category__Item">
                <a href="<?php echo esc_url(get_term_link($term, $term->taxonomy)); ?>" class="category__Item__Link"><?php echo esc_html($term->name); ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>

        <figure class="thumb">
          <?php
          // アイキャッチ画像があるか確認
          if (has_post_thumbnail()) :
            the_post_thumbnail();
          else : ?>
            <p>画像がありません。</p>
          <?php endif; ?>
        </figure>

        <p class="body__btn c-btn">
          <a href="<?php the_permalink(); ?>" class="c-btn__link">
            <span class="c-btn__linkTxt">詳しく見る</span>
            <span class="c-btn__linkIcon">
              <svg width="12" height="10" viewBox="0 0 12 10">
                <use href="#arrow"></use>
              </svg>
            </span>
          </a>
        </p>
      </article>
  <?php
    }
  } else {
    echo "該当する投稿はありません。";
  }
  wp_reset_postdata();

  die();  // 処理終了
}

// Ajax のリクエストを処理するために WordPress のアクションフックに追加
add_action("wp_ajax_filter_posts_by_category", "filter_posts_by_category");
add_action("wp_ajax_nopriv_filter_posts_by_category", "filter_posts_by_category");

function enqueue_ajax_script()
{
  ?>
  <script type="text/javascript">
    var ajaxurl = "<?php echo admin_url("admin-ajax.php"); ?>";
  </script>
<?php
}
add_action("wp_footer", "enqueue_ajax_script");



/*======================================
  抜粋分の調整
======================================*/
/*
      文字数の変更
    ----------------------------------- */
function product_excerpt_length($length)
{
  return 150;
}
add_filter("excerpt_length", "product_excerpt_length", 999);

/*
      省略時の文字変更
    ----------------------------------- */
function product_excerpt_more()
{
  return "...";
}
add_filter("excerpt_more", "product_excerpt_more");



/*======================================
制作実績投稿画面にadd_meta_boxを追加
======================================*/
function my_custom_meta_box()
{
  add_meta_box(
    'my_custom_meta_box', // メタボックスID
    '制作の詳細', // メタボックスタイトル
    'my_custom_meta_box_callback', // コールバック関数
    'products', // 投稿タイプ（'post', 'page' など）
    'side', // 表示位置（'normal', 'side', 'advanced'）
    'default' // 優先度（'high', 'core', 'default', 'low'）
  );
}
add_action('add_meta_boxes', 'my_custom_meta_box');

// メタボックスの内容を表示するコールバック関数
function my_custom_meta_box_callback($post)
{
  // 現在の投稿のカスタムフィールドを取得
  $date = get_post_meta($post->ID, '_date', true);
  $finish = get_post_meta($post->ID, '_finish', true);
  $scale = get_post_meta($post->ID, '_scale', true);
  $position = get_post_meta($post->ID, '_position', true);
  $term = get_post_meta($post->ID, '_term', true);
  $time = get_post_meta($post->ID, '_time', true);
  $language = get_post_meta($post->ID, '_language', true);
  $develop = get_post_meta($post->ID, '_develop', true);
  $tool = get_post_meta($post->ID, '_tool', true);
  $equipment = get_post_meta($post->ID, '_equipment', true);
  $location = get_post_meta($post->ID, '_location', true);

  // 公開日入力欄
  echo '<label for="date">公開日：</label>';
  echo '<input type="text" id="date" name="date" value="' . esc_attr($date) . '" style="margin-bottom: 1em;" /><br>';

  // 公開日入力欄
  echo '<label for="finish">完成日：</label>';
  echo '<input type="text" id="finish" name="finish" value="' . esc_attr($finish) . '" style="margin-bottom: 1em;" /><br>';

  // 制作規模入力欄
  echo '<label for="scale">制作規模：</label>';
  echo '<input type="text" id="scale" name="scale" value="' . esc_attr($scale) . '" style="margin-bottom: 1em;" /><br>';

  // 制作担当入力欄
  echo '<label for="position">制作担当：</label>';
  echo '<input type="text" id="position" name="position" value="' . esc_attr($position) . '" style="margin-bottom: 1em;" /><br>';

  // 制作期間入力欄
  echo '<label for="term">制作期間：</label>';
  echo '<input type="text" id="term" name="term" value="' . esc_attr($term) . '" style="margin-bottom: 1em;" /><br>';

  // 制作時間入力欄
  echo '<label for="time">制作時間：</label>';
  echo '<input type="text" id="time" name="time" value="' . esc_attr($time) . '" style="margin-bottom: 1em;" /><br>';

  // 使用言語入力欄
  echo '<label for="language">使用言語：</label>';
  echo '<input type="text" id="language" name="language" value="' . esc_attr($language) . '" style="margin-bottom: 1em;" /><br>';

  // 開発環境入力欄
  echo '<label for="develop">開発環境：</label>';
  echo '<input type="text" id="develop" name="develop" value="' . esc_attr($develop) . '" style="margin-bottom: 1em;" /><br>';

  // 使用ツール入力欄
  echo '<label for="tool">使用ツール：</label>';
  echo '<input type="text" id="tool" name="tool" value="' . esc_attr($tool) . '" style="margin-bottom: 1em;" /><br>';

  // 撮影機材入力欄
  echo '<label for="equipment">撮影機材：</label>';
  echo '<input type="text" id="equipment" name="equipment" value="' . esc_attr($equipment) . '" style="margin-bottom: 1em;" /><br>';

  // 撮影場所入力欄
  echo '<label for="location">撮影場所：</label>';
  echo '<input type="text" id="location" name="location" value="' . esc_attr($location) . '" style="margin-bottom: 1em;" /><br>';
}

// 保存処理
function my_custom_meta_box_save($post_id)
{
  // 自動保存やドラフト更新の場合は無視
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;

  // 公開日と著者名を保存
  if (isset($_POST['date'])) {
    update_post_meta($post_id, '_date', sanitize_text_field($_POST['date']));
  }
  if (isset($_POST['finish'])) {
    update_post_meta($post_id, '_finish', sanitize_text_field($_POST['finish']));
  }
  if (isset($_POST['scale'])) {
    update_post_meta($post_id, '_scale', sanitize_text_field($_POST['scale']));
  }
  if (isset($_POST['position'])) {
    update_post_meta($post_id, '_position', sanitize_text_field($_POST['position']));
  }
  if (isset($_POST['term'])) {
    update_post_meta($post_id, '_term', sanitize_text_field($_POST['term']));
  }
  if (isset($_POST['time'])) {
    update_post_meta($post_id, '_time', sanitize_text_field($_POST['time']));
  }
  if (isset($_POST['language'])) {
    update_post_meta($post_id, '_language', sanitize_text_field($_POST['language']));
  }
  if (isset($_POST['develop'])) {
    update_post_meta($post_id, '_develop', sanitize_text_field($_POST['develop']));
  }
  if (isset($_POST['tool'])) {
    update_post_meta($post_id, '_tool', sanitize_text_field($_POST['tool']));
  }
  if (isset($_POST['equipment'])) {
    update_post_meta($post_id, '_equipment', sanitize_text_field($_POST['equipment']));
  }
  if (isset($_POST['location'])) {
    update_post_meta($post_id, '_location', sanitize_text_field($_POST['location']));
  }
}
add_action('save_post', 'my_custom_meta_box_save');


/*======================================
メインループの設定を変更
======================================*/
function my_pre_get_posts($query)
{

  // 管理画面または、メインクエリではない時
  if (is_admin() || ! $query->is_main_query()) {
    return;
  }

  // アーカイブページの投稿を古い順に変更
  if ($query->is_post_type_archive("products") || $query->is_tax("product_category")) {
    $query->set("orderby", "date");
    $query->set("order", "ASC");
  }
}
add_action('pre_get_posts', 'my_pre_get_posts');


/*======================================
テーマカスタマイザー
======================================*/
function portfolio_customize_register($wp_customize)
{
  $wp_customize->add_section("front_page_options", [
    "title" => "フロントページ設定",
    "priority" => 130,
    "description" => "フロントページの設定"
  ]);

  /*
    キャッチコピー
  ----------------------------------- */
  $wp_customize->add_setting("hero_text", [
    "default" => "いたいかなのポートフォリオ"
  ]);

  $wp_customize->add_control(new WP_Customize_Control($wp_customize, "hero_text_field", [
    "label" => "キャッチコピー",
    "section" => "front_page_options",
    "settings" => "hero_text",
    "type" => "text"
  ]));

  /*
    MV 画像
  ----------------------------------- */
  $wp_customize->add_setting("hero_img", [
    "default" => get_theme_file_uri() . "/assets/images/hero_image.jpg"
  ]);

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "hero_image_upload", [
    "label" => "メインビジュアル 画像",
    "section" => "front_page_options",
    "settings" => "hero_img",
    "description" => "画像をアップロードすると、デフォルトの画像と入れ替わります"
  ]));
}
add_action("customize_register", "portfolio_customize_register");
