<div class="container">
    <form action="<?= BASEURL;?>/homelogin/caripelatihan" method="$_POST">
        <div class="d-flex flex-row justify-content-end mt-3" >
            <div class="m-2 bd-highlight">
                <input class="form-control pe-5" name="prakerja" type="search" placeholder="nama pelatihan" aria-label="Search">
            </div>
            <div class="m-2 bd-highlight"><button class="btn btn-search" type="submit">Search</button></div>
        </div>
    </form>
</div>
<div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4 m-auto">
        <?php //while($row = mysqli_fetch_assoc($infopelatihan)) : ?>
        <?php foreach($data['pelatihan'] as $pelatihan): ?>
        <div class="col">
            <div class="card">
            <img src="<?= BASEURL;?>/img/pelatihan/<?= $pelatihan["Gambar"] ?>" class="card-img-top" alt="Pelatihan Corel" >
            <div class="card-body">
                <h5 class="card-title"><?= $pelatihan["NamaPelatihan"] ?></h5>
                <p class="card-text"><?= $pelatihan["Keterangan"] ?></p>
                <p>Untuk informasi lebih lanjut kunjungi website dibawah ini</p>
                <a href=""><?= $pelatihan["link"] ?></a>
            </div>
            </div>
        </div>
        <?php //endwhile; ?>
        <?php endforeach; ?>
    </div>
</div>