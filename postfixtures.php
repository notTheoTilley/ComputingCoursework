<?php
include_once("connection.php"); 
array_map("htmlspecialchars", $_POST);
print_r($_POST);
$stmt = $conn->prepare("INSERT INTO TblFixtures (fixtureID, Location, Date, Time)VALUES (null,:Location,:Date,:Time)");

$stmt->bindParam(':Location', $_POST["location"]);
$stmt->bindParam(':Date', $_POST["date"]);
$stmt->bindParam(':Time', $_POST["time"]);
$stmt->execute();
$conn=null;

// header('Location: admin.php');

?>