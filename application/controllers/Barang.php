<?php

class Barang extends CI_Controller {

    function index() {
        $this->load->model('Laporan');
//        $laporan = $this->Laporan->list_Jalan()->result();
//        print_r($laporan);
//        die;
        $data['laporan'] = $this->Laporan->list_Jalan()->result();  //objek jalan
        $this->load->view('Home', $data);
    }
    function input(){
        $this->load->view('input');
    }

}
