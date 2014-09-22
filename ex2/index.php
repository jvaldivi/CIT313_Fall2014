<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once("classes/users.class.php");
include_once("classes/registered_user.class.php");
include_once("classes/admin_user.class.php");

$registered_user = new Registered_user('Regular User', 'jvaldivi');
$admin_user = new Admin_user('Administrator','Superman');

$registered_user->first_name = 'Jorge';
$registered_user->last_name = 'Valdi';
$registered_user->email_address = 'jvaldivi@iupui.edu';

echo "User Level: ".$registered_user->user_level."<br >";
echo "Registered User ID: ".$registered_user->user_id."<br >";
echo "Registered User Type: ".$registered_user->user_type."<br >";
echo "Registered First Name: ".$registered_user->first_name."<br >";
echo "Registered Last Name: ".$registered_user->last_name."<br >";
echo "Registered Email: ".$registered_user->email_address."<br >";


$admin_user->first_name = 'Clark';
$admin_user->last_name = 'Kent';
$admin_user->email_address = 'superman@iupui.edu';

echo '<hr />';
echo "User Level: ".$admin_user->user_level."<br >";
echo "Admin User ID: ".$admin_user->user_id."<br >";
echo "Admin User Type: ".$admin_user->user_type."<br >";
echo "Admin First Name: ".$admin_user->first_name."<br >";
echo "Admin Last Name: ".$admin_user->last_name."<br >";
echo "Admin Email: ".$admin_user->email_address."<br >";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Exercise 2 - Intro to OOP</title>
</head>

<body>

</body>
</html>
