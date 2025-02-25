  <footer class="l-footer">
    <div class="cm-f-inner">
      <div class="cm-f-body">
        <div class="cm-f__bodyLogo">
          <?php if (has_custom_logo()) : ?>
            <a href="<?php echo esc_url(home_url()); ?>"></a>
            <?php the_custom_logo(); ?>
            </a>
          <?php else : ?>
            <a href="<?php echo esc_url(home_url()); ?>" class="cm-f__bodyLogoLink"><img src="#" alt="">logo</a>
          <?php endif; ?>
        </div>
        <div class="cm-f__bodyNav">
          <?php
          $args = [
            "theme_location" => "footer",
            "menu_class" => "cm-f__bodyNavList",
            "container" => false
          ];
          wp_nav_menu($args);
          ?>
        </div>
        <div class="cm-f__bodyDev">
          <ul class="cm-f__bodyDevList">
            <li class="item">Direction / Design / Photograph / Movie / Retouch : Tsukasa Konno</li>
            <li class="item">Develop : Kana Itai</li>
            <li class="item">CMS : WordPress</li>
            <li class="item">Front-End Languages : HTML / CSS / JavaScript(Swiper・GSAP)</li>
          </ul>
        </div>
        <div class="cm-f__bodyInfo">
          <ul class="cm-f__bodyInfoList">
            <li class="item"><a href="https://github.com/kana03181" class="item__link" target="_blank">Github</a></li>
            <li class="item"><a href="https://www.instagram.com/friy04/" class="item__link" target="_blank">Instagram</a></li>
            <li class="item"><a href="https://x.com/friy04" class="item__link" target="_blank">X</a></li>
            <li class="item"><a href="https://www.wainoessay.org/" class="item__link" target="_blank">Blog</a></li>
          </ul>
        </div>
        <p class="cm-f__bodyCopy"><small class="cm-f__bodyCopyTxt">&copy; 2025 Kana Itai Portfolio All Rights Reserved.</small></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>

  </html>
