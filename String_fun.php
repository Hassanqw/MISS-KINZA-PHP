<?php
$str = "Hello My Name is Hassan";
echo str_word_count($str);
echo "<br>";
echo strlen($str);
echo "<br>";


$stdName = "Hassan Meo";
echo strrev($stdName);
echo "<br>";

$Name = "Hassan";
echo str_replace("Hassan" , "Ahmed" ,$Name);
echo "<br>";

echo str_repeat($Name , 20);

echo "<br>";
$empName = "Muhammad Hassan";
echo strtolower($empName);
echo "<br>";
echo strtoupper($empName);

echo "<br>";
$PHPEmail = "Hassanmeo548@gmail.com";
$DBEmail = "Hassanmeo548@gmail.com";
echo strcmp($PHPEmail , $DBEmail);
echo "<br>";


$url = "https/MISS KINZA PHP/String_fun.php";
$urlArray = explode("/" , $url);
print_r($urlArray);
echo "<br>";
$lastArrayValue = $urlArray[count($urlArray) -1];
echo $lastArrayValue
?>