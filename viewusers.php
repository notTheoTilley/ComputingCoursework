<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
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


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swimming";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tblUsers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>UserID</th><th>Gender</th><th>Surname</th><th>Forename</th><th>Password</th><th>House</th><th>Year</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["UserID"] . "</td>";
        echo "<td>" . $row["Gender"] . "</td>";
        echo "<td>" . $row["Surname"] . "</td>";
        echo "<td>" . $row["Forename"] . "</td>";
        echo "<td>" . $row["Password"] . "</td>";
        echo "<td>" . $row["House"] . "</td>";
        echo "<td>" . $row["Year"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No fixtures found";
}

$conn->close();
?>

</body>
</html>
