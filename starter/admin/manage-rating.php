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
	<title>Manage Rating</title>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap-social.css">
	<link rel="stylesheet" href="assets/css/bootstrap-select.css">
	<link rel="stylesheet" href="assets/css/fileinput.min.css">
	<link rel="stylesheet" href="assets/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title" style="margin-top: 4%">Manage Rating</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Rating Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
                                            <th>User Id</th>
											<th>Blog Id</th>
											<th>Blog Rating</th>
											<th>Posting Date  </th>
										</tr>
									</thead>
									<tfoot>
										<tr>
                                        <th>Sno.</th>
                                        <th>User Id</th>
                                        <th>Blog Id</th>
                                        <th>Blog Rating</th>
                                        <th>Posting Date</th>
										</tr>
									</tfoot>
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from rating";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;?></td>
<td><?php echo $row->rid;?></td>
<td><?php echo $row->blogid;?></td>
<td><?php echo $row->rating;?></td>
<td><?php echo $row->posting_date;?></td>
										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
									</tbody>
								</table>

								
							</div>
						</div>

					
					</div>
				</div>

			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap-select.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.dataTables.min.js"></script>
	<script src="assets/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/js/Chart.min.js"></script>
	<script src="assets/js/fileinput.js"></script>
	<script src="assets/js/chartData.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
