<?php
    $name= $_POST['name'];
    $mail= $_POST['mail'];
    $pass= $_POST['pass'];
    $confirm= $_POST['confirm'];

    $conn = mysqli_connect('localhost', 'root', '','khullapathsala_db'); 
    if (!$conn) {
        die("Connection failed: " );
      }else{
        $sql = "INSERT INTO student (stu_name,stu_email,stu_pass,stu_cpass)
        VALUES ('$name', '$mail','$pass', '$confirm')";
        
        if (mysqli_query($conn, $sql)) {
          header("location:login.php");
        } else {
          echo "Error: ";
        }
        
      }
?>