<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Paraiso Ni Ronin - Home</title>
    <style>
        /* Custom Navbar Styling */
        nav.bg-dark {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
        }
        .navbar-brand span {
            font-weight: bold;
            color: #f0db4f;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="assets/logo1.png" alt="Resort Logo" width="30" height="30" class="d-inline-block align-top">
        <span>Paraiso Ni Ronin</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <?php if (!isset($_SESSION['user'])): ?>
                <!-- Guest Links -->
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="register.php">Register Staffs</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
            <?php elseif (isset($_SESSION['user']->name) && $_SESSION['user']->name == 'admin'): ?>
                <!-- Admin Links -->
                <li class="nav-item"><a class="nav-link" href="managehall.php">Manage Providers</a></li>
                <li class="nav-item"><a class="nav-link" href="admin.php">Manage Booking</a></li>
                <li class="nav-item"><a class="nav-link" href="p_products.php">Manage Products</a></li>
                <li class="nav-item ml-auto"><a class="nav-link" href="logout.php">Log Out</a></li>
            <?php else: ?>
                <!-- Regular User Links -->
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Service</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Rooms</a></li>
                <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contacts</a></li>
                <li class="nav-item ml-auto"><a class="nav-link" href="logout.php">Log Out</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<!-- Main Content Padding -->
<div style="padding-top: 80px;"></div>

<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
