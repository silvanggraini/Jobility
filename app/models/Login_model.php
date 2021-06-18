<?php

class Login_model {
    private $table = 'login';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getDataLogin($username) {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE Username=:username;");
        $this->db->bind('username', $username);
        
        return $this->db->singleSet();
    }

    public function getDataLoginById($id) {
        $this->db->query("SELECT Username FROM " . $this->table . " WHERE ID=:id;");
        $this->db->bind('id', $id);
        
        return $this->db->singleSet();
    }

    public function setDataUser($data) {
        $query = "INSERT INTO login
                    VALUES
                    ('', :username,:password) ";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}

?>