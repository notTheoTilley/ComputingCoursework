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

<?php
include_once "connection.php";

$sql = "SELECT * FROM tblFixtures";
$result = $conn->query($sql);

//if ($result->num_rows > 0) {
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
//} else {
//    echo "No fixtures found";
//}


?>

</body>
</html>
