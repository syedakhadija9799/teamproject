<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
//check_login();
//$aid=$_SESSION['id'];
//code for approve blogs
if(isset($_POST['submit']))
{

$blogid=$_POST['blogid'];
$blog_cat=$_POST['blog_cat'];
$blog_title=$_POST['blog_title'];
$blog=$_POST['blog'];
$userid=$_POST['userid'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$gender=$_POST['gender'];
$contactno=$_POST['contactno'];
$emailid=$_POST['emailid'];
$result ="SELECT count(*) FROM posted_blog WHERE blogid=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('i',$blogid);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo"<script>alert('Blog already approved.');</script>";
}
else{
$query="insert into posted_blog(blogid,blog_cat,blog_title,blog,userid,firstname,lastname,gender,contactno,emailid) values(?,?,?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('isssisssis',$blogid,$blog_cat,$blog_title,$blog,$userid,$fname,$lname,$gender,$contactno,$emailid);
$stmt->execute();
echo"<script>alert('Blog Approved');</script>";}
}
 ?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Blog Approve</title>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="assets/css/bootstrap-social.css">
	<link rel="stylesheet" href="assets/css/bootstrap-select.css">
	<link rel="stylesheet" href="assets/css/fileinput.min.css">
	<link rel="stylesheet" href="assets/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="assets/css/style.css">
<script type="text/javascript" src="assets/js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="assets/js/validation.min.js"></script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Blog Approve </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Blog Approve</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
												<?php	
												
$aid=$_GET['blogid'];
$ret="select blog.*,userregistration.* from blog, userregistration where blog.userid=userregistration.userid and blogid=?";
		$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$aid);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
						<div class="hr-dashed"></div>
						
						<div class="form-group">
						<label class="col-sm-2 control-label">Blog ID </label>
					    <div class="col-sm-8">
					    <input type="text"  name="blogid" value="<?php echo $row->blogid;?>" required="required" class="form-control" readonly>  </div>
					    </div>
						
						<div class="form-group">
						<label class="col-sm-2 control-label">Blog Category </label>
					    <div class="col-sm-8">
					    <input type="text"  name="blog_cat" value="<?php echo $row->blog_cat;?>" required="required" class="form-control" readonly>  </div>
					    </div>
				 
						<div class="form-group">
				 		<label class="col-sm-2 control-label">Blog Title</label>
						<div class="col-sm-8">
				
						<textarea class="form-control" name='blog_title' cols='60' rows='3' required="required" readonly><?php echo $row->blog_title;?></textarea>
						 </div>
						</div>

						<div class="form-group">
						<label class="col-sm-2 control-label">Blog</label>
						<div class="col-sm-8">
						<textarea class="form-control" name='blog' cols='60' rows='10' required="required" readonly><?php echo $row->blog;?></textarea>
						</div>
						</div>

						<div class="form-group">
						<label class="col-sm-2 control-label">User ID</label>
						<div class="col-sm-8">
						<input type="text" class="form-control" name="userid" value="<?php echo $row->userid;?>" required="required" readonly >
						</div>
						</div>

						<div class="form-group">
						<label class="col-sm-2 control-label">First Name</label>
						<div class="col-sm-8">
						<input type="text" class="form-control" name="firstname" value="<?php echo $row->firstname;?>" required="required" readonly >
						</div>
						</div>

						<div class="form-group">
						<label class="col-sm-2 control-label">Last Name</label>
						<div class="col-sm-8">
						<input type="text" class="form-control" name="lastname" value="<?php echo $row->lastname;?>" required="required" readonly >
						</div>
						</div>

						<div class="form-group">
						<label class="col-sm-2 control-label">Gender</label>
						<div class="col-sm-8">
						<input type="text" class="form-control" name="gender" value="<?php echo $row->gender;?>" required="required" readonly >
						</div>
						</div>

						<div class="form-group">
						<label class="col-sm-2 control-label">Cotact No</label>
						<div class="col-sm-8">
						<input type="text" class="form-control" name="contactno" value="<?php echo $row->contactno;?>" required="required" readonly >
						</div>
						</div>

						<div class="form-group">
						<label class="col-sm-2 control-label">Email</label>
						<div class="col-sm-8">
						<input type="text" class="form-control" name="emailid" value="<?php echo $row->email;?>" required="required" readonly >
						</div>
						</div>





<?php } ?>
												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Approve blog">
												</div>
											</div>

										</form>

									</div>
								</div>
									
							
							</div>
						
									
							

							</div>
						</div>

					</div>
				</div> 	
				

			</div>
		</div>
	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/js/Chart.min.js"></script>
	<script src="assets/js/fileinput.js"></script>
	<script src="assets/js/chartData.js"></script>
	<script src="assets/js/main.js"></script>

</script>
</body>

</html>