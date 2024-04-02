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

include_once "connection.php";

$stmt = $conn->prepare("SELECT * FROM tblusers");
$stmt->execute();

    echo "<table>";
    echo "<tr><th>UserID</th><th>Username</th><th>Gender</th><th>Surname</th><th>Forename</th><th>Password</th><th>House</th><th>Year</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>" . $row["UserID"] . "</td>";
        echo "<td>" . $row["Username"] . "</td>";
        echo "<td>" . $row["Gender"] . "</td>";
        echo "<td>" . $row["Surname"] . "</td>";
        echo "<td>" . $row["Forename"] . "</td>";
        echo "<td>" . $row["Password"] . "</td>";
        echo "<td>" . $row["House"] . "</td>";
        echo "<td>" . $row["Year"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

?>

</body>
</html>
