<?php 

class profil_model {
    private $table = 'profil';
    private $db; 

    public function __construct() {
        $this->db = new Database;
    }

    public function getProfil($ID) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE ID=:ID');
        $this->db->bind('ID', $ID);
        return $this->db->singleSet();
    }

    public function tambahProfil($data) {
        $query = "INSERT INTO profil
                    VAlUES
                    ('', :namaDepan, :namaBelakang, :email, :kota, :alamat, :kodePos, :pendidikan, :foto)";

        $this->db->query($query);
        $this->db->bind('namaDepan', $data['namadepan']);
        $this->db->bind('namaBelakang', $data['namabelakang']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kodePos', $data['kodepos']);
        $this->db->bind('pendidikan', $data['pendidikan']);
        $this->db->bind('foto', $data['fotoProfil']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

?>