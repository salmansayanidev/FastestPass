// autofill tabs js

const detailTabs = document.querySelectorAll("[data-view]");

detailTabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    detailTabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    $("[data-content]").removeClass("active");
    $(`[data-content="${tab.dataset.view}"]`).addClass("active");
    tab.classList.add("active");
  });
});

// reviews section slider js

$(".reviews-slider-area").slick({
  dots: true,
  infinite: true,
  speed: 800,
  autoplay: true,
  autoplaySpeed: 2500,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: ".review-slider-btn.prev-btn",
  nextArrow: ".review-slider-btn.next-btn",
});
