<?php
include("../includes/config.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login_page";

    $result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - email: " . $row["email"]. " - password: " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
    
}


?>