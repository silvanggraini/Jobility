<div class="container-fluid">
    <div class="row">
        <div class="col text-center sebelah-kiri my-auto mt-0">
        <h1 class="welcome-back">Contact Us</h1>
        <p>Apakah ada kendala pada websitenya</p>
        <p class="p1"> Silahkan masukan saran anda pada kolom form di samping </p>
        <div class="d-grid gap-2 col-4 mx-auto mt-5">
            <!-- <p>Atau</p>
            <p>Hubungi P</p> -->
        </div>
        </div>
        <div class="col-md my-auto">
        <h1 class="text-center create-account mt-3">Tell us your Problem</h1>
        <div class="row">
            <div class="col-lg-6 ms-5">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <form action="<?= BASEURL; ?>/home/contactus" method="POST" class="rounded p-md-5">
            <div class="form-group mb-3 ">
                <label for="nama">Nama</label>
                <input type="text" name="nama1" id="nama" class="form-control kotak rounded" placeholder="Enter username">            
            </div>
            <div class="form-group mb-3 ">
                <label for="email">Email</label>
                <input type="email" name="email1" id="email" class="form-control kotak rounded" placeholder="Enter username">            
            </div>
            <div class="form-group mb-3 ">
                <label for="masukan">Masukan</label>
                <textarea name="masukan1" id="masukan" cols="100" rows="10"></textarea>
                
                <!-- <textarea name="username" id="username" class="form-control kotak rounded-pill" placeholder="Enter username">             -->
            </div>
            <div class="d-grid gap-2 col-4 mx-auto">
                <button class="btn rounded-pill shadow btn-signup mb-3" type="submit" name="register">Simpan</button>
            </div>
        </form>
        </form>
        </div>
    </div>
</div>