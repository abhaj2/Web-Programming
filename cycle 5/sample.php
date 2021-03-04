<html>
<body>
<?php
$servername = "localhost";
$username = "20mca001";
$password = "2251";
$dbname = "20mca001";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



$sql = "INSERT INTO `student`(`id`, `name`, `mark`) VALUES ('1','doe','50.2') ";
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>