import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

export default function () {

  //Topページ MV
  let mvSwiper;
  const mvSwiperEl = document.querySelector(".js-top__swiper");
  // console.log(mvSwiperEl);

  if (mvSwiperEl) {
    mvSwiper = new Swiper(mvSwiperEl, {
      slidesPerView: 1,
      loop: true,
      autoplay: {
        delay: 7000, // 3秒後に次のスライドへ
        disableOnInteraction: false,
      },
      speed: 2800, // 1秒（1000ミリ秒）でスライド切り替え
      effect: 'fade',
      pagination: {
        el: '.swiper-pagination',
        disableOnInteraction: false,
        clickable: true,
        renderBullet:function(index, className){
          let num = index + 1;
          return (
            '<div class="' + className + ' circle-pagination' + ' js-circle-pagination' + '"><svg viewBox="0 0 25 25"><circle cx="12.7" cy="12.7" r="10.5"></circle></svg>' + '</div>'
          )
        }
      },

      on: {
        init:function () {
          this.autoplay.stop();
        },
        slideChange: function () {
          const bg = document.querySelectorAll(".js-bg");

          if (this.realIndex >= 2) {
            bg.forEach((el) => {
              el.classList.add("is-change");
            });
          } else {
            bg.forEach((el) => {
              el.classList.remove("is-change");
            });
          }

          if (this.realIndex > 0) {
            this.params.autoplay.delay = 4200;
          }
        }
      }
    });
  }


  function runAfterDelay(seconds, callback) {
  setTimeout(callback, seconds * 1000);
  }

  // 画面読み込み後、一回目のページネーションのアニメーションだけ速度を変更
  window.addEventListener("DOMContentLoaded", () => {
    runAfterDelay(10, () => {
      if (mvSwiper) {
        mvSwiper.autoplay.start();
        mvSwiper.params.autoplay.delay = 4500;
        document.querySelector(".js-swiper-pagination")?.classList.add("is-start");
        // console.log("start");

      }

    });
  });

  // 再生ボタン・停止ボタンの操作
    const btn_pause = document.querySelector(".js-btn__pause");
    const btn_play = document.querySelector(".js-btn__play");
    const circles = document.querySelectorAll(".js-circle-pagination");

    function clickBtnPause(event) {
      if (btn_play.classList.contains("is-play")) {
        mvSwiper.autoplay.stop();
        btn_play.classList.remove("is-play");
        event.currentTarget.classList.add("is-pause");

        circles.forEach(circle => {
          circle.classList.add("is-pause");
        });
      }
    }

    function clickBtnPlay(event) {
      if (btn_pause.classList.contains("is-pause")) {
        mvSwiper.autoplay.start();
        btn_pause.classList.remove("is-pause");
        event.currentTarget.classList.add("is-play");

        circles.forEach(circle => {
          circle.classList.remove("is-pause");
        });
      }
    }

  if (btn_pause && btn_play) {
    btn_pause.addEventListener("click", clickBtnPause);
    btn_play.addEventListener("click", clickBtnPlay);
  }






  //Aboutページ profile
    const aboutSwiper = document.querySelector('.js-about__swiper');

  if (aboutSwiper) {
    const about_swiper = new Swiper(aboutSwiper, {
      effect:"cards",
      grabCursor: true,
      cardsEffect: {                  // 追加
          // perSlideOffset: -5,         // 追加（スライドの間隔（px）
          perSlideRotate: 6,         // 追加（2枚目以降のスライドの回転角度
          rotate: true,               // 追加（2枚目以降のスライドの回転（あり・なし）
          slideShadows: false,        // 追加（2枚目以降のスライドの影（あり・なし）
      },                              // 追加
    });
  }
}
