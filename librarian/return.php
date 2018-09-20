 <?php
							   $host="localhost";
$root="root";
$db="lms";
$pass="";
$con=mysqli_connect($host,$root,$pass,$db);

if(isset($_GET['del']))
{
$fat=$_GET['del'];
$g=date("d-m-y");

$gg=mysqli_query($con,"update issue_book set stu_return_date='$g' where id='$fat'");

if($gg==true)
{
	echo"<script>window.open('returnbook.php','_self')</script>";
}

}

?>