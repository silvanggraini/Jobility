<?php

class infoperusahaan_model {
    private $table = 'infoperusahaan';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getDataPerusahaan() {
        $this->db->query("SELECT * FROM " . $this->table . ';');

        return $this->db->resultSet();
    }

    public function cariInfoPerusahaan() {
        $company = $_POST['company'];
        $query = "SELECT logo, NamaPerusahaan, Keterangan FROM `infoperusahaan` WHERE NamaPerusahaan LIKE :company";
        $this->db->query($query);
        $this->db->bind('company', "%$company%");
        return $this->db->resultSet();
    }
}

?>