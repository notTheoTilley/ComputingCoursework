<!DOCTYPE html>
<html>
    <head>
        <title>Add Events</title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="adminnavbar.js"></script>
    </head>

    <body>

        <!-- adds navbar -->
        <div id="navbar"></div>

        <!-- form to add events -->
        <form action="postevents.php" method = "post">
            Event: <input type="text" name="EventName"><br>
            Distance: <input type="text" name="Distance"><br>
            Gender: <input type="text" name="Gender"><br>
            School Record: <input type="text" name="SchoolRecord"><br>
            <br>
            <input type="submit" value="Add Event">
            </a>
        </form>
    </body>
</html>