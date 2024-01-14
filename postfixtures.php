<?php
include_once("connection.php"); 
array_map("htmlspecialchars", $_POST);

$stmt = $conn->prepare("INSERT INTO TblFixtures (fixtureID,Event,Location,Date,Time)VALUES (null,:Event,:Location,:Date,:Time)");

$stmt->bindParam(':Event', $_POST["Event"]);
$stmt->bindParam(':Location', $_POST["Location"]);
$stmt->bindParam(':Date', $_POST["Date"]);
$stmt->bindParam(':Time', $_POST["Time"]);
$stmt->execute();
$conn=null;
