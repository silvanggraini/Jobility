<div class="container" style="width: 500px;">
    <div class="col bg-light mb-auto mt-3 shadow-sm align-item-center">
        <nav class="navbar sticky-top navbar-light bg-light">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col m-1">
                        <h1 class="fs-4"><?= $data['loker']['lowongan']; ?></h1>
                    </div>
                    <div class="col m-1">
                        <h2 class="fs-6 fw-normal"><?= $data['loker']['perusahaan']; ?></h2>
                    </div>
                    <div class="col m-1">
                        <button class="btn btn-lamar" style="width: 100%;"> <a href="" class="text-decoration-none link-light"> Masukan Lamaran Melalui Perusahaan</a></button>
                    </div>
                </div>
            </div>
        </nav>
        <div class="overflow-auto" style="height: 450px;">
            <p class="px-4"><?= $data['loker']['keterangan']; ?></p>
            <p class="fs-4 ms-4">Kualifikasi</p>
            <p class="px-4"><?= $data['loker']['detailpersyaratan']; ?></p>
            <span class="px-4"><?= $data['loker']['syarat']; ?></span>
            <p class="fs-5 ms-4 mt-3">Job Deskripsi</p>
            <p class="px-4"><?= $data['loker']['jobdesk']; ?></p>
            <h3 class="px-4"><?= $data['loker']['gaji']; ?></h3>
            <span class="px-4"><?= $data['loker']['lokasi']; ?></span>
        </div>
    </div>
</div>