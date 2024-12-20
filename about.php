<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Heaven x</title>
    <link rel="icon" href="img/favicon.png">
    <!-- CSS Links -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Custom Dark Theme CSS -->
    <style>
        /* General styling */
        body {
            background-color: #121212;
            color: #f0f0f0;
        }

        /* Header styling */
        header.main_menu {
            background-color: #1f1f1f;
            color: #f0f0f0;
        }

        .main_menu .logo a {
            color: #ffffff;
        }

        .breadcrumb_bg,
        .footer-area,
        .map_part,
        .about_part,
        .section_bg,
        .single_page_special {
            background-color: #1b1b1b;
        }

        .breadcrumb h2,
        .home_tips_text h1,
        .section_tittle h2 {
            color: #ffffff;
        }

        /* Buttons */
        .btn,
        .btn_1 {
            background-color: #333333;
            color: #ffffff;
            border: none;
        }

        .btn:hover,
        .btn_1:hover {
            background-color: #444444;
        }

        /* About section */
        .about_part_text h2 {
            color: #ffffff;
        }

        .about_part_text p {
            color: #d3d3d3;
        }

        /* Special item text */
        .single_special_text h3,
        .single_special_text p {
            color: #ffffff;
        }

        /* Footer styling */
        .footer-text,
        .footer-area p,
        .single-footer-widget h4,
        .contact_info p,
        .social_icon a {
            color: #a0a0a0;
        }

        .footer-area a {
            color: #ffffff;
        }

        .footer-area a:hover {
            color: #c0c0c0;
        }

        /* Contact section */
        .contact_us_left_text h4,
        .contact_us_right_text h2,
        .contact_us_iner h4 {
            color: #ffffff;
        }

        /* Overlay for video in breadcrumb */
        .breadcrumb_bg::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            top: 0;
            left: 0;
            z-index: 1;
        }

        /* Links */
        a {
            color: #ffffff; 
        }

        a:hover {
            color: #c0c0c0;
        }

