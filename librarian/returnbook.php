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
                            <li><a href='issue.php'><i class="fa fa-table"></i> Issue Books <span class="fa fa-chevron-down"></span></a>

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
                                <h2>Return Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form action="returnbook.php" method="post" class="col-lg-6">
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
						  
					$gh=mysqli_query($con,"select * from issue_book");
					while($df=mysqli_fetch_array($gh))
					{
						$fd=$df['student_enrollment'];
						

						
	
	
	
					
						?>
							<option value='<?php echo$fd; ?>'><?php echo$fd; ?></option>
					<?php }?>
							</select>
							</td>
							
							</tr>
							
						<tr>
						<td>
							<input class="btn btn-danger col-lg-3" type="submit" name="submit1" value="Return Book">
							</td>
						</tr>
							
							
							
							</table>
							
							</form>
							<table class="table">
							
							<tr class="active">
							<th>student_enrollment </th>
							<th>stu_name</th>
							<th>stu_sem </th>
							<th> stu_contact</th>
							<th>stu_email</th>
							
							<th> book_name</th>
							<th> stu_issue_date</th>
							<th> stu_returnbooks_date</th>
							<th>delete</th>
							</tr>
							
							<?php
							$host="localhost";
                          $root="root";
                           $db="lms";
                              $pass="";

                          $con=mysqli_connect($host,$root,$pass,$db);
						  
						  
						  if(isset($_POST['submit1']))
						  {
							 $tu=$_POST['se'];
			$gh=mysqli_query($con,"select * from issue_book where student_enrollment='$tu'");
					while($df=mysqli_fetch_array($gh))
					{
						
						
							  
							  ?>
							
							
							<tr>
							   <td><?php echo $df['student_enrollment']; ?></td>
							     <td><?php echo  $df['stu_name']; ?></td>
								   <td><?php echo  $df['stu_sem']; ?></td>
								     <td><?php echo  $df['stu_contact']; ?></td>
									   <td><?php echo  $df['stu_email']; ?></td>
									    <td><?php echo $df['book_name']; ?></td>
										 <td><?php echo  $df['stu_issue_date']; ?></td>
										 
										 <td><a href="returnbook.php?del=<?php echo $df['id'];?>"><?php echo "returnbooks"; ?></a></td>
										<td><a href='delete.php?dle=<?php echo $df['id']; ?>'><button  class='btn btn-danger btn-sm'>Delete</button></td>
							   </tr>
							
							
							
							
<?php
					}
							
							  
							  
						  }
							
							
							
							?>
							</table>
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
