<?php

class Register extends Controller {
    public function index() {

        $data['title'] = "Sign Up | Jobility";
        $data['error'] = False;
        
        if ($this->register_validation()) {
            header("Location:" . BASEURL . '/homelogin');
            exit;
        }
        else if (isset($_POST['register'])){
            $data['error'] = True;
        }

        $this->view('templates/headerHomeLogin', $data);
        $this->view('register/index', $data);
        $this->view('templates/footer');
    }

    public function register_validation() {
        if (isset($_POST['register'])) {
            $username = $this->validate_data($_POST['username']);
            $password = $this->validate_data($_POST['password']);
            $konfirm_password = $this->validate_data($_POST['passwordK']);
            
            if(empty($username) OR empty($password) OR empty($konfirm_password)) {
                return False;
            }
            else {
                if ($password == $konfirm_password) {
                    if($this->model('Login_model')->setDataUser($_POST) > 0){
                        Flasher::setFlash('berhasil','ditambahkan','info');
                        return True;
                    }
                    
                    Flasher::setFlash('Password konfigurasi', 'tidak sesuai','danger');
                    return False;
                    
                }
                Flasher::setFlash('anda','kosong','danger');
                return False;
            }
        }
    }

    public function validate_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

?>