/* added new gallery */

  .project-two {
  position: relative;
  padding: 120px 0 90px;
  counter-reset: count;
  background-color: var(--tolak-white, #fff);
}
@media (max-width: 767px) {
  .project-two {
    padding: 80px 0 50px;
  }
}
.project-two .container {
  max-width: 1716px;
}
.project-two .sec-title {
  padding-bottom: 21px;
}
.project-two__filter {
  margin: 0 0 31px;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 20px;
  flex-wrap: wrap;
}
.project-two__filter li {
  cursor: pointer;
  position: relative;
  font-size: 17px;
  color: var(--tolak-black2, #222222);
  font-weight: 500;
  text-transform: capitalize;
  background-color: transparent;
  transition: all 0.4s ease;
  height: 28px;
  padding: 0 12px;
}
.project-two__filter li:hover, .project-two__filter li.active {
  background-color: var(--tolak-base, #fbdf0d);
  color: var(--tolak-white, #fff);
}
.project-two__item {
  position: relative;
  counter-increment: count;
  overflow: hidden;
  margin: 0 0 30px;
}
.project-two__item__image {
  position: relative;
  overflow: hidden;
}
.project-two__item__image::after {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  content: "";
  background-color: var(--tolak-black, #051d1f);
  opacity: 0;
  visibility: hidden;
  transition: all 0.4s ease;
  transform: translateX(100%);
}
.project-two__item__image img {
  width: 100%;
  height: auto;
}
.project-two__item:hover .project-two__item__image::after {
  visibility: visible;
  opacity: 0.79;
  transform: translateX(0px);
}
.project-two__item__content {
  position: absolute;
  left: 0;
  top: 0;
  padding: 47px 30px 0;
}
.project-two__item__number {
  position: relative;
  display: block;
  font-size: 39px;
  line-height: 0.9;
  font-weight: 400;
  color: var(--tolak-white, #fff);
  opacity: 0;
  transform: translateX(-700px) scale(0.1) skewX(95deg);
  transition: transform 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.project-two__item__number::after {
  content: counters(count, ".", decimal-leading-zero);
  position: relative;
  top: 0;
  left: 0;
  display: inline-block;
}
.project-two__item:hover .project-two__item__number {
  opacity: 0.29;
  transform: translateX(0px) scale(1) skewX(0deg);
}
.project-two__item__title {
  font-size: 22px;
  letter-spacing: 0.33px;
  color: var(--tolak-white, #fff);
  margin: 19px 0 3px;
  opacity: 0;
  transform: translateX(-700px) scale(0.1) skewX(95deg);
  transition: transform 1s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.project-two__item__title a {
  color: inherit;
  background: linear-gradient(to right, currentcolor 0%, currentcolor 100%) 0px 95%/0px 1px no-repeat;
  transition: all 500ms ease;
}
.project-two__item__title a:hover {
  background-size: 100% 1px;
}
.project-two__item__title a:hover {
  color: var(--tolak-base, #fbdf0d);
}
.project-two__item:hover .project-two__item__title {
  opacity: 1;
  transform: translateX(0px) scale(1) skewX(0deg);
}
.project-two__item__text {
  color: var(--tolak-white, #fff);
  margin: 0;
  opacity: 0;
  transform: translateX(-500px) scale(0.1) skewX(95deg);
  transition: transform 1.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.project-two__item:hover .project-two__item__text {
  opacity: 1;
  transform: translateX(0px) scale(1) skewX(0deg);
}
.project-two__item__border {
  position: absolute;
  z-index: 2;
  right: 55px;
  bottom: 100px;
  width: 128px;
  height: 128px;
  border-radius: 50%;
  overflow: hidden;
  border: 12px solid #4a585f;
  opacity: 0;
  transform: rotate(90deg);
  transform-origin: 100% 100%;
  transition: transform 1.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
@media (max-width: 1499px) {
  .project-two__item__border {
    right: 30px;
  }
}
.project-two__item__border::after {
  position: absolute;
  width: calc(100% - 28px);
  height: calc(100% - 28px);
  content: "";
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  margin: auto;
  border: 12px solid var(--tolak-base, #fbdf0d);
  border-radius: 50%;
}
.project-two__item:hover .project-two__item__border {
  opacity: 1;
  transform: rotate(0deg);
}
.project-two__item__rm {
  position: absolute;
  z-index: 2;
  left: 30px;
  bottom: 30px;
  width: 70px;
  height: 70px;
  background-color: var(--tolak-base, #fbdf0d);
  border: 7px solid var(--tolak-white, #fff);
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  font-size: 25px;
  color: var(--tolak-white, #fff);
  transition: all 0.4s ease;
  opacity: 0;
  transform: translateX(-500px) scale(0.1) skewX(95deg);
  transition: transform 1.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.project-two__item__rm:hover {
  background-color: var(--tolak-white, #fff);
  border-color: var(--tolak-base, #fbdf0d);
  color: var(--tolak-base, #fbdf0d);
  transition: all 0.4s ease;
}
.project-two__item:hover .project-two__item__rm {
  opacity: 1;
  transform: translateX(0px) scale(1) skewX(0deg);
}
.filter-item {
            display: none;
        }
        .filter-item.active {
            display: block;
        }



    </style>
</head>


<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="main_menu_iner">
                        <div class="search_icon">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                        </div>
                        <div class="logo">
                            <a href="index"><img src="img/logo.png" alt="#"></a>
                        </div>
                        <span class="menu-trigger visible-xs">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                        <div class="off-canven-menu">
                            <span class="close-icon">
                                <i class="ti-close"></i>
                            </span>
                            <div class="canven-menu-warp">
                                <div class="canven-menu-iner">
                                    <ul>
                                        <li><a href="index">Home</a></li>
                                        <li><a href="about">about</a></li>
                                        <li><a href="service">service</a></li>
                                        <li><a href="project">project</a></li>
                                       
                                        <li><a href="single-blog">single blog</a></li>
                                        <li><a href="elements">elements</a></li>
                                        <li><a href="contact">contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <video autoplay muted loop playsinline style="position: absolute; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
      <source src="about-video-interior.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>about us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

 <!-- about part start-->
    <div class="about_part section_bg">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-lg-4 col-md-6">
                    <div class="about_part_text">
                        <h2>About Us</h2>
                        <p>Living. Over. He god, living a. Creature that appear place creeping upon.
                            It you said seas every creeping and a life shall unto, years hath seed be
                            called light him cattle. They're cattle creepeth void given rule evening
                            stars midst saying light greater</p>
                        <a href="#" class="btn_1">learn more <span><img src="img/icon/left.svg" alt=""></span> </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="about_img">
                        <img src="img/about-inter.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about part end-->

    <div class="overlay_section">

    </div>

    <!-- single special page item start -->
    
    <!-- single special page item end -->

    <!-- blog part start-->
      <!-- service part start-->
    <section class="service_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <h2>our service</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service_slider owl-carousel">
                        <div class="single_service_slide">
                            <div class="row justify-content-end align-items-center single_service">
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/service_2.png" alt="#">
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="service_text">
                                        <h3>Home Decor</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                                            ipsum </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt_less_115 single_service">
                                <div class="col-lg-5 col-md-6">
                                    <div class="service_text">
                                        <h3>Home Decor</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                                            ipsum </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/service_1.png" alt="#">
                                </div>
                            </div>
                        </div>
                        <div class="single_service_slide">
                            <div class="row justify-content-end align-items-center single_service">
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/service_1.png" alt="#">
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="service_text">
                                        <h3>Home Decor</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                                            ipsum </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mt_less_115 single_service">
                                <div class="col-lg-5 col-md-6">
                                    <div class="service_text">
                                        <h3>Home Decor</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                                            ipsum </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="img/service_2.png" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service part end-->

     <!-- blog part start-->    
   <section class="project-two">
        <div class="container">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center" style="font-size: 30px;"><span></span>Our Menu<span></span></p>
                    <h1 class="text-center mb-5 berkshire-swash-regular" style="font-size: 25px;">Turning mornings into delightful memories, one waffle at a time.</h1>
                </div>
            
            <ul class="list-unstyled post-filter project-two__filter">
                <li class="active" data-filter=".filter-item"><span>all</span></li>
                <li data-filter=".home_interior"><span>home interior</span></li>
                <li data-filter=".False_Ceiling"><span>false ceiling</span></li>
                <li data-filter=".Furniture"><span>Furniture</span></li>
                <li data-filter=".extra"><span>extra</span></li>
            </ul>
            <div class="row filter-layout">
                <!-- Project items will be appended here by JavaScript --> 
            </div>
        </div>
    </section>
    <!-- blog part end-->

    <!-- contact us part start-->
    <section class="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact_us_iner">
                        <div class="row justify-content-around">
                            <div class="col-lg-4">
                                <div class="contact_us_left_text">
                                    <h4>Melbourne</h4>
                                    <span>Australia</span>
                                    <p>324 King Heaven tower, House no, 15 King building
                                        Melbourne ,VIC-222, Australia</p>
                                    <p>Email: infoheaven@gmail.com <br>Phone no: 23113 6456 888</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact_us_right_text">
                                    <h5>Call Directly;</h5>
                                    <h2>(23131 65465 54)</h2>
                                    <h5>Brand Office</h5>
                                    <span>324 King Heaven tower, House no, 15 King
                                        Melbourne ,VIC-222, Australia</span>
                                    <h5>Working Hours:</h5>
                                    <p>Monday - Friday / 9.00 PM - 5.00 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact us part end-->

    <!-- map us part start-->
    <section class="map_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map_iner">
                        <div class="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map us part end-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget footer_1">
                        <h4>About Us</h4>
                        <p>Heaven fruitful doesn't over for these theheaven fruitful doe over days appear
                            creeping seasons sad behold beari ath of it fly signs bearing be one blessed after.</p>
                        <div class="social_icon">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-dribbble"></i></a>
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="single-footer-widget footer_2">
                        <h4>Projects</h4>
                        <ul>
                            <li><a href="#">WHMCS-bridge</a></li>
                            <li><a href="#"> Search Domain</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#"> Shopping Cart</a></li>
                            <li><a href="#">Our Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span>Address :</span> Hath of it fly signs
                                bear be one blessed after </p>
                            <p><span>Phone :</span> +2 36 265 (8060) </p>
                            <p><span>Email :</span> info@colorlib.com </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget footer_3">
                        <h4>Newsletter</h4>
                        <p>Heaven fruitful doesn't over lesser in days. Appear creeping seas</p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="btn btn-default text-uppercase"><i
                                        class="far fa-paper-plane"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/gmap3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
    </script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>


    <!-- Custom JS -->
<script src="js/custom.js"></script>
<script>
        
        $(document).ready(function () {
    // Set 'all' as the default filter on page load
    const allItems = $('.filter-item');
    allItems.addClass('active');  // Add this line to show all items initially

    // Click event for filtering items
    $('.post-filter li').on('click', function () {  
        const filterValue = $(this).attr('data-filter');
        
        // Remove 'active' class from all items
        $('.post-filter li').removeClass('active');
        $(this).addClass('active');

        if (filterValue === '.filter-item') {  // Updated to match your class correctly
            allItems.addClass('active');  // Show all items
        } else {
            allItems.removeClass('active'); // Hide all items
            $(filterValue).addClass('active');  // Show filtered items
        }
    });
});


    
    </script>

<!-- added home part -->
 <script>
   const projects = [
    // Waffles
    {
        imgSrc: "./img/home-interior-1.png",
        title: "home-interior",
        description: "Berry Redvelvet WS",
        category: "home_interior"
    },
    {
        imgSrc: "./img/home-interior-2.png",
        title: "home-interior",
        description: "Berry Redvelvet WS",
        category: "home_interior"
    },
    {
        imgSrc: "./img/home-interior-3.png",
        title: "The Belgian Waffle Xpress",
        description: "Berry Redvelvet WS",
        category: "home_interior"
    },
    {
        imgSrc: "./img/home-interior-4.png",
        title: "The Belgian Waffle Xpress",
        description: "Berry Redvelvet WS",
        category: "home_interior"
    },
    {
        imgSrc: "./img/home-interior-4.png",
        title: "The Belgian Waffle Xpress",
        description: "Berry Redvelvet WS",
        category: "home_interior"
    },
    {
        imgSrc: "./img/home-interior-5.png",
        title: "The Belgian Waffle Xpress",
        description: "Berry Redvelvet WS",
        category: "home_interior"
    },
    {
        imgSrc: "./img/home-interior-6.png",
        title: "The Belgian Waffle Xpress",
        description: "Dark Oreo Jawbreaker WS",
        category: "home_interior"
    },
    // Pancakes
    {
        imgSrc: "./img/false-ceiling-1.png",
        title: "The Belgian Waffle Xpress",
        description: "Rocky Bubble Waffle",
        category: "False_Ceiling"
    },
    {
        imgSrc: "./img/false-ceiling-2.png",
        title: "The Belgian Waffle Xpress",
        description: "Tender Creamcheese MiniPancakes",
        category: "False_Ceiling"
    },
    {
        imgSrc: "./img/false-ceiling-3.png",
        title: "The Belgian Waffle Xpress",
        description: "Tender Creamcheese MiniPancakes",
        category: "False_Ceiling"
    },
    {
        imgSrc: "./img/false-ceiling-4.png",
        title: "The Belgian Waffle Xpress",
        description: "Tender Creamcheese MiniPancakes",
        category: "False_Ceiling"
    },
    {
        imgSrc: "./img/false-ceiling-5.png",
        title: "The Belgian Waffle Xpress",
        description: "Tender Creamcheese MiniPancakes",
        category: "False_Ceiling"
    },
    {
        imgSrc: "./img/false-ceiling-6.png",
        title: "The Belgian Waffle Xpress",
        description: "Tender Creamcheese MiniPancakes",
        category: "False_Ceiling"
    },
    {
        imgSrc: "./img/false-ceiling-8.png",
        title: "The Belgian Waffle Xpress",
        description: "Tender Creamcheese MiniPancakes",
        category: "False_Ceiling"
    },
    {
        imgSrc: "./img/false-ceiling-7.png",
        title: "The Belgian Waffle Xpress",
        description: "Tender Creamcheese MiniPancakes",
        category: "False_Ceiling"
    },
    // Drinks
    {
        imgSrc: "./img/furniture-snmr-1.png",
        title: "The Belgian Waffle Xpress",
        description: "Blue Cooler",
        category: "Furniture"
    },
    {
        imgSrc: "./img/furniture-snmr-2.png",
        title: "The Belgian Waffle Xpress",
        description: "Blue Cooler",
        category: "Furniture"
    },
    {
        imgSrc: "./img/furniture-snmr-3.png",
        title: "The Belgian Waffle Xpress",
        description: "Blue Cooler",
        category: "Furniture"
    },
    {
        imgSrc: "./img/furniture-snmr-4.png",
        title: "The Belgian Waffle Xpress",
        description: "Blue Cooler",
        category: "Furniture"
    },
    {
        imgSrc: "./img/furniture-snmr-5.png",
        title: "The Belgian Waffle Xpress",
        description: "Bottle 475ml 7Up",
        category: "Furniture"
    },
 
    {
        imgSrc: "https://cdn.pixabay.com/photo/2024/05/26/10/15/bird-8788491_640.jpg",
        title: "The Belgian Waffle Xpress",
        description: "Paneer Sandwich",
        category: "Extra"
    }
    
];


        const container = document.querySelector('.filter-layout');

        projects.forEach(project => {
            const projectItem = document.createElement('div');
            projectItem.classList.add('col-xl-3', 'col-md-6', 'filter-item', project.category);

            projectItem.innerHTML = `
                <div class="project-two__item">
                    <div class="project-two__item__image">
                        <img src="${project.imgSrc}" alt="${project.description}">
                    </div>
                    <div class="project-two__item__content">
                        <div class="project-two__item__number"></div>
                        <h3 class="project-two__item__title"><a href="project-details.html">${project.title}</a></h3>
                        <p class="project-two__item__text">
                            ${project.description}
                        </p>
                    </div>
                    <div class="project-two__item__border"></div>
                    <a href="project-details.html" class="project-two__item__rm"><span class="icofont-circled-right"></span></a>
                </div>
            `;

            container.appendChild(projectItem);

        });

        var btn = $('#back-to-top');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
    </script>
    <!-- end home part -->
</body>

</html>