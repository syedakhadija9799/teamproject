<?php
session_start();
include('includes/config.php');

if(isset($_POST['submit']))
{

$blogid=$_POST['blogid'];
$r1=$_POST['r1'];
$rating=$_POST['rating'];

$result ="SELECT count(*) FROM rating WHERE blogid=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('i',$blogid);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{

$r=($rating+$r1);
$r2=($r/2);

  $query="update rating set rating=? where blogid=?";
  $stmt = $mysqli->prepare($query);
  $rc=$stmt->bind_param('ii',$r2,$blogid);
  $stmt->execute();
  $query="update posted_blog set rating=? where blogid=?";
  $stmt = $mysqli->prepare($query);
  $rc=$stmt->bind_param('ii',$r2,$blogid);
  $stmt->execute();
  echo"<script>alert('Rating Update Succssfully');</script>";
}
else{
  
$query="insert into rating(blogid,rating) values(?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ii',$blogid,$rating);
$stmt->execute();
$query="update posted_blog set rating=? where blogid=?";
  $stmt = $mysqli->prepare($query);
  $rc=$stmt->bind_param('ii',$rating,$blogid);
  $stmt->execute();
  echo"<script>alert('Rating Upload Succssfully');</script>";

}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Fashion</title>
  <script>
    // detect IE8 and above, and edge
    if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        alert('Please use Chrome or Firefox for best browsing experience!');
    }
  </script>

  <!-- load CSS -->
 
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">                                      
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">                                
  <link rel="stylesheet" href="slick/slick.css">
  <link rel="stylesheet" href="slick/slick-theme.css">
  <link rel="stylesheet" href="assets/css/beauty2.css">                                    

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
          <h1 class="tm-site-name">Fashion</h1>
        </div>
        <div class="tm-welcome-content">
          <!-- fa icons -->
          <div class="tm-welcome-icons-container">
            <i class="fas fa-crown fa-5x tm-welcome-icon"></i>
            <i class="fas fa-heart fa-5x tm-welcome-icon"></i>
          </div>
          <h2 class="tm-mb-25"> “Your outer beauty will capture the eyes, your inner beauty will capture the heart.” </h2>
          <p class="tm-font-big">Beauty is defined as a combination of qualities, such as shape, colour, or form, that pleases the aesthetic senses, especially the sight. However, beauty is more than what you see, it is not just how you look on the outside but who you are on the inside is what determines true beauty. May these quotes inspire you to be a beautiful person from within.</p>
        </p>
        </div>
      </div>
      <div class="tm-welcome-right"></div> 
   </section>
    <div class="tm-bar-2"></div> 
    <form action="" method="post" class="form-horizontal" >
    <?php	
$aid=$_GET['blog_title'];
$ret="select * from posted_blog where  blog_title=? ";
$stmt= $mysqli->prepare($ret) ;
$stmt->bind_param('s',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
//$cnt=1;
while($row=$res->fetch_object())
	  {  
    ?>
    	
    <!-- <section class="row tm-section-mb tm-section-2">
      <div class="col-md-12 tm-section-2-inner"> -->
        
        <!--<div class="tm-section-2-right tm-bg-primary"> -->
        <div class="form-group">
				 		<label class="col-sm-2 control-label">Blog Title</label>
						<div class="col-sm-8">
				
						<textarea class="form-control" name='blog_title' cols='60' rows='3' required="required" readonly><?php echo $row->blog_title;?></textarea> 
						 </div>
						</div>

            <div class="form-group">
						<label class="col-sm-2 control-label">Blog</label>
						<div class="col-sm-8">
						<textarea class="form-control" name='blog' cols='60' rows='30' required="required" readonly><?php echo $row->blog;?></textarea>
						</div>
						</div>
            <input type="hidden"  class="form-control" name="blogid" value="<?php echo $row->blogid;?>" required="required" >
            <input type="hidden"  class="form-control" name="r1" value="<?php echo $row->rating;?>" required="required" >
          <?php } ?>       
          
          </div>
          </form>
       <!-- </div> -->
     <!-- </div>
    </section> -->
    <section class="row">
    <div class="col-md-7 d-flex tm-contact-left-col">
      <div class="tm-bg-primary tm-contact-left">
        <div class="tm-contact-left-inner">
          <h2 class="text-center tm-mb-40 tm-contact-header">RATE THIS BLOG</h2>
          <p class="tm-line-height-4 mb-8">Are you an influencer? Need a platform to express your thoughts? Don't worry! We've got you covered! Rate this blog here and share your views with the world!</p>
          <div>
            <p>Note: After rating this blog, check the respective field to view it. Thanks!</p>
        </div>
          <div class="form-group mb-0">
           
          </div>
          
          
        </div>
      </div>
    </div>


    <div class="col-md-4">
      <form action="" method="post" class="tm-contact-form">
      <?php	
$aid=$_GET['blog_title'];
$ret="select * from posted_blog where blog_title=? ";
$stmt= $mysqli->prepare($ret) ;
$stmt->bind_param('s',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
//$cnt=1;
while($row=$res->fetch_object())
	  {  
    ?> 
     <input type="hidden"  class="form-control" name="blogid" value="<?php echo $row->blogid;?>" required="required" >
      <input type="hidden"  class="form-control" name="r1" value="<?php echo $row->rating;?>" required="required" >
          <?php } ?>       
      <div class="form-row align-items-center">
          <div class="col-auto my-1">
            <label class="mr-sm-2 sr-only" for=""></label>
            <select name="rating" class="custom-select mr-sm-2" required="required">
              <option selected>RATE</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              <option value="4">Four</option>
              <option value="5">Five</option>
            </select>
          </div>
          <div class="col-auto my-1">
             <input type="submit" name="submit" class="btn btn-primary"
                                    value="submit"/>
          
          </div>
        </div>
      </form>
    </div>  
  </section>
     
  <section class="row tm-section-pt tm-section-pb">
    <div class="col-md-12 mx-auto text-center">
      <h2 class="tm-text-dark tm-mb-50">THE COMMUNITY</h2>
      <p class="tm-text-light-dark tm-font-big">"I am of the opinion that my life belongs to the whole community and as long as I live, it is my privilege to do for it whatever I can. I want to be thoroughly used up when I die, for the harder I work the more I live." – George Bernard Shaw</p>
    </div>
  </section>

  <section class="row tm-section-pb">
    <div class="col-md-12 tm-bg-accent tm-gallery-pad tm-gallery-container mx-auto">
      <h2 class="text-center tm-mb-45">Image Gallery</h2>
      <div class="grid tm-gallery">
        <figure class="effect-lexi tm-gallery-item">
          <img src="assets/images/glow1.jpg" alt="Image" class="" width="50" height="425">
         
        </figure>
        <figure class="effect-lexi tm-gallery-item">
          <img src="assets/images/glow4.jpg" alt="Image" class=" " width="50" height="425">
         
        </figure>
        <figure class="effect-lexi tm-gallery-item">
          <img src="assets/images/glow5.jpg" alt="Image" class="" width="50" height="425">
          
        </figure>
        <figure class="effect-lexi tm-gallery-item">
          <img src="assets/images/glow6.jpg" alt="Image" class="" width="50" height="425">
         
        </figure>
        <figure class="effect-lexi tm-gallery-item">
          <img src="assets/images/glow7.jpg" alt="Image" class="" width="50" height="425">
          
        </figure>
        <figure class="effect-lexi tm-gallery-item">
          <img src="assets/images/glow8.jpg" alt="Image" class="" width="50" height="425">
          
        </figure>
      </div>
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
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
    });
  });

</script>
</body>
</html>