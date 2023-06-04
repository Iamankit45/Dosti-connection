<?php

echo var_dump($_POST);

$arr = array("one" => 'apple', "two" => "mango", "three" => "orange");

// echo "<br>" . var_dump($arr["one"]);

// echo   "<br>" . var_dump($arr); 

// $interest = array("choices" => array("Music", "Sports", "Dance"));

// echo  "<br>" . var_dump($interest);

// echo "<br>" . $arr["four"];

// echo "<br>" . $arr["two"];

if($arr["four"])
{
    echo "<br>" . $arr["four"];
}
else if($arr["two"])
{
    echo "<br>" . ($arr["two"]);
}

?>