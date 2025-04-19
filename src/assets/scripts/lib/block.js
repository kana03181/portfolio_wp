export default function () {
  document.addEventListener("DOMContentLoaded", function () {
    const groups = document.querySelectorAll(".p-detail__mainHeaderItem, .thumbnail, .p-detail__mainHeaderImg, .items, .p-detail__mainHeaderTxt");

    groups.forEach(function (group) {
      const innerContainer = group.querySelector(".is-layout-constrained");
      if (innerContainer) {
        const children = Array.from(innerContainer.children);
        // console.log(children);

        innerContainer.remove();
        children.forEach(function (child) {
          group.appendChild(child);
        });
      }

    });
  });
}
