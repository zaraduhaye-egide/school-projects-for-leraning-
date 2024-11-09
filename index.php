/*<?php
/*
$servername="localhost";
$username="root";
$password="";
$dbname="chaban";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn==TRUE){
    echo"dta base connected successsfully";
}
else{
    echo"not connected to database";
}
$name=$conn->real_escape_string($_POST['name']);
$codername=$conn->real_escape_string($_POST['username']);
$email=$conn->real_escape_string($_POST['email']);
$password=password_hash($_POST['password'] ,PASSWORD_DEFAULT);


$sql="INSERT INTO egide(name,username,email,password) VALUES('$name,'$codername','$email','$password')";
if($conn->query($sql)==true){
    echo"your data is inserted successfully!";
  }
  else{
    echo"there is error in insertation please review your inserted data".$sql."<br>".$conn->error;
  }
 $conn->close();
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chaban";

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
  $codername= $conn->real_escape_string($_POST['username']);
  $email= $conn->real_escape_string($_POST['email']);
  $password= password_hash($_POST['password'],PASSWORD_DEFAULT);
  $sql = "INSERT INTO  egide (name,username,email,password) VALUES ('$name','$codername', '$email', '$password')";
  if($conn->query($sql)==true){
    echo"your data is inserted successfully!";
  }
  else{
    echo"there is error in insertation please review your inserted data".$sql."<br>".$conn->error;
  }
 $conn->close();

?>