<?php

class Homelogin extends Controller {
    public function index() {
        $data['title'] = 'Home | Jobility';

        $data['loker'] = $this->getInfoLoker();

        $this->view('templates/head_home_login', $data);
        $this->view('home_login/index', $data);
        $this->view('templates/footer');
    }

    public function getInfoLoker() {
        $data = $this->model('Infoloker_model');

        return $data->getDataLoker();
    }

    public function detailloker($ID) {
        $data['title'] = 'Info Detail | Jobility';

        $data['loker'] = $this->getInfoLokerById($ID);

        $this->view('templates/head_home_login', $data);
        $this->view('home_login/detailloker', $data);
        $this->view('templates/footer');
    }

    public function getInfoLokerById($ID) {
        $data = $this->model('Infoloker_model');

        return $data->getDataDetailLoker($ID);
    }

    public function infoperusahaan() {
        $data['title'] = 'Info Perusahaan | Jobility';
        $data['perusahaan'] = $this->getDataPerusahaan();

        $this->view('templates/head_home_login', $data);
        $this->view('home_login/infoperusahaan', $data);
        $this->view('templates/footer');
    }

    public function getDataPerusahaan() {
        $data = $this->model('Infoperusahaan_model');
        
        return $data->getDataPerusahaan();
    }
    
    public function infopelatihan() {
        $data['title'] = 'Info Pelatihan | Jobility';
        $data['pelatihan'] = $this->getDataPelatihan();
        $this->view('templates/head_home_login', $data);
        $this->view('home_login/infopelatihan', $data);
        $this->view('templates/footer');
    }

    public function getDataPelatihan() {
        $data = $this->model('Infopelatihan_model');
        
        return $data->getDataPelatihan();
    }

    public function profil() {
        $data['title'] = 'Profil | Jobility';

        // $data['loker'] = $this->getInfoLoker();

        $this->view('templates/head_home_login', $data);
        $this->view('home_login/profil', $data);
        $this->view('templates/footer');

        if($this->model('profil_model') ->tambahProfil($_POST) > 0) {
            header('Location: '. BASEURL . '/homelogin/profil');
            exit;
        }
    }

    public function cariloker() {
        $data['title'] = 'Home | Jobility';
        $data['loker'] = $this->model('infoloker_model')->cariInfoLoker();
        $this->view('templates/head_home_login', $data);
        $this->view('home_login/index', $data);
        $this->view('templates/footer');
    }

    public function cariperusahaan() {
        $data['title'] = 'Info Perusahaan | Jobility';
        $data['perusahaan'] = $this->model('infoperusahaan_model')->cariInfoPerusahaan();
        $this->view('templates/head_home_login', $data);
        $this->view('home_login/infoperusahaan', $data);
        $this->view('templates/footer');
    }

    public function caripelatihan() {
        $data['title'] = 'Info Pelatihan | Jobility';
        $data['pelatihan'] = $this->model('infopelatihan')->cariInfopelatihan();
        $this->view('templates/head_home_login', $data);
        $this->view('home_login/infopelatihan', $data);
        $this->view('templates/footer');
    }

    public function logout() {
        session_unset();
        session_destroy();
        setcookie('USID', '', time() - 3600);
        setcookie('KEY', '', time() - 3600);
        setcookie('ROLE', '', time() - 3600);
        header('Location:' .  BASEURL . '/home');
    }
}

?>