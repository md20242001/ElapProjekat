<?php
$pageTitle = "My PHP Website";
$currentDate = date("F j, Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1><?php echo $pageTitle; ?></h1>
    <p>Welcome to my PHP-powered webpage.</p>
</header>

<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>

<main>
    <section class="card">
        <h2>Hi there!</h2>
        <h3>Welcome to my website</h3>
        <p>
            This page was generated using PHP.
        </p>
        <p>
            Today's date is <strong><?php echo $currentDate; ?></strong>.
        </p>
    </section>

    <section class="card">
        <h2>Features</h2>
        <ul>
            <li>PHP dynamic content</li>
            <li>External CSS styling</li>
            <li>Responsive layout</li>
            <li>Clean modern design</li>
        </ul>
    </section>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> My PHP Website</p>
</footer>

</body>
</html>