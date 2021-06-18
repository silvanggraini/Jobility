
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
            <div class="col text-center sebelah-kiri my-auto">
            <h1 class="welcome-back">Welcome Back</h1>
            <p>Untuk mendapatkan informasi dari Jobility,</p>
            <p class="p1"> Tetap terhubung dengan akun personalmu </p>
            <div class="d-grid gap-2 col-4 mx-auto mt-5">
                <button class="btn btn-outline-light rounded-pill btn-login" type="button" name="login"><a href="<?= BASEURL;?>/login" class="text-decoration-none link-light">Login</a></button>
            </div>
            </div>
            <div class="col-md my-auto">
            <h1 class="text-center create-account mt-3">Create Account</h1>
            <div class="row">
                <div class="col-lg-6 ms-5">
                    <?php Flasher::flash(); ?>
                </div>
            </div>
            <form action="<?= BASEURL; ?>/register" method="POST" class="rounded p-md-5">
                <div class="form-group mb-3 ">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control kotak rounded-pill" placeholder="Enter username">            
                </div>
                <div class="form-group mb-3 ">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control kotak rounded-pill" placeholder="Enter password">
                </div>
                <div class="form-group mb-3 ">
                    <label for="passwordk">Konfirmasi Password</label>
                    <input type="password" name="passwordK" id="passwordK" class="form-control kotak rounded-pill" placeholder="Enter password">
                </div>
                <div class="form-group form-check mb-3">
                    <label for="rememberMe" class="form-check-label">
                        <input type="checkbox" name="rememberMe" id="rememberMe" class="form-check-input">Remember Me
                    </label>
                </div>
                <div class="d-grid gap-2 col-4 mx-auto">
                    <button class="btn rounded-pill shadow btn-signup mb-3" type="submit" name="register">Sign Up</button>
                </div>
            </form>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>