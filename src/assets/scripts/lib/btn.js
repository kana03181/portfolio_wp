export default function () {
  function Toggle(selector, target = "html") {
    this.btn = document.querySelector(selector);
    this.target = document.querySelector(target);
    this.objectName = selector.substring(4);

    this.toggle = function () {
      const isExpanded = this.btn.getAttribute("aria-expanded") !== "false";
      this.btn.setAttribute("aria-expanded", !isExpanded);
      this.target.classList.toggle(`is-${this.objectName}Active`);
    };

    this.btn.addEventListener("click", this.toggle.bind(this));
  }

  new Toggle(".js-drawer");

}
