<!DOCTYPE html>
<html>
<head>

<title>PHP Coding Test</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>PHP Coding Test</h1>

<h2>

</h2>
<?php

include ('/database/database.php');


$name    = $_POST['name'];
$email   = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO tbl_message (name, message, email) VALUES ('".$name."', '".$message."', '".$email."')";

if (mysqli_query($con, $sql)) { echo "New record created successfully!"; } 
else {  echo "Error: " . $sql . "<br>" . mysqli_error($con); }
	




?>
</p>


</body>
</html>

