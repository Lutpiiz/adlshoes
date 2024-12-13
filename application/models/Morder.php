<?php
class Morder extends CI_Model {
    function tampil() {

        //melakukan query
        $this->db->where("id_customer", $this->session->userdata('id_customer'));
        $q = $this->db->get("transaksi");

        //pecah ke array
        $d = $q->result_array();

        return $d;
    }
}