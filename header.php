<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Avneet kaur</title>
</head>
<body>
    <header>
        <h1>My Website</h1>
        <nav>
            <ul>
                <li class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>"><a href="index.php">Home</a></li>
                <li class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>"><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>
