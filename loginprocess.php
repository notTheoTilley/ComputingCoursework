<?php
session_start();
include_once ("connection.php");
array_map("htmlspecialchars", $_POST);
print_r($_POST);
$stmt = $conn->prepare("SELECT * FROM tblusers WHERE Username =:username ;" );
$stmt->bindParam(':username', $_POST['Username']);
$stmt->execute();
if ($stmt->rowCount() > 0){
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{ 
    $hashed= $row['Password'];
    $attempt= $_POST['Pword'];
    if(password_verify($attempt,$hashed)){
        
        echo("fhdslfk");
        
        header('Location: main.php');
    }else{
        echo("ifdjof");
        $_SESSION["error"]="Incorrect Password";
        header('Location: login.php');
    }
}
}else{
header('Location: login.php');
echo("User does not exist.");
$_SESSION["error"]="User does not exist.";
}
$conn=null;
?>