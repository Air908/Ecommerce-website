<?php 

$user = 'root';
$password = 'root';
$db = 'test';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$conn = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);
if(!$success){
    die("Connection failed: " . mysqli_connect_error());
}
?>