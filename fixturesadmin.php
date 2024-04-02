<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swimming Fixtures</title>
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

$stmt = $conn->prepare("SELECT * FROM tblfixtures");
$stmt->execute();

    echo "<table>";
    echo "<tr><th>FixtureID</th><th>Location</th><th>Date</th><th>Time</th></tr>";
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>" . $row["fixtureID"] . "</td>";
        echo "<td>" . $row["Location"] . "</td>";
        echo "<td>" . $row["Date"] . "</td>";
        echo "<td>" . $row["Time"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

?>

</body>
</html>
