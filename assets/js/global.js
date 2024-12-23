// mobile menu js
$(".mb-menu-btn").click(function () {
  $(".mobile-menu").addClass("show");
});
$(".mb-menu-cls-btn").click(function () {
  $(".mobile-menu").removeClass("show");
});

// sub menu js

if ($(window).width() < 992) {
  $(".sub-menu-list").hide();
  $(".mb-sb-menu-btn").click(function () {
    $(".sub-menu-list").slideToggle();
  });
}

// faqs js

$(".faq-text-area").hide();
$(".faq-box.active").find(".faq-text-area").show();

$(".faq-btn").click(function () {
  var $currentFaqBox = $(this).closest(".faq-box");

  if (!$currentFaqBox.hasClass("active")) {
    $(".faq-text-area").slideUp();
    $(".faq-box").removeClass("active");
    $currentFaqBox.addClass("active");
    $currentFaqBox.find(".faq-text-area").slideDown();
  } else {
    $currentFaqBox.removeClass("active");
    $currentFaqBox.find(".faq-text-area").slideUp();
  }
});

// results slider
$(".results-slider").slick({
  dots: false,
  infinite: true,
  speed: 600,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});

// world trust slider

$(".world-trust-testimonial-list").slick({
  dots: true,
  infinite: true,
  speed: 600,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
      },
    },
  ],
});

// pricing tabs js

const pricingTabs = document.querySelectorAll("[data-pricingview]");

pricingTabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    pricingTabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    $("[data-pricingContent]").removeClass("active");
    $(`[data-pricingContent="${tab.dataset.pricingview}"]`).addClass("active");
    tab.classList.add("active");
  });
});

// toggle password

const eyeBtns = document.querySelectorAll(".toggle-password-btn");

eyeBtns.forEach((eyeBtn) => {
  eyeBtn.addEventListener("click", () => {
    const myInput = eyeBtn.previousElementSibling;
    const icon = eyeBtn.querySelector("i");

    if (myInput.type === "password") {
      myInput.type = "text";
      icon.classList.remove("fa-eye-slash");
      icon.classList.add("fa-eye");
    } else {
      myInput.type = "password";
      icon.classList.add("fa-eye-slash");
      icon.classList.remove("fa-eye");
    }
  });
});
