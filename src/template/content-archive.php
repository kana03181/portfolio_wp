<!-- 制作実績 記事コンテンツ -->
<article class="p-product__bodyMainBlock js-productsCard">
  <h3 class="title">
    <?php if (get_field("subTitle")) : ?>
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
  <figure class="thumb js-productsImg">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail(); ?>
    <?php else : ?>
      <p>画像がありません。</p>
    <?php endif; ?>
  </figure>
  <p class="body__btn c-btn">
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
</article>
