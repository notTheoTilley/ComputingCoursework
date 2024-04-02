<?php

    //hard codes admin user
// $adminpassword = password_hash('%_admin%', PASSWORD_DEFAULT);
// $stmt = $conn->prepare("INSERT INTO tblusers(UserID, Gender, Username, Surname, Forename, Password, House, Year)VALUES (NULL, 'admin', '$adminpassword', 'admin', 0)");
// $stmt->execute();
// $stmt->closeCursor();


include_once("connection.php");
//prepare and bind parameters
$stmt = $conn->prepare("INSERT INTO tblusers (UserID, Gender, Username, Surname, Forename, Password, House, Year) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sss", $UserID, $Gender, $Username, $Surname, $Forename, $Password, $House, $Year);


//set parameters and execute
$UserID = "99999";
$Gender = "NA";
$Username = "ADMIN";
$Surname = "MIN";
$Forename = "AD";
$Password = "oundleschoolswimming";
$House = "NA";
$Year = "NA";
$stmt->execute();

echo("Admin user created");
$stmt->close();
$conn->close();

?>