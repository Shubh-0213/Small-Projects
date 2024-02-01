<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'small_projects';

$conn = new mysqli($host, $user, $pass, $db);

if($conn -> connect_error){
    $connect_error = $conn -> connect_error;
    echo $connect_error;
}


?>