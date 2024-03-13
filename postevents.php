<?php
include_once("connection.php"); 
array_map("htmlspecialchars", $_POST);

$stmt = $conn->prepare("INSERT INTO TblEvents (eventID, EventName, Distance, Gender, SchoolRecord)VALUES (null,:EventName,:Distance,:Gender,:SchoolRecord)");

$stmt->bindParam(':EventName', $_POST["EventName"]);
$stmt->bindParam(':Distance', $_POST["Distance"]);
$stmt->bindParam(':Gender', $_POST["Gender"]);
$stmt->bindParam(':SchoolRecord', $_POST["SchoolRecord"]);
$stmt->execute();
$conn=null;

header('Location: admin.php');

?>
