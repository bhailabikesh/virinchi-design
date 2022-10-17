<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Events - Virinchi College – Smart By Intellect</title>
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
                <h2>Events</h2>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <main>

        <!-- Events-inner Start -->
        <div class="event-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 mx-auto mb-4">
                        <div class="card event__card">
                            <a href="#">
                                <img src="assets/img/news-3.jpg" alt="" class="card-img img-fluid event-img">
                                <h6>
                                    Project proposal writing workshop
                                </h6>
                            </a>
                            <p class="event-info">
                                Virinchi College is going to organize a proposal writing workshop for the students of the 7th semester. The purpose of this Workshop is to build the skills of Participants on how to write proposals for ICT projects.
                                The workshop will also give participants the resource needed to improve the quality of Project design and proposal writing. This Workshop includes guidance, templates, and tools for project design from developing a concept note through the writing a project proposal.

                            </p>
                            <div class="event__card--date">
                                <p>NOV<span>01</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 mx-auto mb-4">
                        <div class="card event__card">
                            <a href="#">
                                <img src="assets/img/news-1.jpg" alt="" class="card-img img-fluid event-img">
                                <h6>
                                    A practical guide to Git and Github - Nov 7
                                </h6>
                            </a>
                            <p class="event-info">
                                Virinchi Skill Booster Club is conducting the workshop on GitHub for the students of the 2nd Semester. This session is a part of the teach to learn(TTL) initiative of Virinchi College where students share their skills and knowledge with their juniors.
                            </p>
                            <div class="event__card--date">
                                <p>NOV<span>01</span></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 mx-auto mb-4">
                        <div class="card event__card">
                            <a href="#">
                                <img src="assets/img/news-2.jpg" alt="" class="card-img img-fluid event-img">
                                <h6>
                                    7-day sports week held - 4th July to 10 July 2022
                                </h6>
                            </a>
                            <p class="event-info">
                                Virinchi events club organized a seven-day sports week from 4th July till 10th July. The event was attended by over 100 male and female students who participated in various indoor and outdoor games like basketball, chess, table tennis, futsal, badminton and cricksal. Various teams from different semester from BICT and MBA took part in the event including faculty members as well.
                            </p>
                            <div class="event__card--date">
                                <p>NOV<span>01</span></p>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- Events-inner End -->



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
        $(function() {
            $(".gallery-image").click(function() {
                $(this)
                    .toggleClass("gallery-image--preview")
                    .siblings()
                    .removeClass("gallery-image--preview");
            });
        });

        $(document).ready(function() {
            $(".list-student").click(function() {
                $("#testimonial").css({
                    "background-image": "url(./assets/img/testimonial-bg1.png)",
                });
            });
            $(".list-alumni").click(function() {
                $("#testimonial").css({
                    "background-image": "url(./assets/img/testimonial-bg2.jpg)",
                });
            });
            $(".list-faculty").click(function() {
                $("#testimonial").css({
                    "background-image": "url(./assets/img/testimonial-bg3.jpg)",
                });
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