<?php 

$con = @new mysqli('localhost', 'root', '', 'bluechip');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
} 





