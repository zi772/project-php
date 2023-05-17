<?php
// database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "win";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// number of redister
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "number of redister" . $result->num_rows . " user";

//select randome winer
if ($result->num_rows > 0) {
  $random_row = rand(1, $result->num_rows);
  $sql = "SELECT * FROM users LIMIT $random_row, 1";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  echo "<br><br>";
  echo "the winer is " . $row["firstName"] . " " . $row["lastName"];
}


$conn->close();
?>