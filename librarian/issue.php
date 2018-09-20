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

    <title>Plain Page | LMS </title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="#" class="site_title"><i class="fa fa-book"></i> <span>LMS</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>


                        <h2><?php echo $_SESSION["userss"]; ?></h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a href='plain_page.php'><i class="fa fa-home"></i> Student Information <span class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a href='addbook.php'><i class="fa fa-edit"></i> Add Books <span class="fa fa-chevron-down"></span></a>

                          </li>
                            <li><a href='displaybooks.php'><i class="fa fa-desktop"></i> Display Books <span
                                    class="fa fa-chevron-down"></span></a>

                            </li>
                            <li><a href='issue.php'><i class="fa fa-table"></i>  Issue Books<span class="fa fa-chevron-down"></span></a>

                            </li>
                          <li><a href='returnbook.php'><i class="fa fa-bar-chart-o"></i> Return Book <span
                                    class="fa fa-chevron-down"></span></a>

                            </li>
<li><a href='bookwithstudent.php'><i class="fa fa-bar-chart-o"></i>Book With Student <span
                                    class="fa fa-chevron-down"></span></a>

                            </li>
								 </li>
                              <li><a href='message.php'><i class="fa fa-bar-chart-o"></i>Message<span
                                    class="fa fa-chevron-down"></span></a>

                            </li>
                        </ul>
                    </div>


                </div>

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="images/img.jpg" alt="">John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                   
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                              
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Issue Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form name="name3" action="issue.php" method="POST" class="col-lg-6">
							<table class="table table-stripped">
							<tr>
							<td> 
							<select class="form-control selectpicker" name='se' >
							<option>select enrolment_no</option>
							
							<?php
							$host="localhost";
                          $root="root";
                           $db="lms";
                              $pass="";

                          $con=mysqli_connect($host,$root,$pass,$db);
						  
					$gh=mysqli_query($con,"select * from stu_reg");
					while($df=mysqli_fetch_array($gh))
					{
						$fd=$df['enrolment_no'];
						

						
	
	
	
					
						?>
							<option value='<?php echo$fd; ?>'><?php echo$fd; ?></option>
					<?php }?>
							</select>
							
							
							</td>
							
							
							</tr>
							<tr>
							<td> 
							 <input class="btn btn-danger submit " type="submit" name="submit1" value="Issue Books">
							
							</td>
							</tr>
							</table>
							
							<?php
							$host="localhost";
                          $root="root";
                           $db="lms";
                              $pass="";

                          $con=mysqli_connect($host,$root,$pass,$db);
						  
						  if(isset($_POST['submit1']))
						  {
							  $hj=$_POST['se'];
							  $er=mysqli_query($con,"select * from stu_reg where enrolment_no='$hj'");
							  while($yyy=mysqli_fetch_array($er)){
							

							  
							    ?>
								
							 <table class="table table-stripped">
							 
							  <tr>
							 <td><input type="text" value="<?php echo$_POST['se'];?>" name="enrolment_no"  class="form-control" placeholder="enrolment_no " required=""/></td>
							 </tr>
							 
							 
							 <tr>
							 <td><input type="text" value="<?php echo$yyy['firstname'];?>" name="stu_name" class="form-control" placeholder="stu_name " required=""/></td>
							 </tr>
							 
							 <tr>
							 <td><input type="text" value="<?php    echo    $yyy['sem'];?>" name="stu_sem" class="form-control" placeholder="stu_sem " required=""/></td>
							 </tr>
							 <tr>
							 <td><input type="text" value="<?php  echo	$yyy['contact'];?>" name="stu_contact" class="form-control" placeholder="stu_contact 	 " required=""/></td>
							 </tr>
							 <tr>
							 <td><input type="text" value="<?php   echo	$yyy['email'];?>" name="stu_email" class="form-control" placeholder="stu_email " required=""/></td>
							 </tr>
							
							 <tr>
							 <td><input type="text" value="<?php  echo	$yyy['username'];?>" name="stu_user_name" class="form-control" placeholder="stu_user_name" required=""/></td>
							 </tr>
							
						  <?php } ?>
							 <tr>
							<td> 
							
							<select class="form-control selectpicker" name='book_name'>
							
							<option>select books</option>
							
							<?php
							$host="localhost";
                          $root="root";
                           $db="lms";
                              $pass="";

                          $con=mysqli_connect($host,$root,$pass,$db);
						  
					$ghg=mysqli_query($con,"select * from add_books");
					while($dfg=mysqli_fetch_array($ghg))
					{
						$dfg['book_name'];
						$dfg['id'];
					
						?>
							<option><?php echo $dfg['book_name']; ?></option>
					        <?php }?>
							</select>
							
							
							</td>
							 </tr>
							 
							  <tr>
							<td> <input class="btn btn-danger col-lg-12" type="submit" name="submit2" value="Issue Books"></td>
							</tr>
							

							  
							
							  
							  
							  <?php
						  }


							
							?>
							
						 


							 </table>
	
	



							
						  
							  
							  
							
						
							</form>
							
							
													 <?php
$host="localhost";
$root="root";
$db="lms";
$pass="";
$con=mysqli_connect($host,$root,$pass,$db);


if(isset($_POST['submit2']))
{
	
 $enrolment_no=$_POST['enrolment_no'];	   $stu_name=$_POST['stu_name'];	
 $stu_sem=$_POST['stu_sem'];
 $stu_contact=$_POST['stu_contact'];
 $stu_email=$_POST['stu_email'];
 
$stu_user_name=$_POST['stu_user_name'];
  $book_name=$_POST['book_name'];
$ry=mysqli_query($con,"select* from add_books where book_name='$book_name'");  
while($uu=mysqli_fetch_array($ry)){
	$yi=$uu['avalable_qty'];
}

if($yi==0)
{

	echo"<div> book not available</div>";
	
}
else{
	
	mysqli_query($con,"Insert Into issue_book(student_enrollment,stu_name,stu_sem,stu_contact,stu_email,stu_user_name,book_name)values('$enrolment_no','$stu_name','$stu_sem','$stu_contact','$stu_email','$stu_user_name','$book_name')");
mysqli_query($con,"update add_books set avalable_qty=avalable_qty-1 where book_name='$book_name'");
	
}

	
		
	
	
}




?>

							
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Library Management System
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="js/fastclick.js"></script>
<!-- NProgress -->
<script src="js/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="js/custom.min.js"></script>
</body>
</html>
