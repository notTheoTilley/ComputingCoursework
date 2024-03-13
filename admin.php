<!DOCTYPE html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <meta charset="UTF-9">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
    <script src="admin.js"></script>
</head>
<body>
    <header>
        Oundle School Swimming
    </header>
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
    <main>
        <h1>Admin Dashboard</h1>
                <div class="cards">
                    <div class="card">   
                        <h2>Card 1</h2>
                        <p>information in card 1</p>
                    </div>
                    <div class="card">
                        <h2>Card 2</h2>
                        <p>information on card 2</p>
                    </div>
                    <div class="card">
                        <h2>Card 3</h2>
                        <p>information on card 3</p>
                    </div>
                    <div class="card">
                        <h2>Card 4</h2>
                        <p>information on card 4</p>
                    </div>
                </div>
    </main>
    <footer>
        footer content
    </footer>
    <script src="admin.js"></script>
</body>
</html>