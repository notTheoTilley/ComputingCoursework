<?php
session_start();
include_once("connection.php");
array_map("htmlspecialchars", $_POST);
print_r($_POST);
$stmt = $conn->prepare("SELECT * FROM tblusers WHERE Username = :username"); //SQL statement
$stmt->bindParam(':username', $_POST['Username']); //binding parameters
$stmt->execute();
if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $hashed = $row['Password'];
        $attempt = $_POST['Pword'];
        if (password_verify($attempt, $hashed)) {
            if ($row['Role'] == 1) {
                header('Location: admin.php'); //if role is 1 user is redirected to admin page
                exit(); // Stop further execution after redirection
            } elseif ($row['Role'] == 0) { //if role is 0 user is redirected to user page
                header('Location: main.html');
                exit(); // Stop further execution after redirection
            } else {
                // Handle other roles if needed
                // For now, redirect to login page
                header('Location: login.php');
                exit(); // Stop further execution after redirection
            }
        } else {
            $_SESSION["error"] = "User does not exist.";
            header('Location: login.php');
            exit(); // Stop further execution after redirection
        }
    }
} else {
    header('Location: login.php');
    $_SESSION["error"] = "Incorrect Password.";
    exit(); // Stop further execution after redirection
}
$conn = null;
?>
