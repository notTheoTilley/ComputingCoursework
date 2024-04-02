<!DOCTYPE html>
<html>
<head>
    <title>Add Users</title>
</head>
<body>

<!-- page references -->
    <aside>
        <button id="sidebar-toggle"></button>
        <nav>
            <ul>
                <li><a href="admin.php">Dashboard</a><li>
                <li><a href="users.php">Manage Users</a><li>
                <li><a href="addfixtures.php">Manage Fixtures</a><li>
                <li><a href="viewusers.php">View Users</a><li>
                <li><a href="fixturesadmin.php">View Fixtures</a><li>
            </ul>
        </nav>
    </aside>

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