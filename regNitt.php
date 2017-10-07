<?php
$knowAbout = $_POST['knowAbout'];
$link= $_POST['link'];

$localhost = "localhost";
$user = "root";
$password = "shiva@123";
$dbname = "ecell";

$conn = mysqli_connect($localhost, $user, $password, $dbname)
or die('Error connecting to MySql Database');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = $conn->prepare("INSERT INTO nittEc (know_about, link)VALUES (?, ?)");
$query->bind_param("ss", $knowAbout, $link);
$query->execute();

$query->close();
$conn->close();
?>
