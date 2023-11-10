<!DOCTYPE html>
<html>
<head>
    <title>Add Users</title>
</head>
<body>

    <form action="addusers.php" method = "post">
        First Name: <input type="text" name="forename"><br>
        Last Name: <input type="text" name="surname"><br>
        Password: <input type="password" name="passwd"><br>
        House: <input type="text" name="house"><br>
        Year: <input type="text" name="year"><br>
        Gender: <select name="gender">
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Other</option>
                </select>
        <br>

        <input type="submit" value="Add User">
        <a href="login.php">
        <button>Login</button>
        </a>



</body>
</html>