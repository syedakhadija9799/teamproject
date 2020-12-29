<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>

<li><a href="blog.php"><i class="fa fa-file-o"></i>Post A Blog</a></li>
<li><a href="blog-details.php"><i class="fa fa-file-o"></i>Blog Details</a></li>
<li><a href="blog-rating.php"><i class="fa fa-file-o"></i>Blogs Rating</a></li>
<li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
<li><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>
<li><a href="access-log.php"><i class="fa fa-file-o"></i>Access log</a></li>
<?php } else { ?>
				
				<li><a href="#registration"><i class="fa fa-files-o"></i> User Registration</a></li>
				<li><a href="#index"><i class="fa fa-users"></i> website</a></li>
				<?php } ?>

			</ul>
		</nav>