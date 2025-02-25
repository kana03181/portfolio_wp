<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>
  <main>
    <div class="cm-under__hero">
      <div class="u-container">
        <div class="cm-under__heroTitle">
          <hgroup class="cm-under__heroTitleNames">
            <h2 class="main">わたしについて</h2>
            <p class="sub">About</p>
          </hgroup>

          <div class="cm-under__heroTitleImg">
            <img class="img" src="<?php echo esc_url(THEME_URL); ?>/assets/images/product_icon.svg" alt="">
          </div>
          <!-- /.cm-under__heroTitleImg -->
        </div>
        <!-- /.cm-under__heroTitle -->
        <div class="cm-under__heroImg">
          <figure class="cm-under__heroImgItem">
            <img class="img u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/product_eyecatch.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/product_eyecatch@2x.jpg" width="994" height="370" alt="パソコンを操作する女性">
          </figure>
          <p class="cm-under__heroImgTxt">scroll</p>
        </div>
        <!-- /.cm-under__heroImg -->
      </div>
      <!-- /.u-container -->
    </div>
    <!-- /.cm-under__hero -->
    <section class="p-about">
      <h2 class="u-visuallyHidden">自己紹介</h2>
      <div class="u-container">
        <div class="p-about__body">
          <div class="cm-under__index p-about__bodyIndex">
            <ul class="cm-under__indexList p-about__bodyIndexList">
              <li class="cm-under__indexListItem item"><a href="#profile" class="link item__link">プロフィール</a></li>
              <li class="cm-under__indexListItem item"><a href="#favorite" class="link item__link">すきなもの</a></li>
              <li class="cm-under__indexListItem item"><a href="#skill" class="link item__link">スキルセット</a></li>
              <li class="cm-under__indexListItem item"><a href="#career" class="link item__link">キャリア</a></li>
              <li class="cm-under__indexListItem item"><a href="#" class="link item__link">習慣化していること</a></li>
              <li class="cm-under__indexListItem item"><a href="#careerVision" class="link item__link">キャリアビジョン</a></li>
            </ul>
          </div>
          <!-- /.p-product__bodyIndex -->
          <div class="p-about__bodyMain">
            <div id="profile" class="p-about__bodyMainProfile">
              <h3 class="title pm-about__title">プロフィール</h3>
              <div class="cardBlock pm-about__card">
                <div class="cardBlock__body pm-about__cardBody">
                  <p class="cardBlock__title pm-about__cardBodyTitle">いたい かな</p>
                  <p class="cardBlock__txt pm-about__cardBodyTxt">
                    1996年3月18日生まれ。魚座のAB型。福岡県大野城市でこの世に生まれ、2歳からは母の生まれ故郷の熊本で育ちました。<br>
                    現在はオンラインサロンでコーディングの勉強をしながら、日々勉強・制作しております。<br>
                    今後は、身体的ハンデを抱えた人でもWebを楽しめるようにアクセシビリティを極め、どんな人が見てもワクワクするようなWebサイトを作る「フロントエンドエンジニア」を目指しております。
                  </p>
                </div>
                <!-- /.pm-about__cardBody -->
                <figure class="cardBlock__img pm-about__cardImg">
                  <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_profile.JPEG" width="305" height="305" decoding="async" loading="lazy" alt="いたいかな">
                </figure>
              </div>
              <!-- /.pm-about__card -->
            </div>
            <!-- /.p-about__bodyMainProfile -->
            <div id="favorite" class="p-about__bodyMainFavorite">
              <h3 class="title pm-about__title">すきなもの</h3>
              <div class="cardBlock pm-about__card">
                <div class="cardBlock__body pm-about__cardBody">
                  <p class="cardBlock__subtitle pm-about__cardBodySubtitle">フィルムのような、<wbr>懐かしい気持ちを</p>
                  <p class="cardBlock__title pm-about__cardBodyTitle">カメラで写真を撮る</p>
                  <p class="cardBlock__txt pm-about__cardBodyTxt">
                    母の民泊のサイトで撮影をすることになったのをきっかけに、ミラーレス一眼レフカメラを購入し、写真を撮り始めました。<br>
                    空の写真を撮るのが好きです。撮った写真は、画像加工、レタッチを行い、Instagramに投稿しています。
                  </p>
                </div>
                <!-- /.pm-about__cardBody -->
                <figure class="cardBlock__img pm-about__cardImg">
                  <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/detail_img1.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/detail_img2@2x.jpg 2x" width="305" height="305" decoding="async" loading="lazy" alt="いたいかな">
                </figure>
              </div>
              <!-- /.pm-about__card -->
              <div class="cardBlock pm-about__card">
                <div class="cardBlock__body pm-about__cardBody">
                  <p class="cardBlock__subtitle pm-about__cardBodySubtitle">わたしの日々の気持ちを残す</p>
                  <p class="cardBlock__title pm-about__cardBodyTitle">エッセイを書く</p>
                  <p class="cardBlock__txt pm-about__cardBodyTxt">
                    小原晩という作家さんの影響で、去年からエッセイを書き始めました。書くことで、わたしの気持ちの残せることが楽しいです。
                  </p>
                </div>
                <!-- /.pm-about__cardBody -->
                <figure class="cardBlock__img pm-about__cardImg">
                  <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/detail_img1.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/detail_img2@2x.jpg 2x" width="305" height="305" decoding="async" loading="lazy" alt="いたいかな">
                </figure>
              </div>
              <!-- /.pm-about__card -->
              <div class="cardBlock pm-about__card">
                <div class="cardBlock__body pm-about__cardBody">
                  <p class="cardBlock__subtitle pm-about__cardBodySubtitle">素直な気持ちで楽しめる</p>
                  <p class="cardBlock__title pm-about__cardBodyTitle">アニメを見る</p>
                  <p class="cardBlock__txt pm-about__cardBodyTxt">
                    小学生の頃から「銀魂」のファンです。コロナ禍で「鬼滅の刃」も好きになり、何度もアニメを見返しています。炭治郎の鬼を倒すためにひたむきに努力する姿に心を打たれました。
                  </p>
                </div>
                <!-- /.pm-about__cardBody -->
                <figure class="cardBlock__img pm-about__cardImg">
                  <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/detail_img1.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/detail_img2@2x.jpg 2x" width="305" height="305" decoding="async" loading="lazy" alt="いたいかな">
                </figure>
              </div>
              <!-- /.pm-about__card -->
            </div>
            <!-- /.p-about__bodyMainProfile -->
            <div id="skill" class="p-about__bodyMainSkill">
              <h3 class="title pm-about__title">スキルセット</h3>
              <dl class="cardBlock">
                <dt class="cardBlockTitle">Web Development</dt>
                <dd class="cardBlockTxt">Visual Studio Codeを使用し、静的ページ・JavaScriptライブラリ(Swiper・GSAP)を使用した動的ページ制作します。Webクリエイター オンラインサロン「Shibajuku」で習得したアクセシビリティーを意識したコーディングを心がけております。</dd>
                <dd class="cardBlockTxt">CMSはオリジナルテンプレートの作成・記事の更新作業・お問い合わせフォームの制作まで制作しております。</dd>
                <dd class="cardBlockDev">
                  <ul class="cardBlockDevList">
                    <li class="item">HTML</li>
                    <li class="item">CSS</li>
                    <li class="item">JavaScript</li>
                    <li class="item">WordPress</li>
                  </ul>
                </dd>
              </dl>
            </div>
            <!-- /.p-about__bodyMainSkill -->
            <div id="career" class="p-about__bodyMainCareer">
              <h3 class="title pm-about__title">キャリア</h3>
              <div class="cardBlock pm-about__card">
                <div class="cardBlock__body pm-about__cardBody">
                  <p class="cardBlock__title pm-about__cardBodyTitle">幼少期〜15歳</p>
                  <p class="cardBlock__txt pm-about__cardBodyTxt">
                    福岡県大野城市でこの世に生まれ、2歳からは母の生まれ故郷の熊本で育ちました。外で遊ぶのが好きな活発な子供で、足はいつも擦り傷だらけ。小・中学校ではバドミントン部に所属。
                  </p>
                </div>
                <!-- /.pm-about__cardBody -->
                <figure class="cardBlock__img pm-about__cardImg">
                  <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer01.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer01@2x.jpg 2x" width="305" height="305" decoding="async" loading="lazy" alt="">
                </figure>
              </div>
              <!-- /.pm-about__card -->
              <div class="cardBlock pm-about__card">
                <div class="cardBlock__body pm-about__cardBody">
                  <p class="cardBlock__title pm-about__cardBodyTitle">15〜18歳</p>
                  <p class="cardBlock__txt pm-about__cardBodyTxt">
                    模試の合格判定がDの高校に一か八かで受験し、奇跡的に合格。球技が苦手なのに「楽しそうだから」という理由でハンドボール部に入部。3年間必死にボールを追う日々を過ごした。
                  </p>
                </div>
                <!-- /.pm-about__cardBody -->
                <figure class="cardBlock__img pm-about__cardImg">
                  <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer02.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer02@2x.jpg 2x" width="305" height="305" decoding="async" loading="lazy" alt="">
                </figure>
              </div>
              <!-- /.pm-about__card -->
              <div class="cardBlock pm-about__card">
                <div class="cardBlock__body pm-about__cardBody">
                  <p class="cardBlock__title pm-about__cardBodyTitle">18〜21歳</p>
                  <p class="cardBlock__txt pm-about__cardBodyTxt">
                    大阪のブライダル専門学校に進学。海外生活に興味があり、学校の制度を利用して10ヵ月間アメリカのシアトルに留学。専門学校在学中はリーガロイヤルホテル大阪でアルバイトをしていた。
                  </p>
                </div>
                <!-- /.pm-about__cardBody -->
                <figure class="cardBlock__img pm-about__cardImg">
                  <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer03.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer03@2x.jpg 2x" width="305" height="305" decoding="async" loading="lazy" alt="">
                </figure>
              </div>
              <!-- /.pm-about__card -->
              <div class="cardBlock pm-about__card">
                <div class="cardBlock__body pm-about__cardBody">
                  <p class="cardBlock__title pm-about__cardBodyTitle">21〜22歳</p>
                  <p class="cardBlock__txt pm-about__cardBodyTxt">
                    ドレスコーディネーターとしてブライダル系企業に入社。挙式部門の衣装部に所属し、自社運営結構式場で契約されたお客様とフォトスタジオで前撮りをするお客様の衣装合わせを担当。「Webデザイナー」という職種に興味が湧き、仕事と並行してWeb専門スクールでPhotoshopやIllustlator、コーディングについて学ぶ。
                  </p>
                </div>
                <!-- /.pm-about__cardBody -->
                <figure class="cardBlock__img pm-about__cardImg">
                  <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer04.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer04@2x.jpg 2x" width="305" height="305" decoding="async" loading="lazy" alt="">
                </figure>
              </div>
              <!-- /.pm-about__card -->
              <div class="cardBlock pm-about__card">
                <div class="cardBlock__body pm-about__cardBody">
                  <p class="cardBlock__title pm-about__cardBodyTitle">22〜28歳</p>
                  <p class="cardBlock__txt pm-about__cardBodyTxt">
                    IT業界に転職。Webオペレーターとして2社で自社サイトの運用に携わり、主に自社サイトの更新・運用作業を担当。2021年よりWebクリエーター養成所 Shibajukuに入会。Webの力でたくさんの人を笑顔にできるよう、現在も継続して勉強中。
                  </p>
                </div>
                <!-- /.pm-about__cardBody -->
                <figure class="cardBlock__img pm-about__cardImg">
                  <img class="u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer05.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/about_carrer05@2x.jpg 2x" width="305" height="305" decoding="async" loading="lazy" alt="">
                </figure>
              </div>
              <!-- /.pm-about__card -->
            </div>
            <!-- /.p-about__bodyMainCareer -->
            <div id="careerVision" class="p-about__bodyMainCareerVision">
              <h3 class="title pm-about__title">キャリアビジョン</h3>
              <dl class="cardBlock">
                <div class="cardBlock__body">
                  <dt class="cardBlock__title">入社～6ヵ月後</dt>
                  <dd class="cardBlock__txt">
                    <ul class="cardBlock__txtBody">
                      <li class="cardBlock__txtBodyItem">
                        <span class="dot">HTML / CSSを使用したサイト更新業務やWordPressでの情報登録を担当。</span>
                      </li>
                      <li class="cardBlock__txtBodyItem">
                        <span class="dot">先輩のアシスタントとして下層ページや部分的なコーディングを担当。</span>
                      </li>
                    </ul>
                  </dd>
                </div>
                <div class="cardBlock__body">
                  <dt class="cardBlock__title">1年後</dt>
                  <dd>
                    <ul class="cardBlock__txtBody">
                      <li class="cardBlock__txtBodyItem">
                        <span class="dot">先輩にサポートしていただきながらメインでコーディングを任せていただき、徐々に1人で新規サイト制作を担当。</span>
                      </li>
                    </ul>
                  </dd>
                </div>
                <div class="cardBlock__body">
                  <dt class="cardBlock__title">2年後</dt>
                  <dd>
                    <ul class="cardBlock__txtBody">
                      <li class="cardBlock__txtBodyItem">
                        <span class="dot">難しい案件を多く経験し、より複雑なウェブサイトや独自WEBシステムの構築に携わる。</span>
                      </li>
                    </ul>
                  </dd>
                </div>
                <div class="cardBlock__body">
                  <dt class="cardBlock__title">3~5年後</dt>
                  <dd>
                    <ul class="cardBlock__txtBody">
                      <li class="cardBlock__txtBodyItem">
                        <span class="dot">後輩のサポートをしながら、お客様のニーズに合わせた仕様を提案できるようになる。</span>
                      </li>
                      <li class="cardBlock__txtBodyItem">
                        <span class="dot">React.js、Vue.jsといったフレームワークを習得する。</span>
                      </li>
                    </ul>
                  </dd>
                </div>
                <div class="cardBlock__body">
                  <dt class="cardBlock__title">5年後以降</dt>
                  <dd>
                    <ul class="cardBlock__txtBody">
                      <li class="cardBlock__txtBodyItem">
                        <span class="dot">自分の得意な分野に限らず、常にアンテナを張って情報やスキルを取り入れる「フロントエンドエンジニア」になる。</span>
                      </li>
                    </ul>
                  </dd>
                </div>
              </dl>
            </div>
            <!-- /.p-about__bodyMainCareerVision -->
          </div>
          <!-- /.p-product__bodyMain -->
          <div class="cm-under__bodyFooter p-product__bodyFooter">
            <figure class="cm-under__bodyFooterItem p-product__bodyFooterItem">
              <img class="img u-objectFit" src="<?php echo esc_url(THEME_URL); ?>/assets/images/product_next1.jpg" srcset="<?php echo esc_url(THEME_URL); ?>/assets/images/product_next1@2x.jpg 2x" alt="">
            </figure>
            <div class="cm-under__bodyFooterBtn">
              <p class="body c-btn">
                <a href="#" class="c-btn__link is-back">
                  <span class="c-btn__linkTxt is-back">Back</span>
                  <span class="c-btn__linkIcom is-back">
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
          <!-- /.p-product__footer -->
        </div>
        <!-- /.p-product__body -->
      </div>
      <!-- /.u-container -->
    </section>
  </main>
<?php endwhile; ?>
<?php get_footer(); ?>
