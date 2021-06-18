<div class="container">
    <form action="<?= BASEURL;?>/homelogin/cariperusahaan">
        <div class="d-flex flex-row justify-content-end mt-4" >
            <div class="m-2 bd-highlight">
                <input class="form-control pe-5" type="search" name="company" id="perusahaan" placeholder="nama perusahaan" aria-label="Search">
            </div>
            <div class="m-2 bd-highlight"><button class="btn btn-search" type="submit">Cari Perusahaan</button></div>
        </div>
    </form>
</div>
<div class="container">
    <div class="row row-cols-2">
        <?php //while ($row = mysqli_fetch_assoc($infoperusahaan)) : ?>
        <?php foreach ($data['perusahaan'] as $perusahaan): ?>
        <div class="col">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 m-auto">
                        <img src="<?=BASEURL; ?>/img/perusahaan/<?= $perusahaan["logo"] ?>" alt="Dana Logo" style="width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $perusahaan["NamaPerusahaan"] ?></h5>
                            <p class="card-text"><?= $perusahaan["Keterangan"] ?></p>
                            <a href="#" class="card-link">more</a>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <?php endforeach; ?>
        <?php //endwhile; ?>
    </div>
</div>