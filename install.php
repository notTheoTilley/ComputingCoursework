<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Gender VARCHAR(1) NOT NULL,
Username VARCHAR(30) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(200) NOT NULL,
House VARCHAR(20) NOT NULL,
Year INT(2) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();
echo("User table created.");

$stmt2 = $conn->prepare("DROP TABLE IF EXISTS tblfixtures;
CREATE TABLE tblfixtures 
(fixtureID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Location VARCHAR(20) NOT NULL,
Date VARCHAR(20) NOT NULL,
Time VARCHAR(20) NOT NULL)");
$stmt2->execute();
$stmt2->closeCursor();
echo("Fixtures table created.");

$stmt3 = $conn->prepare("DROP TABLE IF EXISTS tblevents;
CREATE TABLE tblevents
(eventID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
EventName VARCHAR(20) NOT NULL,
Distance VARCHAR(20) NOT NULL,
Gender VARCHAR(20) NOT NULL,
SchoolRecord INT(20) NOT NULL)");
$stmt3->execute();
$stmt3->closeCursor();
echo("Events table created.");
?>

