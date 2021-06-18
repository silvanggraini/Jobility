<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/home.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/profil.css">

    <title><?= $data['title'] ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Jobility</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-2">
                        <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/homelogin/">Cari Lowongan Pekerjaan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?= BASEURL; ?>/homelogin/infoperusahaan">Info Perusahaan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?= BASEURL; ?>/homelogin/infopelatihan">Info Pelatihan</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="<?= BASEURL; ?>/homelogin/profil">Profile</a>
                    </li>
                </ul>
                <div class="d-flex ms-auto">
                    <!-- <button class="btn btn-outline-danger" type="submit"><a href="/homelogin/Logout"></a> Logout</button> -->
                    <a class="btn btn-outline-danger" href="<?= BASEURL; ?>/homelogin/Logout">Logout</a>
                </div>
            </div>
        </div>
    </nav> 