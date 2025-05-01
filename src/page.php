<!-- わたしについて -->

<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>
  <main>
    <div class="cm-under__contents">
      <div class="cm-under__contents-inner">
        <div class="cm-under__hero">
          <div class="cm-under__hero-inner u-container">
            <div class="c-title">
              <hgroup class="c-title__txt">
                <h2 class="c-title__txtJa --under"><span class="c-title__txtJaItem js-contentsTitle">わたしについて</span></h2>
                <p class="c-title__txtEn">about</p>
              </hgroup>
              <div class="c-title__img">
                <img class="img js-contentsTitle" src="<?php echo esc_url(THEME_URL); ?>/assets/images/ebifurai.svg" alt="">
              </div>
              <!-- /.c-title__img -->
            </div>
            <!-- /.c-title -->
            <div class="cm-under__heroImg">
              <figure class="cm-under__heroImgItem">
                <img class="img u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_mv.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_mv@2x.jpg" width="1110" height="414" alt="夕暮れでオレンジ色に染まる空">
              </figure>
            </div>
            <!-- /.cm-under__heroImg -->
          </div>
          <!-- /.u-container -->
        </div>
        <!-- /.cm-under__hero -->
        <div class="cm-under__main p-about__main">
          <div class="cm-under__main-inner u-container">
            <div class="cm-under__mainBody p-about__mainBody">
              <div class="cm-under__index p-about__bodyIndex">
                <ul class="cm-under__indexList p-about__bodyIndexList">
                  <li class="cm-under__indexListItem item"><a href="#profile" class="link item__link">プロフィール</a></li>
                  <li class="cm-under__indexListItem item"><a href="#favorite" class="link item__link">すきなもの</a></li>
                  <li class="cm-under__indexListItem item"><a href="#life" class="link item__link">生い立ち</a></li>
                  <li class="cm-under__indexListItem item"><a href="#skill" class="link item__link">スキルセット</a></li>
                </ul>
              </div>
              <!-- /.cm-under__index  .p-product__bodyIndex -->
              <div class="p-about__content">
                <section id="profile" class="p-about__contentProfile">
                  <h2 class="title pm-about__title">プロフィール</h2>
                  <div class="p-about__contentProfileCard">
                    <div class="body pm-about__card">
                      <div class="body__item pm-about__cardBody">
                        <p class="body__itemName pm-about__cardBodyTitle">
                          <span class="body__itemNameJa">いたい かな</span>
                          <span class="body__itemNameEn">Kana Itai</span>
                        </p>
                        <p class="body__itemTxt">
                          1996年3月18日生まれ。<br class="body__itemTxtBr">魚座のAB型。<br>福岡県大野城市で生まれ、2歳のときに母の故郷である熊本へ移り住み、以降は熊本で育ちました。
                        </p>
                        <p class="body__itemTxt">
                          Webオペレーターとして転職した当初は、バナー制作などの業務を通じてデザインの勉強をしていましたが、次第にデザインよりもコーディングの楽しさに魅力を感じるようになり、独学で学び始めました。
                          現在はオンラインサロンに所属しながら、個人制作に取り組んでいます。
                        </p>
                        <p class="body__itemTxt">
                          今後はお客様のご要望に柔軟に対応しながら、+αでご提案ができるエンジニアを目指しています。
                        </p>
                      </div>
                      <!-- /.pm-about__cardBody -->
                      <div class="p-about__slideBlock">
                        <div class="swiper p-about__slideBlockSwiper js-about__swiper">
                          <ul class="swiper-wrapper">
                            <li class="swiper-slide p-about__slideBlockSwiperSlide">
                              <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_slide1.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_slide1@2x.jpg" width="502" height="395" alt="手を後ろで組み、カメラ目線で笑顔で微笑むいたいかな">
                            </li>
                            <li class="swiper-slide p-about__slideBlockSwiperSlide">
                              <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_slide2.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_slide2@2x.jpg" width="502" height="395" alt="カメラを持って写真を撮るいたいかな">
                            </li>
                            <li class="swiper-slide p-about__slideBlockSwiperSlide">
                              <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_slide3.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_slide3@2x.jpg" width="502" height="395" alt="口を閉じて少し微笑むいたいかな">
                            </li>
                          </ul>
                        </div>
                        <!-- /.swiper -->
                      </div>
                      <!-- /.p-about__slideBlock -->
                    </div>
                    <!-- /.p-about__contentProfile-inner -->
                  </div>
                  <!-- /.pm-about__card -->
                </section>
                <!-- /.p-about__contentProfile -->
                <section id="favorite" class="p-about__contentFavorite">
                  <h2 class="title pm-about__title">すきなもの</h2>
                  <div class="p-about__contentFavoriteCard">
                    <div class="body pm-about__card">
                      <div class="body__item pm-about__cardBody">
                        <p class="body__itemSubtitle pm-about__cardBodySubtitle">フィルムのような、<br class="body__itemSubtitleBr">懐かしい気持ちを</p>
                        <p class="body__itemTitle pm-about__cardBodyTitle">カメラで写真を撮る</p>
                        <p class="body__itemTxt pm-about__cardBodyTxt">
                          母の民泊のサイトで撮影をすることになったのをきっかけに、ミラーレス一眼レフカメラを購入し、写真を撮り始めました。<br>
                          空の写真を撮るのが好きです。撮った写真は、画像加工、レタッチを行い、Instagramに投稿しています。
                        </p>
                      </div>
                      <!-- /.body__items pm-about__cardBody -->
                      <div class="body__img pm-about__cardImg">
                        <figure class="body__imgBody pm-about__cardImgBody">
                          <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/detail_favorite1.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/detail_favorite1@2x.jpg 2x" width="420" height="315" decoding="async" loading="lazy" alt="カメラのモニターで写真を確認している">
                        </figure>
                      </div>
                      <!-- /.inner-->
                    </div>
                    <!-- /.body -->
                    <div class="body pm-about__card">
                      <div class="body__item pm-about__cardBody">
                        <p class="body__itemSubtitle pm-about__cardBodySubtitle">わたしの日々の気持ちを残す</p>
                        <p class="body__itemTitle pm-about__cardBodyTitle">エッセイを書く</p>
                        <p class="body__itemTxt pm-about__cardBodyTxt">
                          小原 晩(おばら ばん)という作家さんの影響で、去年からエッセイを書き始めました。日々をブログに書くことで、その時のわたしの気持ちが残せることが楽しいです。
                        </p>
                      </div>
                      <!-- /.body__items pm-about__cardBody -->
                      <div class="body__img pm-about__cardImg">
                        <figure class="body__imgBody pm-about__cardImgBody">
                          <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/detail_favorite2.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/detail_favorite2@2x.jpg 2x" width="420" height="315" decoding="async" loading="lazy" alt="机の上で本を開き、左手で押さえてながら読んでいる">
                        </figure>
                      </div>
                      <!-- /.inner-->
                    </div>
                    <!-- /.body -->
                    <div class="body pm-about__card">
                      <div class="body__item pm-about__cardBody">
                        <p class="body__itemSubtitle pm-about__cardBodySubtitle">素直な気持ちで楽しめる</p>
                        <p class="body__itemTitle pm-about__cardBodyTitle">アニメを見る</p>
                        <p class="body__itemTxt pm-about__cardBodyTxt">
                          小学生の頃から「銀魂」のファンです。コロナ禍で「鬼滅の刃」も好きになり、何度もアニメを見返しています。炭治郎の鬼を倒すためにひたむきに努力する姿に心を打たれました。
                        </p>
                      </div>
                      <!-- /.body__items pm-about__cardBody -->
                      <div class="body__img pm-about__cardImg">
                        <figure class="body__imgBody pm-about__cardImgBody">
                          <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/detail_favorite3.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/detail_favorite3@2x.jpg 2x" width="420" height="315" decoding="async" loading="lazy" alt="スマホを両手で持ちながらアニメを見ている。">
                        </figure>
                      </div>
                      <!-- /.inner-->
                    </div>
                    <!-- /.body -->
                  </div>
                  <!-- /.p-about__contentFavoriteCard pm-about__card -->
                </section>
                <!-- /.p-about__contentFavorite -->
                <section id="life" class="p-about__contentCareer">
                  <h2 class="title pm-about__title">生い立ち</h2>
                  <div class="p-about__contentCareerCard js-about__card">
                    <div class="body pm-about__card">
                      <div class="body__item pm-about__cardBody">
                        <p class="body__itemTitle pm-about__cardBodyTitle">幼少期〜15歳</p>
                        <p class="body__itemTxt pm-about__cardBodyTxt">
                          福岡県大野城市でこの世に生まれ、2歳からは母の生まれ故郷の熊本で育ちました。外で遊ぶのが好きな活発な子供で、足はいつも擦り傷だらけ。小・中学校ではバドミントン部に所属していました。
                        </p>
                      </div>
                      <!-- /.pm-about__cardBody -->
                      <div class="body__img pm-about__cardImg">
                        <figure class="body__imgBody">
                          <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer01.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer01@2x.jpg 2x" width="305" height="305" decoding="async" loading="lazy" alt="">
                        </figure>
                      </div>
                      <!-- /.body__img pm-about__cardImg -->
                    </div>
                    <!-- /.body pm-about__card -->
                  </div>
                  <!-- /.p-about__contentCareerCard -->
                  <div class="p-about__contentCareerCard js-about__card">
                    <div class="body pm-about__card">
                      <div class="body__item pm-about__cardBody">
                        <p class="body__itemTitle pm-about__cardBodyTitle">15〜18歳</p>
                        <p class="body__itemTxt pm-about__cardBodyTxt">
                          模試の合格判定がDの高校に一か八かで受験し、奇跡的に合格。球技が苦手なのに「楽しそうだから」という理由でハンドボール部に入部し、3年間必死にボールを追う日々を過ごしました。
                        </p>
                      </div>
                      <!-- /.body__item pm-about__cardBody -->
                      <div class="body__img pm-about__cardImg">
                        <figure class="body__imgBody">
                          <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer02.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer02@2x.jpg 2x" width="305" height="305" decoding="async" loading="lazy" alt="">
                        </figure>
                      </div>
                      <!-- /.body__img pm-about__cardImg -->
                    </div>
                    <!-- /.body pm-about__card -->
                  </div>
                  <!-- /.p-about__contentCareerCard js-about__card -->
                  <div class="p-about__contentCareerCard js-about__card">
                    <div class="body pm-about__card">
                      <div class="body__item pm-about__cardBody">
                        <p class="body__itemTitle pm-about__cardBodyTitle">18〜21歳</p>
                        <p class="body__itemTxt pm-about__cardBodyTxt">
                          大阪のブライダル専門学校に進学。海外生活に興味があり、学校の制度を利用して10ヵ月間アメリカのシアトルに留学しました。10年経った今でもホストファミリーとはたまに連絡を取り合っています。在学中はリーガロイヤルホテル大阪でアルバイトをしていました。
                        </p>
                      </div>
                      <!-- /.body__item pm-about__cardBody -->
                      <div class="body__img pm-about__cardImg">
                        <figure class="body__imgBody">
                          <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer03.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer03@2x.jpg 2x" width="305" height="305" decoding="async" loading="lazy" alt="">
                        </figure>
                      </div>
                      <!-- /.body__img pm-about__cardImg -->
                    </div>
                    <!-- /.body pm-about__card -->
                  </div>
                  <!-- /.p-about__contentCareerCard js-about__card -->
                  <div class="p-about__contentCareerCard js-about__card">
                    <div class="body pm-about__card">
                      <div class="body__item pm-about__cardBody">
                        <p class="body__itemTitle pm-about__cardBodyTitle">21〜22歳</p>
                        <p class="body__itemTxt pm-about__cardBodyTxt">
                          ドレスコーディネーターとしてブライダル系企業に入社。挙式部門の衣装部に所属し、自社運営結婚式場で契約されたお客様とフォトスタジオで前撮りをするお客様の衣装合わせを担当しました。「Webデザイナー」という職種に興味が湧き、仕事と並行してWeb専門スクールでPhotoshopやIllustlator、コーディングについて学びました。
                        </p>
                      </div>
                      <!-- /.body__item pm-about__cardBody -->
                      <div class="body__img pm-about__cardImg">
                        <figure class="body__imgBody">
                          <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer04.png" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer04@2x.png 2x" width="305" height="305" decoding="async" loading="lazy" alt="">
                        </figure>
                      </div>
                      <!-- /.body__img pm-about__cardImg -->
                    </div>
                    <!-- /.body pm-about__card -->
                  </div>
                  <!-- /.p-about__contentCareerCard js-about__card -->
                  <div class="p-about__contentCareerCard js-about__card">
                    <div class="body pm-about__card">
                      <div class="body__item pm-about__cardBody">
                        <p class="body__itemTitle pm-about__cardBodyTitle">22〜29歳</p>
                        <p class="body__itemTxt pm-about__cardBodyTxt">
                          IT業界に転職。Webオペレーターとして2社で自社サイトの運用に携わり、主に自社サイトの更新・運用作業を担当しました。2021年よりWebクリエーター養成所 Shibajukuに入会。Webの力でたくさんの人を笑顔にできるよう、現在も継続して勉強をしています。
                        </p>
                      </div>
                      <!-- /.body__item pm-about__cardBody -->
                      <div class="body__img pm-about__cardImg">
                        <figure class="body__imgBody">
                          <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer05.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer05@2x.jpg 2x" width="305" height="305" decoding="async" loading="lazy" alt="">
                        </figure>
                      </div>
                      <!-- /.body__img pm-about__cardImg -->
                    </div>
                    <!-- /.body pm-about__card -->
                  </div>
                  <!-- /.p-about__contentCareerCard js-about__card -->
                </section>
                <!-- /.p-about__contentCareer -->
                <section id="skill" class="p-about__contentSkill">
                  <h2 class="title pm-about__title">スキルセット</h2>
                  <dl class="p-about__contentSkillCard">
                    <div class="body">
                      <dt class="body__title">Web Development</dt>
                      <dd class="body__txt">
                        <p class="body__txtSentence">
                          静的なWebサイトから動きのある表現まで、目的に応じて柔軟に制作を行っています。Webクリエイター オンラインサロン「Shibajuku」で学んだフロントエンドの知識を活かしながら、ユーザーにとって快適で親しみやすく、理解しやすいコーディングを心がけています。
                        </p>
                        <p class="body__txtSentence">
                          CMSはオリジナルテンプレートの作成・記事の更新作業・お問い合わせフォームの制作まで制作しております。
                        </p>
                        <div class="body__dev">
                          <ul class="body__devList">
                            <li class="body__devListItem">HTML5</li>
                            <li class="body__devListItem">CSS3</li>
                            <li class="body__devListItem">JavaScript</li>
                            <li class="body__devListItem">WordPress</li>
                          </ul>
                        </div>
                      </dd>
                    </div>
                  </dl>
                </section>
                <!-- /.p-about__bodyMainSkill -->
              </div>
              <!-- /.cm-under__contentsBody -->
            </div>
            <!-- /.cm-under__contentsBody -->
          </div>
          <!-- /.u-container -->
        </div>
        <!-- /.cm-under__main -->
      </div>
      <!-- /.cm-under__contents-inner -->
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
<?php endwhile; ?>
<?php get_footer(); ?>
