<div class="container">
    <div class="container  p-5 mt-5 form-profil">
        <h1 class="fs-4 label">Profil</h1>
        <span class="label">Nama</span>
    </div>
    <div class="container mt-4 p-5 form-profil">
        <form action="<?= BASEURL; ?>/homelogin/profil" method="POST">
            <div class="form-group mb-3 ">
                <label for="namadepan" class="label">Nama Depan</label>
                <input type="text" name="namadepan" id="namadepan" class="form-control kotak rounded" placeholder="Enter nama depan">            
            </div>
            <div class="form-group mb-3 ">
                <label for="namabelakang" class="label">Nama Belakang</label>
                <input type="text" name="namabelakang" id="namabelakang" class="form-control kotak rounded" placeholder="Enter nama belakang">
            </div>
            <div class="form-group mb-3 ">
                <label for="email" class="label">Email</label>
                <input type="email" name="email" id="email" class="form-control kotak rounded" placeholder="Enter email">
            </div>
            <div class="form-group mb-3">
                <label for="kota" class="label">Kota</label>
                <input type="text" name="kota" id="kota" class="form-control kotak rounded" placeholder="Enter kota">    
            </div>
            <div class="form-group mb-3">
                <label for="alamat" class="label">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control kotak rounded" placeholder="Enter alamat">    
            </div>
            <div class="form-group mb-3">
                <label for="kodepos" class="label">Kode Pos</label>
                <input type="number" name="kodepos" id="kodepos" class="form-control kotak rounded" placeholder="Enter kode pos">    
            </div>
            <div class="form-group mb-3">
                <label for="pendidikan" class="label">Pendidikan</label>
                <input type="text" name="pendidikan" id="pendidikan" class="form-control kotak rounded" placeholder="Enter pendidikan">    
            </div>
            <div class="form-group">
                <label for="fotoProfil" class="label">Foto Profil</label>
                <input type="file" class="form-control-file" name="fotoProfil" id="fotoProfil">
            </div>
            <div class="d-grid gap-2 col-4 mx-auto mt-5">
                <button class="btn roundedshadow btn-profil mb-3" type="submit" name="profil">Simpan</button>
            </div>
        </form>
    </div>
</div>