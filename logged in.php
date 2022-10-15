<?php 
$servername="localhost";
$db_username="root";
$db_password="";
$db_name="khullapathsala_db";	

$connection=mysqli_connect($servername,$db_username,$db_password,$db_name) or die("Cannot Connect Database".$connection->error);


$mail = $_POST['mail'];
$pass = $_POST['pass'];

$sql="Select * from student where stu_email='$mail'  and stu_pass='$pass'";
$result=mysqli_query($connection,$sql);

if (mysqli_num_rows($result)>0) {
	header("location:afterlogin.php");
}else{
	echo "login failed";
}
?>
