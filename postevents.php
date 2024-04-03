<?php
include_once("connection.php"); //connects to database
array_map("htmlspecialchars", $_POST);

$stmt = $conn->prepare("INSERT INTO TblEvents (eventID, EventName, Distance, Gender, SchoolRecord)
    VALUES (null,:EventName,:Distance,:Gender,:SchoolRecord)"); //SQL statement to send data

$stmt->bindParam(':EventName', $_POST["EventName"]); //binding parameters
$stmt->bindParam(':Distance', $_POST["Distance"]);
$stmt->bindParam(':Gender', $_POST["Gender"]);
$stmt->bindParam(':SchoolRecord', $_POST["SchoolRecord"]);
$stmt->execute();  //sending
$conn=null;

header('Location: admin.php'); //redirects back to admin page

?>
