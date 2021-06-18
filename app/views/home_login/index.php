<div class="container">
    <form action="<?= BASEURL;?>/homelogin/cariloker" method="POST">
        <div class="row g-3 align-items-center mt-4 ms-5">
            <div class="col-auto">
                <input type="text" name="profesi" id="bidang" class="form-control" aria-describedby="passwordHelpInline" placeholder="Bidang pekerjaan" autocomplete="off">
            </div>
            <div class="col-auto">
                <input type="text" name="provinsi" id="provinsi" class="form-control" aria-describedby="passwordHelpInline" placeholder="Provinsi" autocomplete="off">
            </div>
            <div class="col-auto">
                <button class="btn btn-search" type="submit" id="brn-search" name="search">Cari Lowongan</button>
            </div>
        </div>
    </form>
</div>

<div class="container">
    <div class="row row-cols-1 mt-4">
        <div class="col row-cols-1">
        <?php //while($row = mysqli_fetch_assoc($infoloker)) : ?>
        <?php foreach($data['loker'] as $loker): ?>
            <ul class="rounded shadow-sm m-3 py-3 bg-light">
                <div class="row row-cols-1">
                    <div class="col">
                        <h1 class="text-decoration-none "><?= $loker["lowongan"]; ?></h1>
                    </div>
                    <div class="col">
                        <span class="text-decoration-none fs-5"><?= $loker["perusahaan"]; ?></span>
                    </div>
                    <div class="col">
                        <p class="text-decoration-none fs-5 "><?= $loker["lokasi"]; ?></p>
                    </div>
                    <div class="col p1">
                        <p class="text-decoration-none fs-6 fw-normal"><?= $loker["keterangan"]; ?></p>
                    </div>
                    <div class="col">
                        <span class="text-decoration-none"><?= $loker["syarat"]; ?></span>
                    </div>
                    <div class="col">
                        <span class="text-decoration-none"><?= $loker["gaji"]; ?></span>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary"><a href="<?= BASEURL;?>/homelogin/detailloker/<?= $loker['ID'] ?>" class="link-light text-decoration-none">See Detail</a></button>
                    </div>
                </div>
            </ul>
            <?php endforeach; ?>
            <?php //endwhile; ?>
        </div>
    </div>
</div>