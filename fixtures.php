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
    
    <!-- imports navbar javascript -->
    <script src="usernavbar.js"></script>

</head>
<body>

<!-- imports navbar -->
<div id="navbar"></div>

<?php
include_once "connection.php"; //connects to database

$sql = "SELECT * FROM tblFixtures"; //SQL statement to fetch from database
$result = $conn->query($sql);

    //displays data in table
    echo "<table>";
    echo "<tr><th>Location</th><th>Date</th><th>Time</th></tr>";

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["Location"] . "</td>";
        echo "<td>" . $row["Date"] . "</td>";
        echo "<td>" . $row["Time"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
?>

</body>
</html>
