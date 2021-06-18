<?php 
 class contactus_model {
    private $table = "contactus";
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getContactUs() {
        $this->db->query('SELECT * FROM ' . $this->table . ';');
        return $this->db->resultSet();
    }

    public function tambahContactUs($data) {
        $query = "INSERT INTO  contactus 
                    VALUES
                    ('', :nama,:email, :masukan) ";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama1']);
        $this->db->bind('email', $data['email1']);
        $this->db->bind('masukan', $data['masukan1']);

        $this->db->execute();

        return $this->db->rowCount();
    }

 }


?>