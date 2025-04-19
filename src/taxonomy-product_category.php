<!-- 制作実績 カテゴリー別アーカイブページ -->
<?php get_header(); ?>
<main>
  <div class="cm-under__contents">
    <div class="cm-under__contents-inner">
      <div class="cm-under__hero">
        <div class="cm-under__hero-inner u-container">
          <div class="cm-under__heroTitle">
            <hgroup class="c-title">
              <h2 class="c-title__ja --under"><span class="c-title__jaTxt js-contentsTitle"><?php single_term_title(); ?></span></h2>
              <p class="c-title__en">Role</p>
            </hgroup>
          </div>
          <!-- /.cm-under__heroTitle -->
        </div>
        <!-- /.cm-under__hero-inner u-container -->
      </div>
      <!-- /.cm-under__hero -->
      <section class="cm-under__main p-product__main">
        <div class="cm-under__main-inner u-container">
          <div class="cm-under__mainBody p-product__mainBody">
            <!-- 各制作実績コンテンツ -->
            <?php if (have_posts()) : ?>
            <div class="p-product__bodyMain js-product__bodyMain">
              <?php while (have_posts()) : the_post();
                  get_template_part("template/content", "archive");
                endwhile; ?>
            </div>
            <!-- 各制作実績ここまで -->
            <!-- /.p-product__bodyMain -->
            <?php
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
          <!-- /.p-product__body -->
        </div>
        <!-- /.u-container -->
      </section>
      <!-- /.cm-under__main -->
    </div>
    <!-- /.cm-under_contents-inner -->
  </div>
  <!-- /.cm-under__contents -->
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