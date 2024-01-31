<?php
include("../includes/config.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $password = $_POST['password'];

$qry = "INSERT INTO login_page (id, name, date, email, password) VALUES(' ', '$name', '$date', '$email', '$password')";

if($conn -> query($qry) == TRUE){
    echo "<script>alert('LOGIN SUCCESSFULLY!');</script>";
    echo "<script>window.location.href='../login.php';</script>";
}
else{
    echo "Error :" .$qry. "<br>" . $conn -> error;
}

}
else{
    echo "error";
}

?>