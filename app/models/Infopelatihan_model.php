<?php

class Infopelatihan_model {
    private $table = 'infopelatihan';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getDataPelatihan() {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function cariInfopelatihan() {
        $prakerja = $_POST['prakerja'];
        $query = "SELECT * FROM `infopelatihan` WHERE NamaPelatihan LIKE :prakerja";
        $this->db->query($query);
        $this->db->bind('prakerja', "%$prakerja%");
        return $this->db->resultSet();
    }
}

?>