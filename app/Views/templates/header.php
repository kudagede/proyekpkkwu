<!DOCTYPE html>
<html lang="en">

<head>
    <title>D'House</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/assets/css/animate.css">

    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">


    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>

    <div id="colorlib-page">
        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
        <aside id="colorlib-aside" role="complementary" class="js-fullheight">

            <h1 id="colorlib-logo" class="mb-4 mb-md-5"><a href="<?= base_url("") ?>" style="background-image: url(/assets/images/bg_1.jpg);">D'House</a></h1>
            <nav id="colorlib-main-menu" role="navigation">
                <ul>
                    <li class="<?= ($halaman_aktif == "home") ? "colorlib-active" : "" ?>"><a href="<?= base_url("") ?>">Home</a></li>
                    <li class="<?= ($halaman_aktif == "gallery") ? "colorlib-active" : "" ?>"><a href="<?= base_url("/home/gallery") ?>">Gallery</a></li>
                    <li class="<?= ($halaman_aktif == "about") ? "colorlib-active" : "" ?>"><a href="<?= base_url("/home/about") ?>">About Us</a></li>
                    <li class="<?= ($halaman_aktif == "interior") ? "colorlib-active" : "" ?>"><a href="<?= base_url("/home/interior") ?>">Interior</a></li>
                    <li class="<?= ($halaman_aktif == "contact") ? "colorlib-active" : "" ?>"><a href="<?= base_url("/home/contact") ?>">Contact</a></li>
                </ul>
            </nav>