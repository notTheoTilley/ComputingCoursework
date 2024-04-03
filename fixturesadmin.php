<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swimming Fixtures</title>

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

    <!-- imports navbar javascript -->
    <script src="adminnavbar.js"></script>
</head>
<body>

    <!-- imports navbar -->
    <div id="navbar"></div>

<?php

include_once "connection.php"; //connects to the database

$stmt = $conn->prepare("SELECT * FROM tblfixtures"); //SQL statement to fetch data from database
$stmt->execute();

    //displays data in a table
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
