<?php
session_start();
include('includes/config.php');
?>

<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>VOGUE VIBE </title>
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<header class="w3l-header">
	<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-sm-3 px-0">
			<a class="navbar-brand" href="index.php">
				<span class="fa fa-newspaper-o"></span> VOGUE VIBE</a>

			
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<!-- <span class="navbar-toggler-icon"></span> -->
				<span class="fa icon-expand fa-bars"></span>
				<span class="fa icon-close fa-times"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
                    <li class="nav-item @@contact__active">
						<a class="nav-link" href="user">Post Blog</a>
                    </li>
					<li class="nav-item @@contact__active">
						<a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item @@contact__active">
						<a class="nav-link" href="admin">Admin</a>
                    </li>
				</ul>
			</div>
			<!-- toggle switch for light and dark theme -->
			<div class="mobile-position">
				<nav class="navigation">
					<div class="theme-switch-wrapper">
						<label class="theme-switch" for="checkbox">
							<input type="checkbox" id="checkbox">
							<div class="mode-container">
								<i class="gg-sun"></i>
								<i class="gg-moon"></i>
							</div>
						</label>
					</div>
				</nav>
			</div>
			<!-- //toggle switch for light and dark theme -->
		</div>
	</nav>
	<!--//nav-->
</header>
<!-- //header -->
<!-- /homeblock1-->
<section class="w3l-homeblock1 py-sm-5 py-4">
    <div class="container py-md-4">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-6 col-6 grids-feature">
                <a href="beauty.php">
                    <div class="area-box">
                        <span class="fa fa-bath"></span>
                        <h4 class="title-head">Beauty</h4>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-6 grids-feature">
                <a href="fashion.php">
                    <div class="area-box">
                        <span class="fa fa-female"></span>
                        <h4 class="title-head">Fashion and style</h4>
                    </div>
                </a>
            </div>
        
           
            </div>
        </div>
    </div>
</section>
<!-- //homeblock1-->

<section class="w3l-testimonials" id="testimonials">
    <!-- main-slider -->
    <div class="testimonials pt-2 pb-5">
        <div class="container pb-lg-5">
            <div class="owl-testimonial owl-carousel owl-theme mb-md-0 mb-sm-5 mb-4">
                <div class="item">
                    <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3">Beauty</span>
                            <h3 class="title-big mb-4">Create an Art that shows the beauty in everyone’s ideas of flaws.
                            </h3>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img src="assets/images/beauty.jpg" class="img-fluid radius-image-full" alt="client image">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row slider-info">
                        <div class="col-lg-8 message-info align-self">
                            <span class="label-blue mb-sm-4 mb-3">Fashion and Style</span>
                            <h3 class="title-big mb-4">Addicted to Fashion is the Armor to survive the reality of
                                Everyday Life.
                            </h3>
                        </div>
                        <div class="col-lg-4 col-md-8 img-circle mt-lg-0 mt-4">
                            <img src="assets/images/fashion.jpg" class="img-fluid radius-image-full" alt="client image">
                        </div>
                    </div>
                </div>
             
              
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /main-slider -->
</section>
<div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        
            </div>
        </div>
    </div>
</div>

