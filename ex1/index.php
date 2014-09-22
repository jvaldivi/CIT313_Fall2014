<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
<title> CIT 31300 - Ex1 Jorge</title>
</head>
<body>
<?php
include('includes/functions.inc.php');
$myArray = array("myName" => "Jorge",
"myColor" => "Black","myMovie" => "Gladiator",
"myBook" => "No book","mySite"=>"google.com");


echo "<h1>".$myArray["myName"]."</h1>";

  
myfunction();
 
?>

	


</body>
</html>
