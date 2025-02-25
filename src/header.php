<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/svg+xml" href="<?php echo esc_url(ViteHelper::PUBLIC_URL); ?>/favicon.svg">
  <?php wp_head(); ?>
</head>

<body>
  <header class="cm-h">
    <div class="cm-h-inner">
      <h1 class="cm-h__logo">
        <?php if (has_custom_logo()) : ?>
          <a href="<?php echo esc_url(home_url()); ?>"></a>
          <?php the_custom_logo(); ?>
          </a>
        <?php else : ?>
          <a href="<?php echo esc_url(home_url()); ?>" class="cm-h__logoLink">logo</a>
        <?php endif; ?>
      </h1>
      <nav class="cm-h__nav">
        <span class="u-visuallyHidden">サイト内メニュー</span>
        <button type="button" class="cm-h__navMenu js-drawer" aria-controls="globalNav" aria-expanded="false">
          <span class="cm-h__navMenuLine">
            <span class="u-visuallyHidden">メニューを開閉する</span>
          </span>
        </button>
        <?php
        $args = [
          "theme_location" => "global",
          "menu_class" => "cm-h__navList",
          "menu_id" => "globalNav",
          "container" => false
        ];
        wp_nav_menu($args);
        ?>
      </nav>
    </div>
  </header>
