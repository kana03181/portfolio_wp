  <?php get_header(); ?>
  <main>
    <div class="p-top__mv">
      <div class="p-top__mv-inner">
        <div class="p-top__mvItems">
          <div class="p-top__mvItemsMovie">
            <div class="bg">
              <video src="<?php echo esc_url(THEME_URL); ?>/assets/images/top_mv.mp4" autoplay muted playsinline loop width="995" height="547"></video>
            </div>
            <!-- /.bg -->
            <div class="txt">
              <p class="txt__sentence js-title">うまくいかない日々が駆け巡る。</p>
              <p class="txt__sentence js-title">それでもわたしは、前に進み続ける。</p>
              <p class="txt__sentence js-title">自分で決めた”目標”に向かって。</p>
            </div>
            <!-- /.txt -->
          </div>
          <!-- p-top__mvItemsMovie -->
          <div class="p-top__mvItemsSlider">
            <div class="swiper js-top__swiper">
              <ul class="swiper-wrapper">
                <li class="swiper-slide swiperSlide --bg1">
                  <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/mv_slide1.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/mv_slide1@2x.jpg" width="575" height="383" alt="貝殻を持つ手">
                </li>
                <li class="swiper-slide swiperSlide --bg1">
                  <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/mv_slide2.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/mv_slide2@2x.jpg" width="575" height="383" alt="海辺で両手を広げて笑顔で回っている">
                </li>
                <li class="swiper-slide swiperSlide --bg2">
                  <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/mv_slide3.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/mv_slide3@2x.jpg" width="575" height="383" alt="キーボードを使ってタイピングをしている手">
                </li>
                <li class="swiper-slide swiperSlide --bg2">
                  <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/mv_slide4.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/mv_slide4@2x.jpg" width="575" height="383" alt="木の影が写るコンクリートの壁">
                </li>
              </ul>
              <div class="swiper__item">
                <div class="swiper-pagination swiper__itemPagination js-swiper-pagination"></div>
                <div class="swiper__itemBtns">
                  <button class="swiper__itemBtnsMv js-btn__play --play is-play">
                    <i class="fa-solid fa-play">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </i>
                  </button>
                  <button class="swiper__itemBtnsMv js-btn__pause --pause">
                    <i class="fa-solid fa-pause">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path d="M48 64C21.5 64 0 85.5 0 112L0 400c0 26.5 21.5 48 48 48l32 0c26.5 0 48-21.5 48-48l0-288c0-26.5-21.5-48-48-48L48 64zm192 0c-26.5 0-48 21.5-48 48l0 288c0 26.5 21.5 48 48 48l32 0c26.5 0 48-21.5 48-48l0-288c0-26.5-21.5-48-48-48l-32 0z" />
                      </svg>
                    </i>
                  </button>
                </div>
              </div>
              <!-- /.swiper__item -->
            </div>
            <!-- swiper -->
            <svg class="bg --pc js-bg" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 815 837" fill="none">
              <path fill="#CCE5F1" d="M815 557.664V0H20.075C8.984 0 0 7.989 0 17.847v521.97c0 9.858 8.984 17.847 20.075 17.847h639.341c81.024 0-18.329 54.941 3.884 81.937 29.983 36.435 150.746-73.299 151.7-81.937Z" />
              <g clip-path="url(#a)">
                <g clip-path="url(#b)">
                  <path fill="#CCE5F1" d="M650.04 692.02c0-11.609-9.411-21.02-21.02-21.02S608 680.411 608 692.02s9.411 21.02 21.02 21.02 21.02-9.411 21.02-21.02Z" />
                </g>
                <g clip-path="url(#c)">
                  <path fill="#CCE5F1" d="M589.04 756.02c0-11.609-9.411-21.02-21.02-21.02S547 744.411 547 756.02s9.411 21.02 21.02 21.02 21.02-9.411 21.02-21.02Z" />
                </g>
                <path fill="#CCE5F1" d="M527.04 816.02c0-11.609-9.411-21.02-21.02-21.02S485 804.411 485 816.02s9.411 21.02 21.02 21.02 21.02-9.411 21.02-21.02Z" />
              </g>
              <defs>
                <clipPath id="a">
                  <path fill="#fff" d="M485 671h165.4v165.88H485z" />
                </clipPath>
                <clipPath id="b">
                  <path fill="#fff" d="M608 671h42.04v42.04H608z" />
                </clipPath>
                <clipPath id="c">
                  <path fill="#fff" d="M547 735h42.04v42.04H547z" />
                </clipPath>
              </defs>
            </svg>
            <svg class="bg --sp js-bg" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 302 297" fill="none">
              <g clip-path="url(#a)">
                <path fill="#CCE5F1" d="M282 0H20C8.95 0 0 8.95 0 20v215.996c0 11.05 8.95 20.001 20 20.001h210.86c37.05 0-8.38 25.22 1.77 37.61 13.71 16.731 68.93-33.65 69.37-37.61V20c0-11.05-8.95-20-20-20Z" />
              </g>
              <defs>
                <clipPath id="a">
                  <path fill="#fff" d="M0 0h302v297H0z" />
                </clipPath>
              </defs>
            </svg>
          </div>
          <!-- /.p-top__mvItemsSlider -->
        </div>
        <!-- /.p-top__mvItems -->
      </div>
      <!-- /.p-top__mv-inner -->
    </div>
    <!-- /.p-top__mv -->
    <section class="p-top__about">
      <div class="p-top__about-inner">
        <hgroup class="c-title">
          <h2 class="c-title__ja"><span class="c-title__jaTxt js-contentsTitle">わたしについて</span></h2>
          <p class="c-title__en">about</p>
        </hgroup>
        <div class="p-top__aboutContents">
          <div class="p-top__aboutContentsRight">
            <div class="header">
              <p class="header__name">
                <span class="header__nameJa">いたいかな</span>
                <span class="header__nameEn">Kana Itai</span>
              </p>
            </div>
            <!-- /.p-top__aboutRightHeader -->
            <div class="main">
              <p class="main__txt">
                専門学校を卒業後、ブライダル業界で勤務中にお客様から「ホームページが見ずらい」と言われたのをきっかけに、
                Web制作に興味を持ちました。
              </p>
              <p class="main__txt">
                その後、スクールで学びWebオペレーターとして5年勤務。休日は独学でコーディングを勉強するようになり、コードを書く楽しさを仕事にしたくなりました。「Webで人をワクワクさせる」をモットーに今日もコードを書いています。 </p>
            </div>
            <!-- /.p-top__aboutRightMain -->
            <p class="footer c-btn">
              <?php
              $menu = wp_get_nav_menu_object("grobal");

              if ($menu) {
                $menu_items = wp_get_nav_menu_items($menu->term_id);
              }

              $url = "#";

              if (!empty($menu_items)) {
                foreach ($menu_items as $item) {
                  if (isset($item->url) && strpos($item->url, '/about') !== false) {
                    $url = esc_url($item->url);
                    break;
                  }
                }
              }
              ?>
              <a href="<?php echo $url; ?>" class="c-btn__link js-btn__link">
                <span class="c-btn__linkTxt">生い立ちを見る</span>
                <span class="c-btn__linkIcon">
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
          <!-- /.p-top__aboutRightMain -->
          <div class="p-top__aboutContentsLeft">
            <figure class="thumbnail">
              <img class="thumbnail__img u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/top_about_profile.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/top_about_profile@2x.jpg" width="495" height="392" alt="カメラ目線で微笑むいたいかな">
            </figure>
          </div>
          <!-- /.p-top__aboutLeft -->
        </div>
      </div>
      <!-- /.p-top__about-inner -->
    </section>
    <section class="p-top__works">
      <div class="p-top__works-inner">
        <hgroup class="c-title">
          <h2 class="c-title__ja"><span class="c-title__jaTxt js-contentsTitle">つくったもの</span></h2>
          <p class="c-title__en">works</p>
        </hgroup>
        <?php
        $args = [
          "post_type" => "products",
          "posts_per_page" => 2,
          "post__in" => [57, 59],
          "orderby" => "post__in",
        ];

        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()) : ?>
          <div class="p-top__worksContents">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <article class="p-top__worksContentsItem js-productsCard">
                <div class="txt">
                  <h3 class="txt__title">
                    <?php if (get_field("subTitle")) : ?>
                      <span class="txt__titleSub"><?php the_field("subTitle"); ?></span>
                    <?php endif; ?>
                    <span class="txt__titleMain"><?php the_title(); ?></span>
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
                      echo '<p class="txt_sentence">' . esc_html($first_sentence) . '</p>';
                    }
                  }
                  ?>
                  <?php $terms = get_the_terms($post->ID, "product_category"); ?>
                  <?php if ($terms && !is_wp_error($terms)): ?>
                    <ul class="category">
                      <?php foreach ($terms as $term) : ?>
                        <?php if ($term->slug !== "all") : ?>
                          <li class="category__Item">
                            <a href="<?php echo esc_url(get_term_link($term, $term->taxonomy)); ?>" class="category__Item__Link"><?php echo esc_html($term->name); ?></a>
                          </li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                  <p class="c-btn">
                    <a href="<?php the_permalink(); ?>" class="c-btn__link js-btn__link">
                      <span class="c-btn__linkTxt">詳しく見る</span>
                      <span class="c-btn__linkIcon">
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
                <div class="thumbnail">
                  <figure class="thumbnail__img js-productsImg">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <p>画像がありません。</p>
                    <?php endif; ?>
                  </figure>
                </div>
                <!-- /.thumbnail -->
              </article>
            <?php endwhile; ?>
          </div>
          <!-- /.p-top__worksContents -->
          <div class="p-top__worksBtn c-productsBtn js-productsBtn">
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
            <a class="p-top__worksBtnInner c-productsBtnInner js-btn__link" href="<?php echo $url; ?>">
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
        <?php else : ?>
          <p>制作実績はありません。</p>
        <?php endif;
        wp_reset_postdata(); ?>
      </div>
      <!-- /.p-top__works-inner -->
    </section>
    <div class="cm-mainFooter">
      <div class="cm-mainFooter-inner">
        <figure class="cm-mainFooter__Img">
          <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/top_mainFooter.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/top_mainFooter@2x.jpg" width="495" height="392" alt="">
        </figure>
      </div>
      <!-- /.cm-mainFooter-inner -->
    </div>
    <!-- /.cm-mainFooter -->
  </main>
  <?php get_footer(); ?>
