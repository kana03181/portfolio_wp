<!-- 制作実績 記事コンテンツ -->
<article class="p-product__bodyMainBlock">
  <h3 class="title">
    <?php if (get_field("subTitle")) : ?>
      <span class="title__sub"> <?php the_field("subTitle"); ?></span>
    <?php endif; ?>
    <span class="title__main"><?php the_title(); ?></span>
  </h3>
  <p class="txt"><?php the_excerpt(); ?></p>
  <?php $terms = get_the_terms($post->ID, "product_category");   ?>
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
  <figure class="thumb">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail(); ?>
    <?php else : ?>
      <p>画像がありません。</p>
    <?php endif; ?>
  </figure>
  <p class="body__btn c-btn">
    <a href="<?php the_permalink(); ?>" class="c-btn__link is-common">
      <span class="c-btn__linkTxt">詳しく見る</span>
      <span class="c-btn__linkIcon">
        <svg width="12" height="10" viewBox="0 0 12 10">
          <use xlink:href="/assets/images/arrow.svg#arrow"></use>
        </svg>
      </span>
    </a>
  </p>
</article>
