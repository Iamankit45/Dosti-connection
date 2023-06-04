<?php

include('conf.php');
 
if (isset($_GET['uid']))
 {
    


    $result = $_GET['uid'];

$sqli = "SELECT * FROM sign_up  where Username = '$result'";


$res1=mysqli_query($conn, $sqli);

$result1=mysqli_fetch_assoc($res1);


 }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
<div class="container">

   <div class="cont1">
<div class="dp">
<img class="dp-img" src="

<?php
$sqli2 = "SELECT * FROM form where name = '$result'";
$res2=mysqli_query($conn, $sqli2);

$result3=mysqli_fetch_assoc($res2);
echo $result3['photo'];

$sql4="SELECT * FROM INTEREST  where name= '$result'";

$res4=mysqli_query($conn, $sql4);
?>
">

</div>

<div class="name">
    <h1>
     <?php   
    
    echo $result1['Username'];
    ?>
    </h1>
</div>

<div class="email">

    <h>Email</h>
    <p>
        
   <?php

echo $result1['email'];
   ?>

</p>
</div>


<div class="phone">

<h>Phone</h>

<p>
<?php
echo $result1['phone'];
?>
</p>


</div>

<div class="job">

    <h>Job</h>

    <p>
<?php

echo $result3['job'];
?>
    </p>
</div>


<div class="city">

    <h>City</h>
    <p>
<?php
echo $result1['city'];
?>

    </p>
</div>
  





   <div class="interest">

    <h>Interest</h>
    <p>
    <?php
    while($row=mysqli_fetch_assoc($res4)){
    echo $row['interest'].',';
    }
    ?></p>
   
   </div>
</div>

<div class="cont2">



<div class="choose">

    <h1>Choose your similiar one</h1>

<div class="similiar">


<?php
 include ('conf.php');
 $res4=mysqli_query($conn, $sql4);
 $result4=mysqli_fetch_assoc($res4);
// echo var_dump($result4);
// echo var_dump($res4);
$int=$result4['interest'];
// echo var_dump($int);
 $sql10="SELECT name FROM INTEREST WHERE interest ='$int'";
$username=$result1['Username'];
 $res10=mysqli_query($conn,$sql10);
 echo '<table class="borot1" border="1"><tr><th>Name</th>
<th>Photo</th></tr>';
 while($result10=mysqli_fetch_assoc($res10)){
$p= $result10['name'];
$sql="SELECT * FROM form WHERE name ='$p' AND name <>'$username'";

$res=mysqli_query($conn, $sql);

 while ($result=mysqli_fetch_assoc($res))
 {
   echo '<tr><td> <a href="userpro.php?uid=' . $result['name'] .'">'.$result['name'].'</td>';
   
  echo "<td>'<img class='sansi' src=".$result['photo'] ." '</td>";
   echo'</tr>';
   
 }

 }
 echo '</table>';

?>

    



</div>




</div>

</div>

</div>
</body>
</html>
