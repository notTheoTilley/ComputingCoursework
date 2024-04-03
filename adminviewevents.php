<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <!-- table css -->
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
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="adminnavbar.js"></script>
</head>

<body>
<!-- adds navbar -->
<div id="navbar"></div>

<?php
include_once "connection.php"; //connects to database

$stmt = $conn->prepare("SELECT * FROM tblevents"); //fetches from database
$stmt->execute();

    //creates and displays data in a table
    echo "<table>";
    echo "<tr><th>EventID</th><th>EventName</th><th>Distance</th><th>Gender</th><th>SchoolRecord</th></tr>";

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>" . $row["eventID"] . "</td>";
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
