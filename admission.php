<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Admission - Virinchi College – Smart By Intellect</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png" />
  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/themify-icons.css" />
  <link rel="stylesheet" href="assets/css/slicknav.css" />
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="assets/css/swiper.min.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/nice-select.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <!-- Header Start -->
  <?php include './partials/header.php'; ?>
  <!-- Header End -->

  <!-- Banner Start -->
  <div class="banner">
    <div class="container">
      <div class="banner-wrapper">
        <h2>Admission</h2>
      </div>
    </div>
  </div>
  <!-- Banner End -->

  <main>
    <div class="course-content">
      <!-- Overview -->
      <div class="overview" id="overview">
        <div class="container">
          <div class="overview-content">
            <h3 class="course-title"><span>Admission</span></h3>
            <p>
              Lorem Ipsum has been the industry's standard dummy text ever
              since the 1500s, when an unknown printer took a galley of type
              and scrambled it to make a type specimen book. It has survived
              not only five centuries, but also the leap into electronic
              typesetting, remaining essentially unchanged. It was popularised
              in the 1960s with the release of Letraset sheets containing
              Lorem Ipsum passages, and more recently with desktop publishing
              software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p>
              Lorem Ipsum has been the industry's standard dummy text ever
              since the 1500s, when an unknown printer took a galley of type
              and scrambled it to make a type specimen book. It has survived
              not only five centuries, but also the leap into electronic
              typesetting, remaining essentially unchanged. It was popularised
              in the 1960s with the release of Letraset sheets containing
              Lorem Ipsum passages, and more recently with desktop publishing
              software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <p>
              Lorem Ipsum has been the industry's standard dummy text ever
              since the 1500s, when an unknown printer took a galley of type
              and scrambled it to make a type specimen book. It has survived
              not only five centuries, but also the leap into electronic
              typesetting, remaining essentially unchanged. It was popularised
              in the 1960s with the release of Letraset sheets containing
              Lorem Ipsum passages,
            </p>
          </div>
        </div>
      </div>
      <!-- Overview End -->
      <!-- Scope -->
      <div class="scope" id="scope">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-12">
              <div class="scope-content">
                <h3 class="course-title">Admission</h3>
                <p>
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s, when an unknown printer took a galley of
                  type and scrambled it to make a type specimen book. It has
                  survived not only five centuries, but also the leap into
                  electronic typesetting, remaining essentially unchanged. It
                  was popularised in the 1960s with the release of Letraset
                  sheets containing Lorem Ipsum passages, and more recently
                  with desktop publishing software like Aldus PageMaker
                  including versions of Lorem Ipsum.
                </p>
              </div>
            </div>
            <div class="scope-img">
              <img src="assets/img/bict-1_03.jpg" alt="" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
      <!-- Scope end -->
    </div>
  </main>

  <!-- footer start -->
  <?php include './partials/footer.php'; ?>
  <!-- footer end -->

  <!-- JS here -->
  <!-- Jquery, Popper, Bootstrap -->
  <script src="./assets/js/jquery-1.12.4.min.js"></script>
  <script src="./assets/js/popper.min.js"></script>
  <script src="./assets/js/bootstrap.min.js"></script>
  <!-- Jquery Mobile Menu -->
  <script src="./assets/js/jquery.slicknav.min.js"></script>
  <script src="./assets/js/slick.min.js"></script>
  <!-- Scrollup, nice-select, sticky -->
  <script src="./assets/js/jquery.scrollUp.min.js"></script>
  <script src="./assets/js/jquery.nice-select.min.js"></script>
  <script src="./assets/js/jquery.sticky.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
  <!--  main JS -->
  <script src="./assets/js/main.js"></script>
  <script>
    // FAQs
    $(".question-wrapper").click(function() {
      var container = $(this).parents(".accordion");
      var answer = container.find(".answer-wrapper");
      var trigger = container.find(".material-icons.drop");
      var state = container.find(".question-wrapper");

      answer.animate({
        height: "toggle"
      }, 100);

      if (trigger.hasClass("icon-expend")) {
        trigger.removeClass("icon-expend");
        // state.removeClass("active");
      } else {
        trigger.addClass("icon-expend");
        // state.addClass("active");
      }

      if (container.hasClass("expanded")) {
        container.removeClass("expanded");
      } else {
        container.addClass("expanded");
      }
    });

    $(function() {
      $(".gallery-image").click(function() {
        $(this)
          .toggleClass("gallery-image--preview")
          .siblings()
          .removeClass("gallery-image--preview");
      });
    });
  </script>
  <script>
    (function() {
      "use strict";

      /**
       * Easy selector helper function
       */
      const select = (el, all = false) => {
        el = el.trim();
        if (all) {
          return [...document.querySelectorAll(el)];
        } else {
          return document.querySelector(el);
        }
      };

      /**
       * Easy event listener function
       */
      const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all);
        if (selectEl) {
          if (all) {
            selectEl.forEach((e) => e.addEventListener(type, listener));
          } else {
            selectEl.addEventListener(type, listener);
          }
        }
      };

      /**
       * Easy on scroll event listener
       */
      const onscroll = (el, listener) => {
        el.addEventListener("scroll", listener);
      };

      /**
       * Navbar links active state on scroll
       */
      let navbarlink = select("#course-nav .scrollto", true);
      const navbarlinksActive = () => {
        let position = window.scrollY + 200;
        navbarlink.forEach((navbarlink) => {
          if (!navbarlink.hash) return;
          let section = select(navbarlink.hash);
          if (!section) return;
          if (
            position >= section.offsetTop &&
            position <= section.offsetTop + section.offsetHeight
          ) {
            navbarlink.classList.add("active");
          } else {
            navbarlink.classList.remove("active");
          }
        });
      };
      window.addEventListener("load", navbarlinksActive);
      onscroll(document, navbarlinksActive);
    })();
  </script>
  <script>
    // Hex
    // console.log($(".hexagonal-wrapper .hex-grid .hexGridIn .hex"))
    // $(".hexagonal-wrapper .hex-grid .hexGridIn .hex ").hover(function() => {
    //   alert("Helo")
    // })
    let hexs = document.querySelectorAll(
      ".hexagonal-wrapper .hex-grid .hexGridIn .hex "
    );
    hexs.forEach((hex) => {
      hex.addEventListener("mouseover", () => {
        hex.children[1].children[0].style.display = "none";

        hex.children[1].children[1].style.display = "block";
      });

      hex.addEventListener("mouseleave", () => {
        hex.children[1].children[0].style.display = "block";

        hex.children[1].children[1].style.display = "none";
      });
    });
  </script>
</body>

</html>