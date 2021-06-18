<?php

// session_start();

class Login extends Controller {
    public function index() {
        
        if (isset($_COOKIE['key']) && isset($_COOKIE['word'])) {
            $key = $_COOKIE['key'];
            $word = $_COOKIE['word'];
            
            $data = $this->model('Login_model');
            $result = $data->getDataLoginById($key);
        
            if ($word === hash('sha256', $result['Username'])) {
                $_SESSION['login'] = true;
            }
        }
        
        if (isset($_SESSION["login"])) {
            header("Location:" . BASEURL . '/homelogin');
            exit;
        }

        $data['title'] = 'Login';
        if ($this->login_validation() !== NULL) {
            $data['salah'] = True;
        }

        $this->view("login/index", $data);

    }

    public function login_validation() {
        if (isset($_POST['login'])) {
            $username = $this->validate_data($_POST["username"]);
            $password = $this->validate_data($_POST["password"]);

            $data = $this->model('Login_model');

            $result = $data->getDataLogin($username);

            if($result) {
                if ($password == $result['Password']) {
                    if (isset($_POST['rememberMe'])) {
                        setcookie('key', $result['ID'], time() + 120);
                        setcookie('word', hash('sha256', $result['username']), time() + 120);
        
                    }
        
                    $_SESSION['login'] = true;
                   
                    header("Location:" . BASEURL . '/homelogin');
                    exit;
                }
                return False;
            }

            return False;

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