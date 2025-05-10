<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <title>Kdrama</title>
</head>
<body>
    <header class="header">
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="Kdrama.php">Kdramas</a></li>
            </ul>
        </nav>
    </header>

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

    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/assets/img/black_knight.jpg" class="d-block w-100" alt="Black Knight">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Black Knight</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/img/resident_playbook.jpg" class="d-block w-100" alt="ResidentPlaybook">
                <div class="carousel-caption d-none d-md-block">
                    <h5>ResidentPlaybook</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/assets/img/undercover_highschool.jpg" class="d-block w-100" alt="UnderCoverHighschool">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Undercover High School</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>
</html>