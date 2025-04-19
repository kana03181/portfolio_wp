export default function () {
  const btnOpen = document.querySelector(".js-drawer-open");
  const btnClose = document.querySelector(".js-drawer-close");

  function Toggle(selector, target = "html") {
    this.btn = document.querySelector(selector);
    this.target = document.querySelector(target);
    this.objectName = selector.substring(4);

    this.toggle = function () {
      const isExpanded = this.btn.getAttribute("aria-expanded") !== "false";
      this.btn.setAttribute("aria-expanded", !isExpanded);
      this.target.classList.toggle(`is-${this.objectName}Active`);

      if (this.target.classList.contains(`is-${this.objectName}Active`) && btnOpen.classList.contains("is-active")) {
        btnOpen.classList.remove("is-active");
        btnClose.classList.add("is-active");
      } else {
        btnClose.classList.remove("is-active");
        btnOpen.classList.add("is-active");
      }

    };

    this.btn.addEventListener("click", this.toggle.bind(this));
  }

  new Toggle(".js-drawer");



  const btns = document.querySelectorAll(".js-btn__link")

  function addClass(event) {
    const target = event.target;
    const cardBlock = target.closest(".js-productsCard");
    const cardImg = cardBlock?.querySelector(".js-productsImg")

    target.classList.add("is-hover");

    const ProductsBtnParent = target.closest(".js-productsBtn");
    if (!ProductsBtnParent) {
      cardImg?.classList.add("is-hover");
    }

  }

  function removeClass(event) {
    const target = event.target;
    const cardBlock = target.closest(".js-productsCard");
    const cardImg = cardBlock?.querySelector(".js-productsImg")

    target.classList.remove("is-hover");

    const ProductsBtnParent = target.closest(".js-productsBtn");
    if (!ProductsBtnParent) {
      cardImg?.classList.remove("is-hover");
    }

  }

  btns.forEach((btn) => {
    btn.addEventListener("mouseenter", addClass);
    btn.addEventListener("mouseleave", removeClass);
  });
}
