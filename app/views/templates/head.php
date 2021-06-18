<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="http://localhost/Project Pweb/public/css/landing.css">
    <link rel="stylesheet" href="http://localhost/Project Pweb/public/Landing Page 5/css/responsive.css"> -->
    <link rel="stylesheet" href="<?= BASEURL;?>/css/landing.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/responsive.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/SignUp.css">


    <title><?= $data['title'] ?></title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Jobility</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link link-navbar active" aria-current="page" href="<?= BASEURL;?>/home">Home &nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-navbar" href="<?= BASEURL;?>/home/aboutus">About Us &nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-navbar" href="<?= BASEURL;?>/home/contactus">Contact Us &nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASEURL;?>/login" class="nav-link bg-custom rounded-pill shadow" id="btn-sign">Login</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>  
