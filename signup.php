<?php

include('conf.php');

$Username=$_POST["Username"];
$age=$_POST["age"];
$city=$_POST["city"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phone"];

$sql="INSERT INTO sign_up VALUES ('$Username','$age','$city','$gender','$email','$password','$phone')";
$sql1="INSERT INTO login VALUES ('$Username','$password')";

$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);

if ($result) {
   echo"signup successfully";
   header('location:form.html');
} else {
    echo "Error: " . mysqli_error($conn);

}
if ($result1) {
    echo"saved data successfully";
 } else {
     echo "Error: " . mysqli_error($conn);
 
 }


?>