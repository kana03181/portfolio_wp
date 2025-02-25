<!-- 制作実績 アーカイブページ -->
<?php get_header(); ?>
<main>
  <div class="cm-under__hero">
    <div class="u-container">
      <div class="cm-under__heroTitle">
        <hgroup class="cm-under__heroTitleNames">
          <h2 class="main"><?php post_type_archive_title(); ?></h2>
          <p class="sub">Web Production</p>
        </hgroup>
        <div class="cm-under__heroTitleImg">
          <img class="img" src="<?php echo esc_url(THEME_URL); ?>/assets/images/product_icon.svg" alt="">
        </div>
        <!-- /.cm-under__heroTitleImg -->
      </div>
      <!-- /.cm-under__heroTitle -->
      <div class="cm-under__heroImg">
        <figure class="cm-under__heroImgItem">
          <img class="img u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/product_eyecatch.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/product_eyecatch@2x.jpg" width="994" height="370" alt="パソコンを操作する女性">
        </figure>
        <p class="cm-under__heroImgTxt">scroll</p>
      </div>
      <!-- /.cm-under__heroImg -->
    </div>
    <!-- /.u-container -->
  </div>
  <!-- /.cm-under__hero -->
  <section class="p-product">
    <h2 class="u-visuallyHidden">制作実績</h2>
    <div class="u-container">
      <div class="p-product__body">
        <div class="cm-under__index p-product__bodyIndex">
          <ul class="cm-under__indexList p-product__bodyIndexList">
            <li class="cm-under__indexListItem item">
              <a class="link item__link js-categoryLink" data-slug="all" role="link">All</a>
            </li>
            <li class="cm-under__indexListItem item">
              <a class="link item__link js-categoryLink" data-slug="direction" role="link">Direction</a>
            </li>
            <li class="cm-under__indexListItem item">
              <a class="link item__link js-categoryLink" data-slug="design" role="link">Design</a>
            </li>
            <li class="cm-under__indexListItem item">
              <a class="link item__link js-categoryLink" data-slug="develop" role="link">Develop</a>
            </li>
            <li class="cm-under__indexListItem item">
              <a class="link item__link js-categoryLink" data-slug="photograph" role="link">Photograph</a>
            </li>
            <li class="cm-under__indexListItem item">
              <a class="link item__link js-categoryLink" data-slug="retouch" role="link">Retouch</a>
            </li>
          </ul>
        </div>
        <!-- /.p-product__bodyIndex -->
        <!-- 各制作実績コンテンツ -->
        <?php if (have_posts()) : ?>

        <div class="p-product__bodyMain js-product__bodyMain">

          <?php while (have_posts()) : the_post();

              get_template_part("template/content", "archive");

            endwhile;

            $args = [
              "prev_text" => "<span class='u-visuallyHidden'>前へ</span>",
              "next_text" => "<span class='u-visuallyHidden'>次へ</span>",
            ];

            the_posts_pagination($args);
            ?>

          <?php else : ?>

          <p>制作実績はありません。</p>

          <?php endif; ?>
        </div>
        <!-- 各制作実績ここまで -->
        <!-- /.p-product__bodyMain -->
      </div>
      <!-- /.p-product__body -->
      <div class="cm-under__bodyFooter p-product__bodyFooter">
        <figure class="cm-under__bodyFooterItem p-product__bodyFooterItem">
          <img class="img u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/product_next1.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/product_next1@2x.jpg 2x" alt="">
        </figure>
        <div class="cm-under__bodyFooterBtn">
          <p class="body c-btn">
            <a href="#" class="c-btn__link is-back">
              <span class="c-btn__linkTxt is-back">Back</span>
              <span class="c-btn__linkIcon">
                <svg class="c-btn__linkIcon is-back" width="12" height="10" viewBox="0 0 12 10">
                  <use xlink:href="/assets/images/arrow.svg#arrow"></use>
                </svg>
              </span>
              <span class="c-btn__linkTxt is-back">つくったものへ</span>
            </a>
          </p>
        </div>
        <!-- /.p-detail__bodyFooterBtn -->
      </div>
      <!-- /.p-product__footer -->
    </div>
    <!-- /.u-container -->
  </section>
</main>
<?php get_footer(); ?>
