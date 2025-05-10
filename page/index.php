<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Kdrama</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

    <header class="header">
    <nav>
        <ul class="nav-links">
            <li><a href="/index.php">Home</a></li>
            <li><a href="/page/index.php">Kdramas</a></li>
        </ul>
    </nav>
    <div class="day">
        <?php
        $day = date('l');
        if ($day) {
            echo "<p>Today is: $day</p>";
        } else {
            echo "<p>Welcome!</p>";
        }
        ?>
    </div>
</header>

</body>
</html>