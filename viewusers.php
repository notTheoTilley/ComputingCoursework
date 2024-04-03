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

    <!-- imports admin navbar javascript -->
    <script src="adminnavbar.js"></script>
</head>
<body>
    
    <!-- imports navbar -->
    <div id="navbar"></div>

<?php
include_once "connection.php"; //connects to database

$stmt = $conn->prepare("SELECT * FROM tblusers"); //SQL statement to fetch data
$stmt->execute();

    //displays data in a table
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
