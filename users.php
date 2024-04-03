<!DOCTYPE html>
<html>
<head>
    <title>Add Users</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- imports navbar javascript -->
    <script src="adminnavbar.js"></script>

</head>
<body>
    <!-- imports navbar -->
    <div id="navbar"></div>
    
    <!-- creates form to add user -->
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
        Role: <select name="role">
            <option value="0">Default</option>
        <br>

        <input type="submit" value="Add User">
</body>
</html>