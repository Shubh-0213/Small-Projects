<?php
include("../includes/config.php");

if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT password FROM login_page where `email` = '$email'";

  $result = $conn->query($sql);
  // print_r($result->num_rows);

  if ($result->num_rows > 0) {
    foreach($result as $r){
      if ($r['password'] === $password){
        echo "<script>alert('Login Successful!'); window.location.href='../login.php'</script>";
      }
      else{
        echo "<script>alert('Invalid Credentials!'); window.location.href='../login.php'</script>";
      }
    }
  }
  else{
    echo "<script>alert('Email not registered!'); window.location.href='../login.php'</script>";
  }
    
}


?>