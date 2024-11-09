<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdatabase";

 $conn = mysqli_connect($servername,$username,$password,$dbname);
  if($conn){
    echo"connected";
  }
  else{
    echo"failed to connect";
  }
// $conn= new mysqli($servername,$username,$password,$dbname);
// if($conn->connect_error){
//     die("connection failed:".$conn->connect_error);
// }

  $name= $conn->real_escape_string($_POST['name']);
  $email= $conn->real_escape_string($_POST['email']);
  $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
  $sql = "INSERT INTO  student1 (name,email,password) VALUES ('$name', '$email', '$password')";
  if($conn->query($sql)==true){
    echo"your data is inserted successfully!";
  }
  else{
    echo"there is error in insertation please review your inserted data".$sql."<br>".$conn->error;
  }
 $conn->close();
?>