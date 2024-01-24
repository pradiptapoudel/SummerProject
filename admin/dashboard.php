<?php
    require('inc/essentials.php');
    adminLogin();
    session_regenerate_id('index.php');
    ?>
    

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, intial scale=1.0">
        <title>Admin Panel</title>
        <link rel="stylesheet" href="../css/login.css">
        <link rel="preconnet" href="http://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet"href="css/common.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
    <body class='bg-light'>
        <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
            <h3 class="mb-0 h-font">Archana Stores</h3>
            <a href="logout.php" class="btn btn-outline-light btn-sm">LogOut</a>
        </div>
        <div class="col-lg-2 bg-white border-top border-3 border-secondary" id="dashboard-menu">
            <nav class="navbar navbar-expand-lg navbar-dark rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2">ADMIN PANEL</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/summerproject/goldstar.php">Goldstar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/summerproject/caliber.php">Caliber</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://localhost/summerproject/blackhorse.php">BlackHorse</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin_settings.php">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </body>