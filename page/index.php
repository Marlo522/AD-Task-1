<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Kdrama</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

    <?php
// Array containing genres and Kdramas
$kdramas = [
    "Action" => [
        ["title" => "Vagabond", "image" => "vagabond.jpg"],
        ["title" => "Weak Hero Class 2", "image" => "weak_hero_class.jpg"],
        ["title" => "Black Knight", "image" => "black_knight.jpg"],
        ["title" => "Study Group", "image" => "study_group.jpg"],
        ["title" => "Bloodhounds", "image" => "bloodhounds.jpg"]
    ],
    "Romance" => [
        ["title" => "Crash Landing on You", "image" => "cloy.jpg"],
        ["title" => "True Beauty", "image" => "true_beauty.jpg"],
        ["title" => "Backstreet Rookie", "image" => "backstreet_rookie.jpg"],
        ["title" => "What's Wrong with Secretary Kim", "image" => "secretary_kim.jpg"],
        ["title" => "Hometown Cha-Cha-Cha", "image" => "hometown_chachacha.jpg"]
    ],
    "Medical" => [
        ["title" => "Hospital Playlist", "image" => "hospital_playlist.jpg"],
        ["title" => "Dr. Romantic", "image" => "dr_romantic.jpg"],
        ["title" => "Doctor Stranger", "image" => "doctor_stranger.jpg"],
        ["title" => "Resident Playbook", "image" => "resident_playbook.jpg"],
        ["title" => "Trauma Code", "image" => "trauma_code.jpg"]
    ],
    "Comedy" => [
        ["title" => "Welcome to Waikiki", "image" => "welcome_waikiki.jpg"],
        ["title" => "Strong Woman Do Bong Soon", "image" => "strong_woman_dobongsoon.jpg"],
        ["title" => "Chicken Nugget", "image" => "chicken_nugget.jpg"],
        ["title" => "Prison Playbook", "image" => "prison_playbook.jpg"],
        ["title" => "Gaus Electronics", "image" => "gaus_electronics.jpg"]
    ],
    "Thriller" => [
        ["title" => "Happiness", "image" => "happiness.jpg"],
        ["title" => "Sweet Home", "image" => "sweet_home.jpg"],
        ["title" => "Taxi Driver", "image" => "taxi_driver.jpg"],
        ["title" => "D.P", "image" => "dp.jpg"],
        ["title" => "Vincenzo", "image" => "Vincenzo.jpg"]
    ]
];
?>

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

<div class="genres">
    <button onclick="filterKdramas('All')">All</button>
    <?php foreach (array_keys($kdramas) as $genre): ?>
        <button onclick="filterKdramas('<?php echo $genre; ?>')"><?php echo $genre; ?></button>
    <?php endforeach; ?>
</div>

</body>
</html>