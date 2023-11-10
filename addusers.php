<?php
include_once("connection.php"); 
array_map("htmlspecialchars", $_POST);

$stmt = $conn->prepare("INSERT INTO TblUsers (UserID,Gender,Surname,Forename,Password,House,Year)VALUES (null,:gender,:surname,:forename,:password,:house,:year)");

$stmt->bindParam(':forename', $_POST["forename"]);
$stmt->bindParam(':surname', $_POST["surname"]);
$stmt->bindParam(':house', $_POST["house"]);
$stmt->bindParam(':year', $_POST["year"]);
$stmt->bindParam(':password', $_POST["passwd"]);
$stmt->bindParam(':gender', $_POST["gender"]);
$stmt->execute();
$conn=null;
