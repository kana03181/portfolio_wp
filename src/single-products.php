<!-- 制作実績 個別ページ -->
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <main>
    <section class="p-detail">
      <div class="u-container">
        <div class="p-detail-inner">
          <div class="p-detail__header">
            <div class="p-detail__title">
              <hgroup class="p-detail__titleNames">
                <h2 class="p-detail__titleNamesMain"><?php the_title(); ?></h2>
                <?php if (get_field("subTitle")) : ?>
                  <p class="p-detail__titleNamesSub"><?php the_field("subTitle"); ?></p>
                <?php endif; ?>
              </hgroup>
            </div>
            <!-- /.p-detail__title -->
            <div class="p-detail__category">
              <?php $terms = get_the_terms($post->ID, "product_category"); ?>
              <?php if ($terms && !is_wp_error($terms)): ?>
                <ul class="p-detail__categoryList">
                  <?php foreach ($terms as $term) : ?>
                    <li class="p-detail__categoryListItem">
                      <a href="<?php echo esc_url(get_term_link($term, $term->taxonomy)) ?>" class="link"><?php echo esc_html($term->name) ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              <p class="p-detail__categoryBtn c-btn">
                <a href="#" class="c-btn__link is-common">
                  <span class="c-btn__linkTxt">つくったサイト</span>
                  <span class="c-btn__linkIcon is-site">
                    <svg width="12" height="12" viewBox="0 0 12 12">
                      <use xlink:href="<?php echo esc_url(THEME_URL); ?>/assets/images/arrow.svg#arrow"></use>
                    </svg>
                  </span>
                </a>
              </p>
            </div>
            <!-- /.p-detail__category -->
            <div class="p-detail__bodyHeaderThumbnail">

              <?php if (has_post_thumbnail()) : ?>
                <figure class="item">
                  <?php the_post_thumbnail(); ?>
                </figure>
              <?php endif; ?>

            </div>
            <!-- /.p-detail__bodyHeaderThumbnail -->
          </div>
          <!-- /.p-detail__header -->
          <div class="p-detail__body">
            <?php the_content(); ?>
          </div>
          <!-- /.p-detail__body -->
          <?php if (get_field("products_footerImg")) : ?>
            <div class="cm-under__bodyFooter p-detail__bodyFooterImg">
              <figure class="cm-under__bodyFooterItem body">
                <img class="img u-objectFit" src="<?php echo the_field("products_footerImg"); ?>" alt="">
              </figure>
            </div>
          <?php endif; ?>
          <!-- /.p-detail__bodyFooterImg -->
          <div class="cm-under__bodyFooterBtn">
            <p class="body c-btn">
              <a href="#" class="c-btn__link is-back">
                <span class="c-btn__linkTxt is-back">Back</span>
                <span class="c-btn__linkIcon is-back">
                  <svg width="12" height="10">
                    <use xlink:href="<?php echo esc_url(THEME_URL); ?>/assets/images/arrow.svg#arrow"></use>
                  </svg>
                </span>
                <span class="c-btn__linkTxt is-back">つくったものへ</span>
              </a>
            </p>
          </div>
          <!-- /.p-detail__bodyFooterBtn -->
        </div>
        <!-- /.p-detail-inner -->
      </div>
      <!-- /.u-container -->
    </section>
  </main>
<?php endwhile; ?>
<?php get_footer(); ?>
