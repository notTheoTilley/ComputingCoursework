<!DOCTYPE html>
<html>
<head>
    <title>Add Fixtures</title>
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

    <form action="postfixtures.php" method = "post">
        Event: <input type="text" name="event"><br>
        Location: <input type="text" name="location"><br>
        Date: <input type="text" name="date"><br>
        Time: <input type="text" name="time"><br>
        <br>

        <input type="submit" value="Add Fixture">
        <a href="admin.php">
        <button>Back</button>
        </a>



</body>
</html>