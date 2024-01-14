<!DOCTYPE html>
<html>
<head>
    <title>Add Users</title>
</head>
<body>

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
        <a href="admin.php">
        <button>return</button>
        </a>



</body>
</html>