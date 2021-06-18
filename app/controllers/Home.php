<?php 


class Home extends Controller {
    public function index() {

        $data['title'] = 'Jobility';

        $this->view('templates/head', $data);
        $this->view('home_awal/index');
        $this->view('templates/footer');
    }

    public function aboutus() {
        $data['title'] = 'About Us | Jobility';
        $this->view('templates/head', $data);
        $this->view('home_awal/aboutus');
        $this->view('templates/footer');
    }

    public function contactus() {
        $data['title'] = 'Contact Us | Jobility';
        $this->view('templates/headerHome', $data);
        $this->view('home_awal/contactus');
        $this->view('templates/footer');

        if ($this->model('contactUs_model')->tambahContactUs($_POST) > 0) {
            Flasher::setFlash('telah', 'terkirim', 'info');
            header('Location: '. BASEURL . '/home/contactus');
            exit;
        } else {
            Flasher::setFlash('gagal', 'terkirim', 'danger');
            header('Location: '. BASEURL . '/home/contactus');
            exit;
        }
    }

}
?>