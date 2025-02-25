  <?php get_header(); ?>
  <main>
    <div>
      <div>
        <!-- <h1>いたいかなのポートフォリオ</h1> -->
      </div>
      <figure class="hero__figure">
        <?php if (get_theme_mod("hero_img")) : ?>
          <img src="<?php echo esc_url(get_theme_mod("hero_img")); ?>" width="2800" height="1865" alt="" decoding="async" />
        <?php endif; ?>
      </figure>
      <?php if (get_theme_mod("hero_text")) : ?>
        <p><?php echo esc_html(get_theme_mod("hero_text")); ?></p>
      <?php endif; ?>
    </div>
  </main>
  <?php get_footer(); ?>
