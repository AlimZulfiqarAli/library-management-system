<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Login Form | LMS </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="POST">
            <h1>Student Login Form</h1>

            <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit1" value="Login">
                <a class="reset_pass" href="#">Lost your password?</a>
            </div>
			
			

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">New to site?
                    <a href="registration.php"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    </section>


</div>




<?php
$host="localhost";
$root="root";
$db="lms";
$pass="";

$con=mysqli_connect($host,$root,$pass,$db);


if(isset($_POST['submit1']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$fg=mysqli_query($con,"select * from stu_reg where username='$username' AND password='$password' && status='yes'");
	$gh=mysqli_num_rows($fg);
	
	if($gh==0)
	{
		echo"<h2 align='center'>Invalid Username AND Password</h2>";
	}
	else{
		$_SESSION["users"]=$username;
		echo"<script>window.open('plain_page.php','_self')</script>";
	}
	
}


?>


</body>
</html>
