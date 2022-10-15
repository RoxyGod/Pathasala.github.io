<?php
include_once('../dbconnection.php')
if(isset($_POST['name'])&&isset($_POST['mail'])&&isset($_POST['pass']){
 $name=$_POST['name'];
 $mail=$_POST['mail'];
 $pass=$_POST['pass'];
 $sql="INSERT INTO student(stu_name,stu_email,stu_pass) VALUES ('$name','$mail','$pass')";
 if(conn->query($sql)==TRUE){
     echo json_encode("Done");
 }else{
     echo json_encode("failed");
 }
}
?>