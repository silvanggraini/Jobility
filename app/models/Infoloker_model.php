<?php

class Infoloker_model {
    private $table = 'infoloker';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getDataLoker() {
        $this->db->query('SELECT * FROM ' . $this->table . ';');

        return $this->db->resultSet();
    }

    public function getDataDetailLoker($ID)
    {
        $this->db->query('SELECT * FROM infoloker WHERE ID=:ID');
        $this->db->bind('ID', $ID);
        return $this->db->singleSet();
    }

    public function cariInfoLoker() {
        $profesi = $_POST['profesi'];
        $query = "SELECT lowongan, perusahaan, lokasi, keterangan, syarat, gaji FROM `infoloker` WHERE lowongan LIKE :profesi";
        $this->db->query($query);
        $this->db->bind('profesi', "%$profesi%");
        return $this->db->resultSet();
    }

}

?>