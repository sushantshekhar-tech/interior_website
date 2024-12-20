<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Heaven x</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
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
                                        <li><a href="blog">blog</a></li>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>contact</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {
              lat: -25.363,
              lng: 131.044
            };
            var grayStyles = [{
                featureType: "all",
                stylers: [{
                    saturation: -90
                  },
                  {
                    lightness: 50
                  }
                ]
              },
              {
                elementType: 'labels.text.fill',
                stylers: [{
                  color: '#ccdee9'
                }]
              }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {
                lat: -31.197,
                lng: 150.744
              },
              zoom: 9,
              styles: grayStyles,
              scrollwheel: false
            });
          }
        </script>
        <script
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
        </script>

      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
            novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">

                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
                    placeholder='Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <a href="#" class="btn_1 button-contactForm">learn more <span><img src="img/icon/left.svg" alt=""></span>
              </a>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>00 (440) 9865 562</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@colorlib.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

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
                  <form action="#">
                     <div class="form-group">
                        <div class="input-group mb-3">
                           <input type="text" class="form-control" placeholder='Enter email address'
                              onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
                           <div class="input-group-append">
                              <button class="btn" type="button"><i class="far fa-paper-plane"></i></button>
                           </div>
                        </div>
                     </div>
                  </form>
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
   <!-- magnific-popup js -->
   <script src="js/jquery.magnific-popup.js"></script>
   <!-- swiper js -->
   <script src="js/swiper.min.js"></script>
   <!-- masonry js -->
   <script src="js/masonry.pkgd.js"></script>
   <!-- carousel js -->
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/gmap3.min.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
   </script>
   <script src="js/slick.min.js"></script>
   <script src="js/gijgo.min.js"></script>
   <script src="js/jquery.nice-select.min.js"></script>
   <script src="js/masonry.pkgd.min.js"></script>
   <script src="js/contact.js"></script>
   <script src="js/jquery.ajaxchimp.min.js"></script>
   <script src="js/jquery.form.js"></script>
   <script src="js/mail-script.js"></script>
   <script src="js/jquery.validate.min.js"></script>
   <!-- custom js -->
   <script src="js/custom.js"></script>
</body>

</html>