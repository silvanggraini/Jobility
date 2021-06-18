<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/SignUp.css">

    <title><?= $data['title'] ?></title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md my-auto pt-3">
          <h1 class="text-center create-account">Login</h1>
          <?php if (isset($data['salah'])):?>
            <p class="alert alert-danger">Username atau Password anda salah</p>
          <?php endif;?>
          <form action="<?= BASEURL; ?>/login" method="POST" class="rounded p-md-5">
            <div class="form-group mb-3 ">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control kotak rounded-pill" placeholder="Enter username">            
            </div>
            <div class="form-group mb-3 ">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control kotak rounded-pill" placeholder="Enter password">
            </div>
            <div class="form-group form-check mb-3">
                <label for="rememberMe" class="form-check-label">
                    <input type="checkbox" name="rememberMe" id="rememberMe" class="form-check-input">Remember Me
                </label>
            </div>
            <div class="d-grid gap-2 col-4 mx-auto">
                <button class="btn rounded-pill shadow btn-signup mb-3" type="Sign Up" name="login">Login</button>
            </div>
        </div>
        <div class="col text-center sebelah-kiri my-auto">
            <h1 class="welcome-back">Hello!</h1>
            <p>Ayo daftarkan akun personal akunmu di sini</p>
            <p class="p1"> Untuk mendapatkan informasi terbaru tentang Jobility </p>
            <div class="d-grid gap-2 col-4 mx-auto mt-5">
                <a class="btn btn-outline-light rounded-pill btn-login text-decoration-none" href="<?= BASEURL;?>/register">Sign Up</a>
            </div>
        </div>
          </form>
        </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>