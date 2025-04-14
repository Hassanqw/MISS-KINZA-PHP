<?php 
$stdName = "Hassan";
$stdAge = 18;
$stdEmail = "Hassanmeo548@gmail.com";
$stdCity = "Karachi";
echo $stdEmail . $stdCity; 
echo "My name is " . $stdName . "My email is " . $stdEmail;
?>
<h1><?php echo $stdName?></h1>
<h1><?php echo $stdAge?></h1>
<h1><?php echo $stdEmail?></h1>
<h1><?php echo $stdCity?></h1>
<?php 
$empName = "Isha";
$empAge = "18";
echo "<h1>$empName</h1>";
echo '<h1>$empName</h1>';
print "<h1>$empName</h1>";
print '<h1>$empName</h1>';

// diff b/w echo and print 
echo "<h1>" .$empName , $empAge . "</h1>";
echo '<h1>' .$empName , $empAge . '</h1>';

// Print "<h1>" .$empName , $empAge . "</h1>";
// Print '<h1>' .$empName , $empAge . '</h1>';
?>
