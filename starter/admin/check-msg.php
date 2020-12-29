<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

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
	<title>Check Msg</title>
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
					
						<h2 class="page-title">Contact US</h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Check Msg</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
										<?php	
$cid=$_GET['cid'];
$ret="select * from contact where cid=?";
$stmt= $mysqli->prepare($ret) ;
$stmt->bind_param('i',$cid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
		  ?>

						<div class="hr-dashed"></div>
						
						<div class="form-group">
						<label class="col-sm-2 control-label">User ID </label>
					    <div class="col-sm-8">
					    <input type="text"  name="cid" value="<?php echo $row->cid;?>" required="required" class="form-control" readonly>  </div>
					    </div>
						
						<div class="form-group">
						<label class="col-sm-2 control-label">User Name</label>
					    <div class="col-sm-8">
					    <input type="text"  name="blog_cat" value="<?php echo $row->cname;?>" required="required" class="form-control" readonly>  </div>
						</div>
						

						<div class="form-group">
						<label class="col-sm-2 control-label">Gender</label>
						<div class="col-sm-8">
						<input type="text" class="form-control" name="cgender" value="<?php echo $row->cgender;?>" required="required" readonly >
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
				 
						<div class="form-group">
						<label class="col-sm-2 control-label">Message</label>
						<div class="col-sm-8">
						<textarea class="form-control" name='blog' cols='60' rows='10' required="required" readonly><?php echo $row->msg;?></textarea>
						</div>
						</div>

						

						<div class="form-group">
						<label class="col-sm-2 control-label">Posting Date</label>
						<div class="col-sm-8">
						<input type="text" class="form-control" name="posting_date" value="<?php echo $row->posting_date;?>" required="required" readonly >
						</div>
						</div>





<?php } ?>
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