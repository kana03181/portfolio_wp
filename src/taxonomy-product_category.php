<!-- 制作実績 カテゴリー別アーカイブページ -->
<?php get_header(); ?>
<main>
  <div class="cm-under__hero">
    <div class="u-container">
      <div class="cm-under__heroTitle">
        <hgroup class="cm-under__heroTitleNames">
          <h2 class="main">Role : <?php single_term_title(); ?></h2>
        </hgroup>
        <div class="cm-under__heroTitleImg">
          <img class="img" src="<?php echo esc_url(THEME_URL); ?>/assets/images/product_icon.svg" alt="">
        </div>
        <!-- /.cm-under__heroTitleImg -->
      </div>
      <!-- /.cm-under__heroTitle -->
    </div>
    <!-- /.u-container -->
  </div>
  <!-- /.cm-under__hero -->
  <section class="p-product">
    <div class="u-container">
      <div class="p-product__body">

        <!-- 各制作実績コンテンツ -->
        <?php if (have_posts()) : ?>
          <div class="p-product__bodyMain">
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
                  <use xlink:href="<?php echo esc_url(THEME_URL); ?>/assets/images/arrow.svg#arrow"></use>
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
