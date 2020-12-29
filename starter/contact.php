<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
	
$cname=$_POST['cname'];
$cgender=$_POST['cgender'];
$contactno=$_POST['contactno'];
$emailid=$_POST['email'];
$msgg=$_POST['msg'];

$query="insert into contact(cname,cgender,contactno,email,msg) values(?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ssiss',$cname,$cgender,$contactno,$emailid,$msgg);
$stmt->execute();
echo"<script>alert('Msg Succssfully Send');</script>";

}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>VOGUE VIBE</title>


    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<!-- header -->
<header class="w3l-header">
	<div class="container">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-sm-3 px-0">
			<a class="navbar-brand" href="index.php">
				<span class="fa fa-newspaper-o"></span> VOGUE VIBE</a>
			<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->

			
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<!-- <span class="navbar-toggler-icon"></span> -->
				<span class="fa icon-expand fa-bars"></span>
				<span class="fa icon-close fa-times"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<nav class="mx-auto">
					<div class="search-bar"></div>
				</nav>
				<ul class="navbar-nav">
					<li class="nav-item @@home__active">
						<a class="nav-link" href="index.php">Home</a>
					</li>
          <li class="nav-item @@home__active">
						<a class="nav-link" href="beauty.html">Beauty</a>
          </li>
          <li class="nav-item @@home__active">
						<a class="nav-link" href="fashion.html">Fashion</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="contact.php">Contact</a>
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
<!-- contacts-5-grid -->
<div class="w3l-contact-10 py-5" id="contact">
    <div class="form-41-mian pt-lg-4 pt-md-3 pb-md-4">
        <div class="container">
            <div class="heading">
                <h3 class="category-title mb-3">Contact us </h3>
                <p class="mb-md-5 mb-4">If you have a question regarding our services, feel free
                    to contact us using the form below.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 form-inner-cont">
                    <form action="" method="post" class="signin-form">
                        <div class="form-grids">
                            <div class="form-input">
                                <input type="text" name="cname" placeholder="Enter your name *"
                                    required="required" />
                            </div>
                            <div class="form-input">
                                <input type="text" name="cgender"  placeholder="Enter your gender *"
                                    required="required"/>
  
                            </div>
                            <div class="form-input">
                                <input type="text" name="contactno" placeholder="Enter your Phone Number *"
                                    required="required"/>
                            </div>
                            
                            <div class="form-input">
                                <input type="email" name="email"  placeholder="Enter your email *"
                                    required="required" />
                                    </div>
                        
                        </div>
                        <div class="form-input">
                            <textarea type="text" name="msg" placeholder="Your message here"
                                required="required"></textarea>
                        </div>
                        <input type="submit" name="submit" class="form-input"  value="submit"/> 
                    </form>
                </div>
                
                <div class="col-lg-4 contacts-5-grid-main section-gap mt-lg-0 mt-5">
                    <div class="contacts-5-grid">
                        <h3 class="section-title-left mb-4"> Advertise with us</h3>
                        <div class="map-content-5">
                            <section class="tab-content">
                                <div class="contact-type">
                                    <div class="address-grid mb-4">
                                        <h6>Address</h6>
                                        <p>#323, National Highway, Fast Main Campus, Karachi.</p>
                                    </div>
                                    <div class="address-grid mb-4">
                                        <h6>Email Address</h6>
                                        <a href="mailto:fast@example.com" class="link1">fast@example.com</a>

                                    </div>
                                    <div class="address-grid">
                                        <h6>Phone Number</h6>
                                        <a href="tel:+12 324-016-695" class="link1">+12 324-016-695</a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //contacts-5-grid -->
    </div>
</div>

<!--<div class="contacts-sub-5">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563262564932!5m2!1sen!2sin"
        style="border:0" allowfullscreen></iframe>
</div> -->
<!-- footer-28 block -->
<section class="app-footer">
  <footer class="footer-28 py-5">
    <div class="footer-bg-layer">
      <div class="container py-lg-3">
        <div class="row footer-top-28">
          <div class="col-lg-4 footer-list-28 copy-right mb-lg-0 mb-sm-5 mt-sm-0 mt-4">
            <a class="navbar-brand mb-3" href="index.html">
              <span class="fa fa-newspaper-o"></span>VOGUE VIBE</a>
            <p class="copy-footer-28"> © 2020. All Rights Reserved. </p>
            <h5 class="mt-2">Design by <a href="#Design">Depencies</a></h5>
          </div>
          <div class="col-lg-8 row">
            <div class="col-sm-4 col-6 footer-list-28">
              <h6 class="footer-title-28">Useful links</h6>
              <ul>
                <li><a href="#categories">food blogs</a></li>
                <li><a href="#advertise">Advertise with us</a></li>
                <li><a href="#authors">Our Authors</a></li>
                <li><a href="contact.html">Get in touch</a></li>
              </ul>
            </div>
            <div class="col-sm-4 col-6 footer-list-28">
              <h6 class="footer-title-28">Categories</h6>
              <ul>
                <li><a href="beauty.html">Beauty</a></li>
                <li><a href="fashion.html">Fashion and Style</a></li>
                <li><a href="#food"> Food and Wellness</a></li>
                <li><a href="#lifestyle">Lifestyle</a></li>
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