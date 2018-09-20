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
                            <div class="input-group ">
                             
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2 >Add Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
							<form name="name1" method="post" action="addbook.php" class="col-lg-6" enctype="multipart/form-data">
							<table class="table table-stripped">
							
							
							<tr>
							<td> <input type="text" name="book_name" class="form-control" placeholder="book_name " required=""/></td>
							</tr>
							
							<tr>
							<td> <input type="File" name="image"  placeholder="image" required=""/></td>
							</tr>
							
						<tr>
							<td> <input type="text" name="author_name" class="form-control" placeholder="author_name" required=""/></td>
							</tr>
							
							<tr>
							<td> <input type="text" name="publication_name" class="form-control" placeholder="publication_name" required=""/></td>
							</tr>
							
							<tr>
							<td> <input type="text" name="purchase_date" class="form-control" placeholder="purchase_date" required=""/></td>
							</tr>
							
							<tr>
							<td> <input type="text" name="price" class="form-control" placeholder="price" required=""/></td>
							</tr>
							
							<tr>
							<td> <input type="text" name="qty" class="form-control" placeholder="qty" required=""/></td>
							</tr>
							
							<tr>
							<td> <input type="text" name="available_qty" class="form-control" placeholder="avalable_qty" required=""/></td>
							</tr>
							
							<tr>
							<td> <input type="text" name="lib_user_name" class="form-control" placeholder="lib_user_name" required=""/></td>
							</tr>
							

							
							<tr>
							<td> <input class="btn btn-danger col-lg-12" type="submit" name="submit1" value="Insert"></td>
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
	$book =$_POST['book_name'];
	$author=$_POST['author_name'];
$publication_name=$_POST['publication_name'];
						$purchase_date=$_POST['purchase_date'];
							$price=$_POST['price'];
							$qty=$_POST['qty'];
							$available_qty =$_POST['available_qty'];
						$lib_user_name=$_POST['lib_user_name'];
						
			           $image=$_FILES['image']['name'];
		               $tempimage=$_FILES['image']['tmp_name'];
							
							move_uploaded_file($tempimage,"images/$image");
							move_uploaded_file($tempimage,"student/images/$image");

mysqli_query( $con,"insert into add_books (book_name,image , 	author_name,publication_name 	, 	purchase_date, 	price , 	qty ,avalable_qty , 	lib_user_name )
								   values('$book','$image','$author','$publication_name','$purchase_date'
								   ,'$price','$qty','$available_qty','$lib_user_name')");

	
}
						mysqli_close($con);	
						
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
