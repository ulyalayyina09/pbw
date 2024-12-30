<?php
session_start();

include "koneksi.php";  

//check jika belum ada user yang login arahkan ke halaman login
if (!isset($_SESSION['username'])) { 
	header("location:login.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harry Potter Fanbase</title>
    <link rel="shortcut icon" href="assets/img/icon.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        body {
            background-color: #000;
            background-image: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                                radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                                radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
            background-size: 5px 5px, 10px 10px, 15px 15px;
            background-position: 0 0, 50px 50px, 100px 100px;
            background-color: #0c0f2c;
            color: #c9c9c9; 
            padding-top: 56px; 
        }

        .nav-item {
        padding-right: 20px;
        }

        .navbar-brand {
            margin-left: 15px; 
        }


        .header {
            background-image: url(assets/img/bannerharrypotter.jpg);
            background-size: contain;
            background-position: center;
            color: white;
            padding: 4rem 2rem;
            text-align: center;
            height: 20vh;
        }
        .header h1 {
            font-family: 'Merienda', cursive;
        }
        img {
            width: 200px;
            height: 200px;
        }

        .light-mode {
            background-color: #000;
            background-image: radial-gradient(circle, rgb(247, 255, 131) 1px, transparent 1px),
                                radial-gradient(circle, rgb(247, 255, 131) 1px, transparent 1px),
                                radial-gradient(circle, rgb(247, 255, 131) 1px, transparent 1px);
            background-size: 5px 5px, 10px 10px, 15px 15px;
            background-position: 0 0, 50px 50px, 100px 100px;
            background-color: #d7d7d7;
            color: #000000;
        }
        

    </style>
</head>
<body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top bg-white">
    <div class="container">
        <a class="navbar-brand" target="_blank" href=".">Harry Potter Fanbase</a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=article">Article</a>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-danger fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['username']?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li> 
                </ul>
            </li> 
        </ul>
        </div>
    </div>
    </nav>
    <!-- nav end -->
    <!-- content begin -->
<section id="content" class="p-5">
    <div class="container">
        <?php
        if(isset($_GET['page'])){
        ?>
            <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle"><?= ucfirst($_GET['page'])?></h4>
            <?php
            include($_GET['page'].".php");
        }else{
        ?>
            <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle">Dashboard</h4>
            <?php
            include("dashboard.php");
        }
        ?>
    </div>
</section>
<!-- content end -->
    <!-- footer begin -->
    <section id="me" class="my-5" style="background-color:lightblue; color: #000;">
        <h2 class="text-center mb-4">About Me</h2>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 col-12 mb-4">
                    <img src="assets/img/lily.jpeg" class="img-fluid rounded-circle mx-auto d-block" alt="Profile Photo">
                </div>
                <div class="col-md-8 col-12" style=color:#000;>
                    <p>A11.2023.14946</p>
                    <h2>ULYA LAYYINA</h2>
                    <p>Program Studi Teknik Informatika</p>
                    <a href="https://dinus.ac.id/" style="color:black; ">Universitas Dian Nuswantoro</a>
                </div>
            </div>
        </div>
    </section>
    <!-- footer end -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
    ></script>
</body>
</html>
