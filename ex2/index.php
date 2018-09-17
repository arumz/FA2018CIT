<?php
include_once('classes/user.class.php');
include_once('classes/admin.class.php');
include_once('classes/registered_user.class.php');

$newUser = new Registered_User('User','ajroembk');
$newUser->first_name = 'Andrew';
$newUser->last_name = 'Roembke';
$newUser->email_address = 'ajroembk@iu.edu';

$newAdmin = new Admin('Administrator','jsmith');
$newAdmin->first_name = 'Joe';
$newAdmin->last_name = 'Smith';
$newAdmin->email_address = 'joesmith@yahoo.com';



echo "User Level: ".$newUser->user_level . "<br>";
echo "Registered User ID: ".$newUser->user_id . "<br>";
echo "Registered User Type: ".$newUser->user_type . "<br>";
echo "Registered First Name: ".$newUser->first_name . "<br>";
echo "Registered Last Name: ".$newUser->last_name . "<br>";
echo "Registered Email: ".$newUser->email_address . "<br><hr>";

echo "User Level: ".$newAdmin->user_level . "<br>";
echo "Admin User ID: ".$newAdmin->user_id . "<br>";
echo "Admin User Type: ".$newAdmin->user_type . "<br>";
echo "Admin First Name: ".$newAdmin->first_name . "<br>";
echo "Admin Last Name: ".$newAdmin->last_name . "<br>";
echo "Admin Email: ".$newAdmin->email_address . "<br>";










?>
