<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicor Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="../view/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../view/css/animate.css">

    <link rel="stylesheet" href="../view/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../view/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../view/css/magnific-popup.css">

    <link rel="stylesheet" href="../view/css/aos.css">

    <link rel="stylesheet" href="../view/css/ionicons.min.css">

    <link rel="stylesheet" href="../view/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../view/css/jquery.timepicker.css">

    <link rel="stylesheet" href="../view/css/flaticon.css">
    <link rel="stylesheet" href="../view/css/icomoon.css">
    <link rel="stylesheet" href="../view/css/style.css">
</head>

<body class="goto-here">
    <div class="py-1 bg-black">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">+ 1235 2355 98</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">youremail@email.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Chicor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?act=shop">Shop</a></li>
                    <li class="nav-item"><a href="index.php?act=about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="index.php?act=blog" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="index.php?act=contact" class="nav-link">Contact</a></li>
                    <!-- <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li> -->
                    <?php
                    if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                    ?>
                        <li class="nav-item"><a class="nav-link" href="">Xin chào, <?= $ho_ten ?></a></li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item"><a href="index.php?act=dangnhapview" class="nav-link add-to-cart"><button style="background-color: #c2a942; border-radius: 10px; color: while; font-weight: 600;">#Đăng
                                    nhập</button></a></li>
                        <li class="nav-item"><a href="index.php?act=dangkyview" class="nav-link add-to-cart"><button style="background-color: #c2a942; border-radius: 10px; color: while; font-weight: 600;">#Đăng
                                    ký</button></a></li>
                    <?php    } ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->