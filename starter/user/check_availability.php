<?php

require_once("includes/config.php");
//For Email
if(!empty($_POST["emailid"])) 
{
	$email= $_POST["emailid"];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) 
	{
		echo "error : You did not enter a valid email.";
	}
	else 
	{
		$result ="SELECT count(*) FROM userregistration WHERE email=?";
		$stmt = $mysqli->prepare($result);
		$stmt->bind_param('s',$email);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
		{
			echo "<span style='color:red'> Email already exist. Please try again.</span>";
		}
	}
}
// For Registration Number
if(!empty($_POST["userid"])) 
{
	$userid= $_POST["userid"];

		$result ="SELECT count(*) FROM userregistration WHERE userid=?";
		$stmt = $mysqli->prepare($result);
		$stmt->bind_param('s',$userid);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo "<span style='color:red'> User ID already exist. Please try again .</span>";
}
}


// For old Password
if(!empty($_POST["oldpassword"])) 
{
$pass=$_POST["oldpassword"];
$result ="SELECT password FROM userregistration WHERE password=?";
$stmt = $mysqli->prepare($result);
$stmt->bind_param('s',$pass);
$stmt->execute();
$stmt -> bind_result($result);
$stmt -> fetch();
$opass=$result;
if($opass==$pass) {
echo "<span style='color:green'> Password  matched .</span>";}
else {echo "<span style='color:red'> Password Not matched</span>";}
}


// For blogid availbilty
if(!empty($_POST["blogid"])) 
{
	$blogid = $_POST["blogid"];

		$result ="SELECT count(*) FROM blogs WHERE blogid=?";
		$stmt = $mysqli->prepare($result);
		$stmt->bind_param('s',$blogid);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo "<span style='color:red'> Blogid already exist. Please try again .</span>";
}
}

// For blogtitle availbilty
if(!empty($_POST["blog_title"])) 
{
	$blogtitle = $_POST["blog_title"];

		$result ="SELECT count(*) FROM blogs WHERE blog_title=?";
		$stmt = $mysqli->prepare($result);
		$stmt->bind_param('s',$blogtitle);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo "<span style='color:red'> Blog Title already exist. Please try again .</span>";
}
}
?>