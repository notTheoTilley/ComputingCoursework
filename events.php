<!DOCTYPE html>
<html>
    <head>
        <title>Add Events</title>
    </head>

    <body>
        <form action="postevents.php" method = "post">
            Event: <input type="text" name="EventName"><br>
            Distance: <input type="text" name="Distance"><br>
            Gender: <input type="text" name="Gender"><br>
            School Record: <input type="text" name="SchoolRecord"><br>
            <br>
            <input type="submit" value="Add Event">

            <a href="admin.php">
                <button>Back</button>
            </a>
        </form>
    </body>
</html>