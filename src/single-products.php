<!-- 制作実績 個別ページ -->
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <main>
    <section class="p-detail">
      <div class="cm-under__main-inner u-container">
        <div class="p-detail-inner">
          <div class="p-detail__header">
            <div class="p-detail__headerTitle">
              <hgroup class="p-detail__headerTitleNames">
                <h2 class="main"><?php the_title(); ?></h2>
                <?php if (get_field("subTitle")) : ?>
                  <p class="sub"><?php the_field("subTitle"); ?></p>
                <?php endif; ?>
              </hgroup>
            </div>
            <!-- /.p-detail__headerTitle -->
            <div class="p-detail__headerCategory">
              <?php $terms = get_the_terms($post->ID, "product_category"); ?>
              <?php if ($terms && !is_wp_error($terms)): ?>
                <ul class="p-detail__headerCategoryList">
                  <?php foreach ($terms as $term) : ?>
                    <li class="item">
                      <a href="<?php echo esc_url(get_term_link($term, $term->taxonomy)) ?>" class="item__link"><?php echo esc_html($term->name) ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              <p class="c-btn">
                <?php if ("site_url") : ?>
                  <a href="<?php the_field("site_url"); ?>" target="_blank" class="c-btn__link --detail js-btn__link">
                  <?php endif; ?>
                  <span class="c-btn__linkTxt">つくったサイト</span>
                  <span class="c-btn__linkIcon --detail">
                    <svg class="c-btn__linkIconArrow" width="12" height="10" viewBox="0 0 12 10">
                      <use href="#arrow"></use>
                    </svg>
                    <svg class="c-btn__linkIconArrow" width="12" height="10" viewBox="0 0 12 10">
                      <use href="#arrow"></use>
                    </svg>
                  </span>
                  </a>
              </p>
            </div>
            <!-- /.p-detail__headerCategory -->
            <div class="p-detail__headerThumbnail">
              <?php if (has_post_thumbnail()) : ?>
                <figure class="p-detail__headerThumbnailItem">
                  <?php the_post_thumbnail(); ?>
                </figure>
              <?php endif; ?>
            </div>
            <!-- /.p-detail__headerThumbnail -->
          </div>
          <!-- /.p-detail__header -->
          <div class="p-detail__main">
            <div class="p-detail__mainHeader">
              <?php the_content(); ?>
            </div>
            <!-- /.p-detail__bodyHeader -->
            <div class="p-detail__bodyMain">
              <?php
              $meta_fields = [
                '_date'      => '公開日',
                '_finish'      => '完成日',
                '_scale'     => '制作規模',
                '_position'  => '制作担当',
                '_term'      => '制作期間',
                '_time'      => '制作時間',
                '_language'  => '使用言語',
                '_develop'   => '開発環境',
                '_tool'      => '使用ツール',
                '_equipment' => '撮影機材',
                '_location'  => '撮影場所',
              ];

              $has_meta = false;

              foreach ($meta_fields as $key => $label) {
                $value = get_post_meta(get_the_ID(), $key, true);
                if (!empty($value)) {
                  $has_meta = true;
                  break;
                }
              }
              ?>
              <?php if ($has_meta) : ?>
                <dl class="p-detail__bodyMainInfo">
                  <?php foreach ($meta_fields as $key => $label) : ?>
                    <?php $value = get_post_meta(get_the_ID(), $key, true); ?>
                    <?php if (!empty($value)) : ?>
                      <div class="item">
                        <dt class="item_label"><?php echo esc_html($label); ?></dt>
                        <dd class="item_txt">
                          <?php if ($key === "_term" || $key === "_time" && strpos($value, "　") !== false) : ?>
                            <ul>
                              <?php
                              $items = preg_split("/　+/u", $value);
                              foreach ($items as $item) :
                                if (trim($item) !== ""):
                              ?>
                                  <li><?php echo esc_html(trim($item)); ?></li>
                                <?php endif; ?>
                              <?php endforeach; ?>
                            </ul>
                          <?php else : ?>
                            <?php echo esc_html($value); ?>
                          <?php endif; ?>
                        </dd>
                      </div>
                    <?php endif; ?>
                  <?php endforeach; ?>
                </dl>
              <?php endif; ?>
            </div>
            <!-- /.p-detail__bodyMain -->
          </div>
          <!-- /.p-detail__body -->
          <div class="p-detail__Btn c-productsBtn">
            <?php
            $menu = wp_get_nav_menu_object("grobal");

            if ($menu) {
              $menu_items = wp_get_nav_menu_items($menu->term_id);
            }

            $url = "#";

            if (!empty($menu_items)) {
              foreach ($menu_items as $item) {
                if (isset($item->url) && strpos($item->url, '/products') !== false) {
                  $url = esc_url($item->url);
                  break;
                }
              }
            }
            ?>
            <a class="p-detail__BtnInner c-productsBtnInner js-btn__link" href="<?php echo $url; ?>">
              <p class="c-btn__linkTxt">つくったものをすべて見る</p>
              <p class="c-btn">
                <span class="c-btn__link">
                  <span class="c-btn__linkIcon">
                    <svg class="c-btn__linkIconArrow" width="12" height="10" viewBox="0 0 12 10">
                      <use href="#arrow"></use>
                    </svg>
                    <svg class="c-btn__linkIconArrow" width="12" height="10" viewBox="0 0 12 10">
                      <use href="#arrow"></use>
                    </svg>
                  </span>
                </span>
              </p>
            </a>
            <!-- /.p-top__worksBtnInner -->
          </div>
          <!-- /.p-top__worksBtn -->
        </div>
        <!-- /.p-detail-inner -->
      </div>
      <!-- /.u-container -->
      <div class="cm-mainFooter">
        <div class="cm-mainFooter-inner">
          <figure class="cm-mainFooter__Img">
            <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/top_mainFooter.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/top_mainFooter@2x.jpg" width="495" height="392" alt="">
          </figure>
        </div>
        <!-- /.cm-mainFooter-inner -->
      </div>
      <!-- /.cm-mainFooter -->
    </section>
  </main>
<?php endwhile; ?>
<?php get_footer(); ?>
