export default function () {
  //制作実績 アーカイブページ（archive-products.php）
  document.addEventListener("DOMContentLoaded", function () {

    const categoryLinks = document.querySelectorAll(".js-categoryLink");
    const products = document.querySelector(".js-product__bodyMain");

    categoryLinks.forEach(function (categoryLink) {
      categoryLink.addEventListener("click", function (e) {
        e.preventDefault();
        // console.log(categoryLink);

        const categorySlug = categoryLink.getAttribute("data-slug");
        // console.log(categorySlug);

        const xhr = new XMLHttpRequest();
        // console.log(xhr);

        categoryLink.classList.remove("is-fadeIn");
        products.style.animation = "none";
        void products.offsetWidth;


        let url = ajaxurl + "?action=filter_posts_by_category";
        url += "&category_slug=" + categorySlug;  // 'all'でも必ず送信
        xhr.open("GET", url, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function () {
          if (xhr.status === 200 ) {
            products.innerHTML = xhr.responseText;
            products.classList.add("is-fadeIn");
            products.style.animation = "articleFadeIn 2.2s ease-in";
          } else {
            alert("エラーが発生しました");
          }
        };

        xhr.send();
      })
    })
  });
}
