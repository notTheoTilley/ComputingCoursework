<?php
include_once("connection.php"); //connects to database
array_map("htmlspecialchars", $_POST); //sanitisation
print_r($_POST);
//SQL statement
$stmt = $conn->prepare("INSERT INTO TblFixtures (fixtureID, Location, Date, Time) 
    VALUES (null,:Location,:Date,:Time)");

$stmt->bindParam(':Location', $_POST["location"]); //binding parameters
$stmt->bindParam(':Date', $_POST["date"]);
$stmt->bindParam(':Time', $_POST["time"]);
$stmt->execute();
$conn=null;

header('Location: admin.php'); //redirects back to admin page

?>