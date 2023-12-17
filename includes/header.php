<?php
include './includes/config.php';

// about
$sql = "SELECT * FROM about_us WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $aboutUsData = $result->fetch_assoc();
} else {
    $aboutUsData = [];
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NGO</title>
    <link rel="stylesheet" href="./includes/header.css">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>

    <header class="continer-fluid">
        <!-- <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="ulleft">
                            <li>
                                <i class="far fa-envelope"></i>
                                <?=$aboutUsData['email']?>
                                <span>|</span>
                            </li>
                            <li>
                                <i class="fas fa-phone-volume"></i>
                                <?=$aboutUsData['contact']?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 folouws">

                        <ul class="ulright">
                            <li> <small>Follow Us </small>:</li>
                            <li>
                            <a href="<?=$aboutUsData['facebook']?>" target="_blank">
                                <i class="fab fa-facebook-square"></i>
                            </a>

                            </li>
                            <li>
                                <a href="<?=$aboutUsData['twitter']?>" target="_blank">
                                <i class="fab fa-twitter-square"></i></a>
                            </li>
                            <li>
                                <a href="<?=$aboutUsData['instagram']?>" target="_blank">
                                <i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="<?=$aboutUsData['linkedin']?>" target="_blank">
                                <i class="fab fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                        <a href="join.php" class="btn btn-sm btn-success">Join Us</a>
                        <a href="donate.php" class="btn btn-sm btn-default">Donate</a>
                    </div>
                </div>
            </div>
        </div> -->
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-lg-2 col-md-12 logo">
                        <a href="index.php" style="text-decoration:none">
                           <h1> <img class="logo" src="./includes/logo.png" alt="logo"></img></h1>
                            <a data-toggle="collapse" data-target="#menu" href="#menu"><i
                                    class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                        </a>

                    </div>
                    <div id="menu" class="col-lg-10 col-md-12 d-none d-lg-block nav-col">

                        <ul class="navbad">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about_us.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="impact.php">Impact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="donate.php">Donate</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="gallery.php">Gallery</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="upcoming-work.php">Upcoming Work</a>
                            </li>

                            <li>
                            <a href="join.php" class="nav-link">Join Us</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact_us.php">Contact US</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>