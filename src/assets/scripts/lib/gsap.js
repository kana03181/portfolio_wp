import { gsap } from "gsap";

import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { TextPlugin } from "gsap/TextPlugin";

gsap.registerPlugin(ScrollTrigger,ScrollToPlugin,TextPlugin);

export default function () {
  // Top MV タイピングアニメーション
  const title = gsap.utils.toArray(".js-title");

  title.forEach((el,index) => {
    const spanText = el.innerText;

    gsap.set(el, {
      text: {
        // value: spanText,
        newClass: "cursor-active",
      },
      opacity: 0,
    });

    const tl = gsap.timeline({ paused: true });

    tl.to(el, {
      opacity: 1,
      duration: 0, // opacityを瞬時に表示させる
    })
      .to(el, {
        delay: index * 3.8 ,
        duration: spanText.length * 0.15, // 各文字の表示時間
        text: {
          value: spanText,
          newClass: "cursor-active",
          delimiter: "",
        },
        ease: "none",
        stagger: 0.28, // 各文字ごとの遅延
      })
      .add(() => {
        el.querySelector(".cursor-active")?.removeAttribute("class");
      }, "+=2");

    ScrollTrigger.create({
      trigger: el,
      start: "top 90%",

      onEnter: () => tl.play(),
      once: true,
    });
  });

  // 各コンテンツのタイトル
  const contentsTitle = gsap.utils.toArray(".js-contentsTitle");
    contentsTitle.forEach((title) => {
      gsap.set(title, {
        y: 47,
      });

      gsap.to(title, {
        y: 0,
        duration: 0.65,
        scrollTrigger: {
          trigger: title,
          start: "top 80%",
          ease: "cubic-bezier(0,.75,.56,.96)",
          // markers: true,
        },
      });
    });

  //生い立ち
  const CareerCards = gsap.utils.toArray(".js-about__card");

  CareerCards.forEach((card) => {
      gsap.fromTo(
        card,
        {
          y: 30,
          autoAlpha: 0,
        },
        {
        y: 0,
        autoAlpha: 0.9,
        duration: 0.85,
        scrollTrigger: {
          trigger: card,
          start: "top 80%",
          ease: "cubic-bezier(0,.77,.68,.94)",
          // markers: true,
        },

        stagger: {
            from: "start",
            each: 0.8,
        },
        }
      );
    });

    // CareerCards.forEach((CareerCard) => {
  //     windowSize.add("(max-width:1023px)", () => {
  //     gsap.set(CareerCard, {
  //       x: "120%",
  //     });

  //     gsap.to(CareerCard, {
  //       x: 0,
  //       duration: 0.85,
  //       scrollTrigger: {
  //         trigger: CareerCard,
  //         start: "top 80%",
  //         ease: "cubic-bezier(0,.77,.68,.94)",
  //         // markers: true,
  //       },

  //       stagger: {
  //           from: "start",
  //           each: 0.8,
  //       },
  //     });
  //   });
  // });
}
