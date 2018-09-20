<!DOCTYPE html>
<html>
  <head>
      <title>A flat design</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="css/foundation.min.css">
      <link rel="stylesheet" href="css/custom.css">

      <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">
      <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet">
      <link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  </head>
  <body>
 
   <header class="container" id="main">
        <div class="large-6 column">
          <div class="brand">
		
            <a href="#">Library Management System</a>
          </div>
        </div>
        <nav id="main" class="large-6 column">
          <ul>
            <li><a href="student/Registration.php" class="button button-primary"><span class="glyphicon glyphicon-user"></span>Student Sign up</a></li>
            <li><a href="librarian/Registration.php"class="button button-primary"><span class="glyphicon glyphicon-user"></span>Admin Sign up</a></li>
          </ul>
        </nav>
      </header>
    <div class="container background-orange">
     
      <div class="row feature">
        <div class="large-6 column">
         <img src="img/rt.jpg" alt="" width="370px">
        </div>
        <div class="large-6 column pull-right">
        <h4>Features Of Student</h4>
		<p>Student can register yourself and after registration they will get studentid . After login student can view own dashboard.
		Student can update own profile.
		Student can view issued book and book return date-time.
		Student can also change own password.
		Student can also recover own password .</p>
		
		<h4>Features Of Admin</h4>
		<p>
    Admin Dashboard
    Admin can add/update/ delete category
    Admin can add/update/ delete author
    Admin can add/update/ delete books
    Admin can issue a new book to student and also update the details when student return book
    Admin can search student by using their student ID
    Admin can also view student details
    Admin can change own password
.</p>
		
        </div>
      </div>
    </div>
	
	 <div class="container-spacy features">
      <div class="row">
        <div class="large-4 column">
          <img src="img/cc.jpg" alt="">
          <h5 style='color:SteelBlue'>Books Issue</h5>
          
        </div>
        <div class="large-4 column">
          <img src="img/ad.jpg" alt="">
          <h5 style='color:SteelBlue'>Books Provided by Admin</h5>
          
        </div>
        <div class="large-4 column">
          <img src="img/et.jpg" alt="">
          <h5 style='color:SteelBlue'><br><br>Account approved by admin</h5>
         
        </div>
      </div>
    </div>
    
    
  </body>
</html>