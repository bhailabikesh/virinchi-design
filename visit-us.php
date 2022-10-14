<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Visit Us - Virinchi College – Smart By Intellect</title>
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
                <h2>Visit Us</h2>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <main>


        <!-- Our visit Start -->
        <div class="visit">
            <div class="container">
                <div class="overview-content">
                    <h3 class="course-title">College <span>Visit</span></h3>
                    <p>
                        A campus visit is the best way to see yourself at Virinchi. Tour the campus, attend an information
                        session, and meet with an admissions counselor. We want you to experience how Virinchi College opens
                        doors to opportunity.
                    </p>
                    <p>
                        We welcome visitors Sunday through Friday. We look forward to welcoming you to campus!
                    </p>

                </div>
            </div>
        </div>
        <!-- Our visit End -->

        <div class="scope">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="scope-content">
                            <h3 class="course-title">Make an Appointment</h3>
                            <p>
                                Please schedule your college visit and get appointment to Consult with admission officer by using the calendar to the right. You can consult about the program, its scope, specialized trainings
                                and projects, admission procedure and fee matters.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="select-date">
                            <div class="w-100">
                                <h4 class="select-date-title">Please select date:</h4>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Our visit Start -->
        <div class="visit">
            <div class="container">
                <div class="overview-content">
                    <h3 class="course-title">College Visit <span> Schedule</span></h3>
                    <p>
                        Every SUNDAY to FRIDAY   <strong>9:00 am to 5:00 pm</strong>
                    </p>

                </div>
            </div>
        </div>
        <!-- Our visit End -->

        <!-- Our visit Start -->
        <div class="visit">
            <div class="container">
                <div class="overview-content">
                    <h3 class="course-title">Office of <span> Admissions</span></h3>
                    <p>
                        We are looking forward to meeting you! Our admissions counselors are here to answer your questions
                        and guide you through each step of the admissions process. You also can reach the Admissions Office by
                        calling 01-5553396, 9863253481 or emailing admissions@virinchicollege.edu.np
                    </p>

                </div>
            </div>
        </div>
        <!-- Our visit End -->


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