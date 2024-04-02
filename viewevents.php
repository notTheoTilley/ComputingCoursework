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


<!-- <aside>
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
    </aside> -->


<?php
include_once ("navbar.html");
include_once "connection.php";

$stmt = $conn->prepare("SELECT * FROM tblevents");
$stmt->execute();

    echo "<table>";
    echo "<tr><th>EventID</th><th>EventName</th><th>Distance</th><th>Gender</th><th>SchoolRecord</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>" . $row["EventID"] . "</td>";
        echo "<td>" . $row["EventName"] . "</td>";
        echo "<td>" . $row["Distance"] . "</td>";
        echo "<td>" . $row["Gender"] . "</td>";
        echo "<td>" . $row["SchoolRecord"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

?>

</body>
</html>
