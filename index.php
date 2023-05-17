<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];

  // all value not empty
  if (!empty($firstName) && !empty($lastName) && !empty($email)) {
  // database connection
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "win";
$conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // insert data 
    $sql = "INSERT INTO users (firstName, lastName, email) VALUES ('$firstName', '$lastName', '$email')";
    if ($conn->query($sql) === TRUE) {
      echo "GOOD LUKE";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

   
    $conn->close();
  } else {
    echo "EMPTY VALUE";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regester</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="index.php" method="POST">
  <label for="firstName"> FIRST NAME </label>
  <input type="text" name="firstName" id="firstName">

  <label for="lastName">LAST NAME </label>
  <input type="text" name="lastName" id="lastName">

  <label for="email">EMAIL</label>
  <input type="email" name="email" id="email">

  <input type="submit" value="SUBMIT">
</form>


<a href="win.php">WINER??</a>  




</body>
</html>