<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
CREATE TABLE TblUsers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Gender VARCHAR(1) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(20) NOT NULL,
House VARCHAR(20) NOT NULL,
Year INT(2) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

$stmt2 = $conn->prepare("DROP TABLE IF EXISTS tblfixtures;
CREATE TABLE tblfixtures 
(fixtureID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Event VARCHAR(20) NOT NULL,
Location VARCHAR(20) NOT NULL,
Date VARCHAR(20) NOT NULL,
Time VARCHAR(20) NOT NULL)");
$stmt2->execute();
$stmt2->closeCursor();
?>