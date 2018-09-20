<?php
$host="localhost";
$root="root";
$db="lms";
$pass="";
$con=mysqli_connect($host,$root,$pass,$db);

if(isset($_GET['dele']))
{
	$sd=$_GET['dele'];
	$fy=mysqli_query($con,"delete  from add_books where id='$sd'");
	
	if($fy==true)
	{
		echo"<script>window.open('displaybooks.php','_self')</script>";
	}
	
}

if(isset($_GET['dle']))
{
	$sd=$_GET['dle'];
	$fy=mysqli_query($con,"delete from issue_book where id='$sd'");
	
	if($fy==true)
	{
		echo"<script>window.open('returnbook.php','_self')</script>";
	}
	
}


?>