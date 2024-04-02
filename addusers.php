<?php
include_once("connection.php"); 
array_map("htmlspecialchars", $_POST);
$hashed_password = password_hash($_POST["passwd"], PASSWORD_DEFAULT);
$username = $_POST["surname"] . "." . substr($_POST["forename"],0,1);

echo $username;

$stmt = $conn->prepare("INSERT INTO TblUsers (UserID,Gender, Username, Surname,Forename,Password,House,Year, Role)VALUES 
    (null,:gender, :username, :surname,:forename,:password,:house,:year, :role)");

$stmt->bindParam(':forename', $_POST["forename"]);
$stmt->bindParam(':surname', $_POST["surname"]);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':house', $_POST["house"]);
$stmt->bindParam(':year', $_POST["year"]);
$stmt->bindParam(':password', $hashed_password);
$stmt->bindParam(':gender', $_POST["gender"]); 
$stmt->bindParam(':role', $_POST["role"]);
$stmt->execute();
$conn=null;

header('Location: admin.php');

?>