<?php
include_once("connection.php"); //connects to database
array_map("htmlspecialchars", $_POST);

$stmt = $conn->prepare("INSERT INTO tblfixturedetails (Location, EventName, Username)
    VALUES (:Location,:EventName,:Username)"); //SQL statement to send data

$stmt->bindParam(':Location', $_POST["Location"]); //binding parameters
$stmt->bindParam(':EventName', $_POST["EventName"]);
$stmt->bindParam(':Username', $_POST["Username"]);
$stmt->execute();  //sending
$conn=null;

header('Location: pupildoesfixture.php'); //redirects back to admin page

?>
