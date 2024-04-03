<!DOCTYPE html>
<html>
<head>
    <title>Add Fixtures</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="adminnavbar.js"></script>
</head>
<body>
    <!-- creates form to add fixture -->
    <div id="navbar"></div>
    <form action="postfixtures.php" method = "post">
        Location: <input type="text" name="location"><br>
        Date: <input type="text" name="date"><br>
        Time: <input type="text" name="time"><br>
        <br>

        <input type="submit" value="Add Fixture">
        <a href="postfixtures.php">

    </form>

</body>
</html>