<div class="w3l-homeblock2 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="left-right">
            <h3 class="section-title-left mb-sm-4 mb-2"> Fashion and style</h3>
            <a href="fashion.php" class="more btn btn-small mb-sm-0 mb-4">View more</a>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 item">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="fashion.php">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/fashion1.jpg"
                                alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="fashion.php" class="blog-desc">An easy Guide to buying Denim & My favourite styles
                        </a>
                        <div class="author align-items-center">
                            <ul class="blog-meta">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="#fashion.php">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/fashion2.jpg"
                                alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="fashion.php" class="blog-desc">The Satin Skirt & How to Wear it all year round fashion
                        </a>
                        <div class="author align-items-center">
                            <ul class="blog-meta">
                                
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                <div class="card">
                    <div class="card-header p-0 position-relative">
                        <a href="fashion.php">
                            <img class="card-img-bottom d-block radius-image-full" src="assets/images/fashion3.jpg"
                                alt="Card image cap">
                        </a>
                    </div>
                    <div class="card-body blog-details">
                        <a href="fashion.php" class="blog-desc">What I’ll be Wearing this Party Season & the Festive edit
                        </a>
                        <div class="author align-items-center">
                            <ul class="blog-meta">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="w3l-homeblock2 w3l-homeblock5 py-5">
    <div class="container py-lg-5 py-md-4">
        <!-- block -->
        <div class="left-right">
            <h3 class="section-title-left mb-sm-4 mb-2"> Beauty</h3>
            <a href="beauty.php" class="more btn btn-small mb-sm-0 mb-4">View more</a>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-5 position-relative">
                            <a href="beauty.php" class="image-mobile">
                                <img class="card-img-bottom d-block radius-image-full" src="assets/images/beauty1.jpg"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-7 card-body blog-details align-self">
                            <a href="beauty.php" class="blog-desc">Natural Spa - Where you feel unique and special
                            </a>
                            <div class="author align-items-center">
                                <ul class="blog-meta">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-4">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-5 position-relative">
                            <a href="beauty.php" class="image-mobile">
                                <img class="card-img-bottom d-block radius-image-full" src="assets/images/beauty2.jpg"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-7 card-body blog-details align-self">
                            <a href="beauty.php" class="blog-desc">How to get Beautiful coloring Highlights this weak
                            </a>
                            <div class="author align-items-center">
                                <ul class="blog-meta">
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-5 position-relative">
                            <a href="beauty.php" class="image-mobile">
                                <img class="card-img-bottom d-block radius-image-full" src="assets/images/beauty3.jpg"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-7 card-body blog-details align-self">
                            <a href="beauty.php" class="blog-desc">New Hair Styles can look fabulous and shiny
                            </a>
                            <div class="author align-items-center">
                                <ul class="blog-meta">
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="bg-clr-white hover-box">
                    <div class="row">
                        <div class="col-sm-5 position-relative">
                            <a href="beauty.php" class="image-mobile">
                                <img class="card-img-bottom d-block radius-image-full" src="assets/images/beauty4.jpg"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-sm-7 card-body blog-details align-self">
                            <a href="beauty.php" class="blog-desc">How our dreams should shine and spray beauty to us.</a>
                            <div class="author align-items-center">
                                <ul class="blog-meta">
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer-28 block -->
<section class="app-footer">
  <footer class="footer-28 py-5">
    <div class="footer-bg-layer">
      <div class="container py-lg-3">
        <div class="row footer-top-28">
          <div class="col-lg-4 footer-list-28 copy-right mb-lg-0 mb-sm-5 mt-sm-0 mt-4">
            <a class="navbar-brand mb-3" href="index.php">
              <span class="fa fa-newspaper-o"></span> VOGUE VIBE</a>
          </div>
          <div class="col-lg-8 row">
            <div class="col-sm-4 col-6 footer-list-28">
              <h6 class="footer-title-28">Useful links</h6>
              <ul>
                <li><a href="#categories">beauty blogs</a></li>
                <li><a href="#advertise">Advertise with us</a></li>
                <li><a href="#authors">Our Authors</a></li>
                <li><a href="contact.php">Get in touch</a></li>
              </ul>
            </div>
            <div class="col-sm-4 col-6 footer-list-28">
              <h6 class="footer-title-28">Categories</h6>
              <ul>
                <li><a href="beauty.php">Beauty</a></li>
                <li><a href="fashion.php">Fashion and Style</a></li>
              
              </ul>
            </div>
            <div class="col-sm-4 col-6 footer-list-28 mt-sm-0 mt-4">
              <h6 class="footer-title-28">Social Media</h6>
              <ul class="social-icons">
                <li class="facebook">
                  <a href="#facebook"><span class="fa fa-facebook"></span> Facebook</a></li>
                <li class="twitter"> <a href="#twitter"><span class="fa fa-twitter"></span> Twitter</a></li>
                <li class="linkedin"> <a href="#linkedin"><span class="fa fa-linkedin"></span> Linkedin</a></li>
                <li class="dribbble"><a href="#dribbble"><span class="fa fa-dribbble"></span> Dribbble</a></li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>
<!-- //footer-28 block -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- Template JavaScript -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- theme changer js -->
<script src="assets/js/theme-change.js"></script>
<!-- //theme changer js -->

<!-- courses owlcarousel -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for testimonials -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for testimonials -->

<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>