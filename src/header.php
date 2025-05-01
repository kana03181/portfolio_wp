<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/svg+xml" href="<?php echo esc_url(ViteHelper::PUBLIC_URL); ?>/favicon_ebi.svg">
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
          <a href="<?php echo esc_url(home_url()); ?>" class="cm-h__logoLink">いたいかなのポートフォリオ</a>
        <?php endif; ?>
      </h1>
      <nav class="cm-h__nav">
        <span class="u-visuallyHidden">サイト内メニュー</span>
        <button type="button" class="cm-h__navMenu js-drawer" aria-controls="globalNav" aria-expanded="false">
          <span class="cm-h__navMenuItem --open js-drawer-open is-active">メニュー</span>
          <span class="cm-h__navMenuItem --close js-drawer-close">とじる</span>
        </button>
        <div class="cm-nav-inner">
          <?php
          $args = [
            "theme_location" => "global",
            "menu_class" => "cm-h__navList",
            "menu_id" => "globalNav",
            "container" => false
          ];
          wp_nav_menu($args);
          ?>
          <div class="cm-h__navInfo">
            <ul class="cm-h__navInfoList">
              <li class="item"><a href="https://github.com/kana03181" class="item__link" target="_blank">Github</a></li>
              <li class="item"><a href="https://www.instagram.com/friy04/" class="item__link" target="_blank">Instagram</a></li>
              <li class="item"><a href="https://x.com/friy04" class="item__link" target="_blank">X</a></li>
              <li class="item"><a href="https://www.wainoessay.org/" class="item__link" target="_blank">Blog</a></li>
            </ul>
          </div>
          <div class="cm-h__navImg">
            <figure class="cm-h__navImgBody">
              <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/top_humberger.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/top_humberger@2x.jpg" width="176" height="132" alt="海辺の突堤に腰を掛けるいたいかな">
            </figure>
          </div>
          <p class="cm-h__navCopy"><small class="cm-h__navCopyTxt">&copy; 2025 Kana Itai Portfolio All Rights Reserved.</small></p>
        </div>
      </nav>
    </div>
  </header>
