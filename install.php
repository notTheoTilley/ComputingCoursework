<?php
include_once("connection.php");
//creates tblusers
$stmt = $conn->prepare("DROP TABLE IF EXISTS tblusers;
CREATE TABLE tblusers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Gender VARCHAR(1) NOT NULL,
Username VARCHAR(30) NOT NULL,
Surname VARCHAR(20) NOT NULL,
Forename VARCHAR(20) NOT NULL,
Password VARCHAR(200) NOT NULL,
House VARCHAR(20) NOT NULL,
Year INT(2) NOT NULL,
Role INT(1) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();
echo("User table created. ");

//creates tblfixtures
$stmt2 = $conn->prepare("DROP TABLE IF EXISTS tblfixtures;
CREATE TABLE tblfixtures 
(fixtureID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Location VARCHAR(20) NOT NULL,
Date VARCHAR(20) NOT NULL,
Time VARCHAR(20) NOT NULL)");
$stmt2->execute();
$stmt2->closeCursor();
echo("Fixtures table created. ");

//creates tblevents
$stmt3 = $conn->prepare("DROP TABLE IF EXISTS tblevents;
CREATE TABLE tblevents
(eventID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
EventName VARCHAR(20) NOT NULL,
Distance VARCHAR(4) NOT NULL,
Gender VARCHAR(1) NOT NULL,
SchoolRecord INT(20) NOT NULL)");
$stmt3->execute();
$stmt3->closeCursor();
echo("Events table created. ");

//creates tblfixturedetails
$stmt4 = $conn->prepare("DROP TABLE IF EXISTS tblfixturedetails;
CREATE TABLE tblfixturedetails
(Location VARCHAR(20),
EventName VARCHAR(20),
Username VARCHAR(20),
PRIMARY KEY(Username, Location))");
$stmt4->execute();
$stmt4->closeCursor();
echo("Link table created. ");

//hard codes admin user
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception

    $adminpassword = password_hash('%_admin%', PASSWORD_DEFAULT); //hashes admin password

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO tblusers (UserID, Gender, Username, Surname, Forename, Password, House, Year, Role)
    VALUES ('1', 'o', 'ADMIN', 'ADMIN', 'ADMIN', '$adminpassword', 'ADMIN', '0', '1')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
?>