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
                            <li><a href='issue.php'><i class="fa fa-table"></i>  Issue Books <span class="fa fa-chevron-down"></span></a>

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
                           
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2 >Display Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form name="name1" method="post" action="message.php" class="col-lg-12 "  enctype="multipart/form-data">
							<table class="table table-stripped">
							<tr>
							<td>
							<select class="form-control selectpicker"name='aw'>
							<option>Select Student Name</option>
							<?php
							$host="localhost";
                          $root="root";
                           $db="lms";
                              $pass="";

                          $con=mysqli_connect($host,$root,$pass,$db);
						  
					$gh=mysqli_query($con,"select * from stu_reg");
					while($df=mysqli_fetch_array($gh))
					{
						$fd=$df['username'];
						

						
	
	
	
					
						?>
							<option value='<?php echo$fd; ?>'><?php echo$fd; ?></option>
					<?php }?>
							
							
							
							
							
							
							
							</option>
							</select>
							</td>
							<tr><td> <textarea type="text" class="form-control" rows="15" id="comment" name="tet"></textarea></td></tr>
							</tr>
							<tr><td><input class="btn btn-danger col-lg-12" type="submit"  name="submit1" value="Send Message"></td></tr>
							</tr>
							</table>
							</form>
							
							<?php
							$host="localhost";
                          $root="root";
                           $db="lms";
                              $pass="";

                          $con=mysqli_connect($host,$root,$pass,$db);
						  
						  if(isset($_POST['submit1']))
						  {
							  $as=$_POST['aw'];
							  $er=$_POST['tet'];
							  
							  mysqli_query($con,"insert into message(stu_name,message)values('$as','$er')");
							  
						  }
						  ?>
							
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
