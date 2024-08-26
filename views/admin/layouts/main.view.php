<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <link rel="stylesheet" type="text/css" href="./styles/custom.css" />
    <link rel="stylesheet" type="text/css" href="./styles/admin.css" />
    <title>CMS Project</title>
</head>

<body>
    <header>
        <h1>
            <a href="index.php">CMS: Admin</a>
        </h1>
        <p>A custom made CMS Admin Panel</p>
        <nav>

        </nav>
    </header>
    <main>
        <?php echo $contents; ?>
    </main>
    <footer>
        <p>Content Management System. &copy;pushkqr Aug '24</p>
    </footer>
</body>

</html>