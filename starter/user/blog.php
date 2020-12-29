<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
$aid=$_SESSION['id'];
if(isset($_POST['submit']))
{
$blog_cat=$_POST['blog_cat'];
$blog_title=$_POST['blog_title'];
$blog=$_POST['blog'];
$result ="SELECT count(*) FROM blog WHERE blog_title=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('s',$blog_title);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo"<script>alert('Blog Title already registered.');</script>";
}
else{
$query="insert into blog(userid,blog_cat,blog_title,blog) values(?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('isss',$aid,$blog_cat,$blog_title,$blog);
$stmt->execute();
echo"<script>alert('Blog Succssfully Post');</script>";

}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Blog </title>
  

  <!-- load CSS -->
    <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">                                      
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">                                
  <link rel="stylesheet" href="slick/slick.css">
  <link rel="stylesheet" href="slick/slick-theme.css">
  <link rel="stylesheet" href="assets/css/blog.css">                                     
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


<!-- jQuery and JS bundle w/ Popper.js -->
<script src="assets/js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>

<body>

  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div class="container">
    <div class="tm-top-bar"></div>

    <!-- Welcome section -->
    <section class="tm-welcome">

      <div class="tm-welcome-left">
        <!-- Logo -->
        <div class="tm-logo">
          <h1 class="tm-site-name">POST A BLOG</h1>
        </div>
        <div class="tm-welcome-content">
          <!-- fa icons -->
          <div class="tm-welcome-icons-container">
            <i class="fas fa-crown fa-5x tm-welcome-icon"></i>
            <i class="fas fa-heart fa-5x tm-welcome-icon"></i>
          </div>

          <h2 class="tm-mb-25">Promote your blog posts</h2>
          <p class="tm-font-big"> Post you blog down below and get ratings and reviews  </p>
         
        </div>
      </div>
      <div class="tm-welcome-right"></div>

    </section>
    <div class="tm-bar-2"></div>

   
    <section class="row">
        <div class="col-md-7 d-flex tm-contact-left-col">
          <div class="tm-bg-primary tm-contact-left">
            <div class="tm-contact-left-inner">
              <h2 class="text-center tm-mb-40 tm-contact-header">POST YOUR BLOG HERE!</h2>
              <p class="tm-line-height-2 mb-5">Are you an influencer? Need a platform to express your thoughts? Don't worry! We've got you covered! Post your blog here and share your views with the world!</p>
             <br>
             <br>
             <div>
                <p>Note: After posting your blog, check the respective field to view it. Thanks!</p>
            </div>
              
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <form action="" method="post" class="tm-contact-form">

            
                    <div class="form-row align-items-center">
                      <div class="col-auto my-1">
                        <label  for="">Post A Blog</label>
                        <select class="custom-select mr-sm-2" name="blog_cat" required="required">
                          <option selected>blog categories</option>
                          <option value="beauty">beauty</option>
                          <option value="fashion">Fashion and style</option>
                        </select>
                      </div>
                    </div> 
                 
                  <div class="form-group mb-4">
                    <input type="text" name="blog_title" class="form-control" placeholder="title of your blog" required="required" onBlur="checkAvailability()">
                  </div>

            <div class="form-group mb-4">
              <textarea  type="text" rows="20" name="blog" class="form-control" placeholder="blog" required="required"></textarea> 
            </div> 
            <div class="form-group mb-0">
						<input name="submit" class="btn btn-primary tm-btn-round tm-fl-left" type="submit" value="post blog">
               
             
            </div>
            
          </form>
          <a href="dashboard.php" class="btn btn-primary tm-btn-round tm-fl-left">
							back
						</a>
        </div>
         
        
      </section>
    
    </div> <!-- container -->
    
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script>
   
      $(function(){
        $('.tm-gallery').slick({
          dots: true,
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 2,
          responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }

        ]
        });
      }); 
    
    </script>
    </body>
    <script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'blog_title='+$("#blog_title").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function ()
{
event.preventDefault();
alert('error');
}
});
}
</script>
    </html>