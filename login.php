<?php

include('conf.php');
 $Username=$_POST['Username']; 
 $password=$_POST['password'];
$sql="select *from login where Username='$Username' and password='$password' "; 
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
$_SESSION['Username']=$result['Username'];

// $sql1="SELECT name FROM form WHERE name='$Username'";
// $re=mysqli_query($conn, $sql1);
// $result2= mysqli_fetch_assoc($re);

echo"connection established";
header('location:profile.php?uid=' . $result['Username'].'');
// header('location:profile.php');
} else {
header('location:LOGIN.html');
echo"wrong password";
 }




?>