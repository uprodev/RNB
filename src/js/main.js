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
    .on("click", ".btn-anchor", function (e) {
      e.preventDefault();
      var dest = $($(this).attr("href"));

      if (dest.length) {
        console.log(dest.offset().top);
        $("html, body").animate({ scrollTop: dest.offset().top - $(".header").outerHeight() }, 500);
      }
    })
    .on("click", ".team-toggler", function () {
      $(".block-teams").toggleClass("moved");
      $(".block-teams .team-item").toggleClass("active");
    })
    .on("click", ".content-nav a", function (e) {
      if (!$(this).parents("ul").hasClass("filter") && !$(this).hasClass("link-back")) {
        e.preventDefault();
        var dest = $($(this).attr("href"));
        $(".content-nav a.active").removeClass("active");
        $(this).addClass("active");
        if (dest.length) {
          $("html, body").animate({ scrollTop: dest.offset().top - $(".header").outerHeight() }, 500);
        }
      }
    });

  $(".team-item-description-bottom").each(function () {
    if ($(this).find("li").length % 2 !== 0) {
      $(this).find("li:last-child").addClass("last");
    }
  });

  if ($(".clients-list").length) {
    var swiper11 = new Swiper(".clients-list .swiper", {
      speed: 5000,
      loop: true,
      spaceBetween: 30,
      slidesPerView: "auto",
      autoplay: {
        delay: 0,
      },
      breakpoints: {
        1024: {
          spaceBetween: 60,
        },
        1600: {
          spaceBetween: 120,
        },
      },
    });
  }

  if ($(".sertificates-slider").length) {
    var swiper1 = new Swiper(".sertificates-slider", {
      speed: 5000,
      loop: true,
      spaceBetween: 0,
      slidesPerView: "auto",
      autoplay: {
        delay: 0,
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

  // $(".tab-nav a").on("click", function (e) {
  //   e.preventDefault();
  //   if ($(this).data("tab") === 1) {
  //     $(".tab-nav").removeClass("moved");
  //     $(".tabs .wrapper").removeClass("moved");
  //   } else {
  //     $(".tab-nav").addClass("moved");
  //     $(".tabs .wrapper").addClass("moved");
  //   }
  //   setTimeout(() => {
  //     $(".tab-nav a.active").removeClass("active");
  //     $(this).addClass("active");
  //   }, 250);
  // });

  $(".btn-modal").on("click", function (e) {
    e.preventDefault();
    var modal = $($(this).attr("href"));
    if (modal.length) {
      modal.animate({ opacity: 1 }, 0);
      modal.addClass("active");
    }
  });
  $(".modal-bg").on("click", function () {
    $(".modal-wrapper.active").animate({ opacity: 0 }, 300, function () {
      $(".modal-wrapper.active").removeClass("active");
    });
  });

  // steps
  function stepNext() {
    var step = parseInt($(".block-form-steps").data("step")),
      stepNext = step + 1;
    $(".block-form-steps").attr("data-step", step + 1);
    $(".block-form-steps").data("step", step + 1);
    $("#stepCurrent").text("0" + stepNext);
    if (stepNext !== 1) {
      $(".block-form-steps .btn-prev").removeAttr("disabled");
    } else {
      $(".block-form-steps .btn-prev").attr("disabled", true);
    }
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
    if (stepNext === 4) {
      $(".block-form-steps .btn-next").attr("disabled", true);
    } else {
      $(".block-form-steps .btn-next").removeAttr("disabled");
    }
  }

  function stepPrev() {
    var step = parseInt($(".block-form-steps").data("step")),
      stepNext = step - 1;
    $(".block-form-steps").attr("data-step", step - 1);
    $(".block-form-steps").data("step", step - 1);
    $("#stepCurrent").text("0" + stepNext);
    if (stepNext === 1) {
      $(".block-form-steps .btn-prev").attr("disabled", true);
    }
    if (stepNext === 4) {
      $(".block-form-steps .btn-next").attr("disabled", true);
    } else {
      $(".block-form-steps .btn-next").removeAttr("disabled");
    }
  }

  function eqHeight() {
    $(".block-team-single-services").each(function () {
      var text = $(this).find(".item .title");
      var eh = 0;

      text.each(function () {
        $(this).height("auto");
      });

      text.each(function () {
        if ($(this).height() > eh) {
          eh = $(this).height();
        }
      });
      text.each(function () {
        $(this).height(eh);
      });
    });
  }
  eqHeight();
  $(window).on("resize", function () {
    eqHeight();
  });

  $(".block-form-steps .form-option input[type=radio]").on("change", function () {
    stepNext();
  });
  $(".block-form-steps .btn-next").on("click", function () {
    stepNext();
  });
  $(".block-form-steps .btn-prev").on("click", function () {
    stepPrev();
  });

  $(".block-team-single-members").each(function () {
    var h = 0;
    var members = $(this).find(".team-member-tags");
    members.each(function () {
      if ($(this).height() > h) {
        h = $(this).height();
      }
    });
    members.each(function () {
      $(this).height(h);
    });
  });
  $(window).on("resize", function () {
    $(".block-team-single-members").each(function () {
      var members = $(this).find(".team-member-tags");
      members.each(function () {
        $(this).height("auto");
      });
      var h = 0;
      members.each(function () {
        if ($(this).height() > h) {
          h = $(this).height();
        }
      });
      members.each(function () {
        $(this).height(h);
      });
    });
  });

  // table of contents
  function buildSectionAnchorElement(index, heading) {
    var a = $("<a>");
    var name = "section" + index;
    $(heading).attr("id", name);
    a.attr("href", "#" + name);
    a.text($(heading).text());
    return a;
  }
  var headings = $(".article-content h1, .article-content h2");
  var sections = headings.map(function (i, e) {
    var a = buildSectionAnchorElement(i, e);
    //  var p = $(e).next("p");
    var li = $("<li>");
    li.append(a);
    $(".article-info ul").append(li);
    return li;
  });
  $(".article-info ul li:first-child a").addClass("active");

  // anchors
  $(document).on("click", ".article-info ul a", function (e) {
    e.preventDefault();
    $(".article-info .active").removeClass("active");
    var offset = $(".header").outerHeight();
    var target = $(this).attr("href");
    if ($(target).length) {
      $("html,body").animate({ scrollTop: $(target).offset().top - offset }, 500);
    }
    $(this).addClass("active");
  });

  $(".block-service-01").each(function () {
    var items = $(this).find(".item").length;
    $(this).addClass("block-service-01--items" + items);
  });

  gsap.utils.toArray(".counter").forEach(function (elem) {
    var content = elem.dataset.count;
    gsap.to(elem, {
      scrollTrigger: {
        trigger: elem,
        start: "top 80%",
      },
      textContent: content,
      duration: 1,
      ease: "none",
      snap: { textContent: 1 },
      stagger: {
        onUpdate: function (item) {
          this.targets()[0].textContent = parseInt(this.targets()[0].textContent);
        },
      },
    });
  });

  gsap.utils.toArray(".block-teams .team-item-description-bottom ul li").forEach(function (elem) {
    gsap.to(elem.querySelector(".number"), {
      scrollTrigger: {
        trigger: elem,
        start: "top 80%",
      },
      opacity: 1,
      duration: 1,
      ease: "none",
    });
    gsap.to(elem.querySelector("p"), {
      scrollTrigger: {
        trigger: elem,
        start: "top 80%",
      },
      opacity: 1,
      y: 0,
      duration: 1,
      ease: "none",
    });
  });

  $(".advantages-list .list .text").on("click", function () {
    var link = $(this);
    var step = parseInt(link.data("step"));
    if (!link.hasClass("active")) {
      $(".advantages-list .list .text.active").removeClass("active");
      link.addClass("active");

      var textActive = $(".advantages-text.active"),
        textNext = $(".advantages-text[data-step=" + link.data("step") + "]");

      textActive.fadeOut(0, function () {
        textActive.removeClass("active");
      });
      textNext.fadeIn(400, function () {
        textNext.addClass("active");
      });

      gsap.utils.toArray(".motion").forEach(function (path) {
        if (parseInt(path.dataset.step) !== step) {
          gsap.to(path, {
            duration: 1,
            ease: "power1.inOut",
            immediateRender: true,
            fill: "transparent",
          });
        } else {
          gsap.to(path, {
            duration: 1,
            ease: "power1.inOut",
            immediateRender: true,
            fill: "#D1003F",
          });
        }
      });

      if (step === 4) {
        gsap.to("#motion4", {
          duration: 1,
          ease: "power1.inOut",
          immediateRender: true,
          fill: "#fff",
        });
      } else {
        gsap.to("#motion4", {
          duration: 1,
          ease: "power1.inOut",
          immediateRender: true,
          fill: "transparent",
        });
      }
    }
  });

  $(".block-activity ul li").each(function () {
    var ind = $(this).parent().find("li").index($(this)) + 1;
    if (ind > 5) {
      ind = ind % 5;
    }
    var color = "#0044aa",
      color1 = "#D2D9E3"; // blue
    if (ind === 2 || ind === 4) {
      color = "#d1003f";
      color1 = "#E7D2D8";
    }
    var circle = $("[data-circle=" + ind + "]");

    $(this)
      .on("mouseenter", function () {
        gsap.to(circle, {
          duration: 0.5,
          ease: "power1.inOut",
          immediateRender: true,
          fill: color,
        });
      })
      .on("mouseleave", function () {
        gsap.to(circle, {
          duration: 0.5,
          ease: "power1.inOut",
          immediateRender: true,
          fill: color1,
        });
      });
  });
});
