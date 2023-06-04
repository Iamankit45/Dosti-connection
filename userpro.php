<?php

include('conf.php');

if (isset($_GET['uid'])) {



  $result = $_GET['uid'];

  $sqli = "SELECT * FROM form  where name = '$result'";


  $res1 = mysqli_query($conn, $sqli);

  $result1 = mysqli_fetch_assoc($res1);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>other's profile</title>
  <link rel="stylesheet" href="userpro.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <!-- CSS only -->

</head>

<body>
  <div class="container">
    <a class="logo1" href="#"><img class="logo" src="./image/img/l10.png">
      <h1>Dosti-connection</h1>
    </a>
    <div class="pro">



      <div class="pro1">
        <img class="image" src="
        <?php

        echo $result1['photo'];

        ?>" />
      </div>





      <div class="pro2">

        <h1>



          <?php

          echo $result1['name'];

          ?>
        </h1>
        <p1>About</p1>
        <div class="about">
          <?php
          echo $result1['about'];
          ?>
        </div>
        <p1>Job</p1>

        <div class="job">
          <?php
          echo $result1['job'];
          ?>
        </div>

        <p1>Age</p1>
        <div class="age">
          21
        </div>

        <p1>Goal</p1>
        <div class="goal">
          <?php
          echo $result1['goal'];
          ?>
        </div>
        <p1>Favorite-foods</p1>

        <div class="fav">
          <?php
          echo $result1['food'];


          ?>
        </div>
        <p1>Interest</p1>
        <div class="interest">
          <?php

          echo $result1['interest'];
          ?>

        </div>

        <p1>Fav-shows</p1>
        <div class="shows">

          <?php
          echo $result1['shows'];
          ?>
        </div>

        <div class="social">
          <p1>Contact me on social media </p1>
          <br>
          <a href="http://www.instagram.com/i_am_ankit__45/"><img class="insta" src="p4.png"></a>
          <a href="#"> <img class="fb" src="p5.jpeg"></a>
          <a href="#"> <img class="twitter" src="p6.webp"></a>
          <a href="#"> <img class="snap" src="p7.png"></a>
          <a href="http://127.0.0.1:5500/chat.html">
            <p1 class="text">Text me</p1>
          </a>
          </br>
          </br>




        </div>



      </div>
    </div>
  </div>
</body>

</html>