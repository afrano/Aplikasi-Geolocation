<?php

class Laporan extends CI_Model{    
    function list_Jalan(){
        $jalan = $this->db->get('laporan');
        return $jalan;
    }
}