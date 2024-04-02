<?php
session_start();
include_once("connection.php");
array_map("htmlspecialchars", $_POST);
print_r($_POST);
$stmt = $conn->prepare("SELECT * FROM tblusers WHERE Username = :username");
$stmt->bindParam(':username', $_POST['Username']);
$stmt->execute();
if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $hashed = $row['Password'];
        $attempt = $_POST['Pword'];
        if (password_verify($attempt, $hashed)) {
            if ($row['Role'] == 1) {
                header('Location: admin.php');
                exit(); // Stop further execution after redirection
            } elseif ($row['Role'] == 0) {
                header('Location: main.php');
                exit(); // Stop further execution after redirection
            } else {
                // Handle other roles if needed
                // For now, redirect to login page
                header('Location: login.php');
                exit(); // Stop further execution after redirection
            }
        } else {
            $_SESSION["error"] = "Incorrect Password";
            header('Location: login.php');
            exit(); // Stop further execution after redirection
        }
    }
} else {
    header('Location: login.php');
    $_SESSION["error"] = "User does not exist.";
    exit(); // Stop further execution after redirection
}
$conn = null;
?>
