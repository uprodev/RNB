jQuery(document).ready(function ($) {
  $(document)
    .on("click", ".nav-trigger", function () {
      $(this).toggleClass("active");
      $(".header-panel--navigation").toggleClass("active");
    })
    .on("click", ".search-trigger", function () {
      $(this).toggleClass("active");
      $(".search-form").toggleClass("active");
    })
    .on("click", ".content-nav a", function (e) {
      e.preventDefault();
      var dest = $($(this).attr("href"));

      if (dest.length) {
        console.log(dest.offset().top);
        $("html, body").animate({ scrollTop: dest.offset().top }, 500);
      }
    })
    .on("click", ".team-toggler", function () {
      $(".block-teams").toggleClass("moved");
      $(".block-teams .team-item").toggleClass("active");
    });

  $(".team-item-description-bottom").each(function () {
    if ($(this).find("li").length % 2 !== 0) {
      $(this).find("li:last-child").addClass("last");
    }
  });

  let swiper1;
  if ($(".promo-slider").length) {
    swiper1 = new Swiper(".promo-slider", {
      speed: 700,
      spaceBetween: 0,
      navigation: {
        nextEl: ".promo-slider .swiper-btn-next",
        prevEl: ".promo-slider .swiper-btn-prev",
      },
      pagination: {
        el: ".promo-slider .swiper-pagination",
        type: "bullets",
        clickable: true,
      },
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
    });
  }

  if ($(".product-slider").length) {
    var sliders = document.querySelectorAll(".product-slider");
    sliders.forEach((slider) => {
      const swiper2 = new Swiper(slider, {
        speed: 500,
        spaceBetween: 50,
        pagination: {
          el: slider.querySelector(".swiper-pagination"),
          type: "bullets",
          clickable: true,
        },
        breakpoints: {
          768: {
            slidesPerView: 2,
            spaceBetween: 0,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 0,
            allowTouchMove: false,
          },
        },
      });
    });
  }

  $(".tab-nav a").on("click", function (e) {
    e.preventDefault();
    if ($(this).data("tab") === 1) {
      $(".tab-nav").removeClass("moved");
      $(".tabs .wrapper").removeClass("moved");
    } else {
      $(".tab-nav").addClass("moved");
      $(".tabs .wrapper").addClass("moved");
    }
    setTimeout(() => {
      $(".tab-nav a.active").removeClass("active");
      $(this).addClass("active");
    }, 250);
  });

  // steps
  $(".block-form-steps .form-option input[type=radio]").on("change", function () {
    var step = parseInt($(".block-form-steps").data("step")),
      stepNext = step + 1;
    $(".block-form-steps").attr("data-step", step + 1);
    $(".block-form-steps").data("step", step + 1);
    $("#stepCurrent").text("0" + stepNext);
    if (step === 3) {
      var formRes = {
        industry: $("[name=industry]:checked").val(),
        service: $("[name=service]:checked").val(),
        objective: $("[name=objective]:checked").val(),
      };

      $("#resultIndustry").text(formRes.industry);
      $("#resultService").text(formRes.service);
      $("#resultObjective").text(formRes.objective);
    }
  });
});
