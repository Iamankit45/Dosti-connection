<?php

include('conf.php');

$name = $_POST["name"];


$file = $_FILES['photo'];

$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];


if ($fileerror == 0) {
    $destfile = 'image2/' . $filename;
    move_uploaded_file($filepath, $destfile);
}


// $folder = "image2" . $photo;


$about = $_POST["about"];
$job = $_POST["job"];
$goal = $_POST["goal"];
$shows = $_POST["shows"];
$food = $_POST["food"];
$interest = $_POST["choice"];

// echo "$interest";

$sql = "INSERT INTO form VALUES ('$name','$destfile','$about','$job','$goal','$shows','$food')";
$result = mysqli_query($conn, $sql);


if (!empty($interest)) {
    foreach ($interest as $value) {
        $sql3 = "INSERT INTO INTEREST VALUES ('$name','$value')";
        $result3 = mysqli_query($conn, $sql3);
    }
}


$sql1 = "SELECT name FROM form WHERE name='$name'";
$re = mysqli_query($conn, $sql1);
$result2 = mysqli_fetch_assoc($re);


if ($result) {
    echo "inserted successfully";
    header('location:profile.php?uid=' . $result2['name'] . '');
} else {
    echo "Error: " . mysqli_error($conn);
}
