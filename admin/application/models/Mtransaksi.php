<?php
class Mtransaksi extends CI_Model {
    function tampil() {
        $this->db->select('transaksi.*, customer.*');
        $this->db->from('transaksi');
        $this->db->join('customer', 'transaksi.id_customer = customer.id_customer', 'left');
        $this->db->order_by('tanggal_pesan', 'desc');

        $q = $this->db->get();
        $d = $q->result_array();
    
        return $d;
    }
    

    function riwayat_pesan($id_customer){
        $this->db->where('id_customer', $id_customer);
        $q = $this->db->get("transaksi");
        $d = $q->result_array();
        return $d;
    }

    function detail($id_transaksi) {
        $this->db->where('id_transaksi', $id_transaksi);
        $q = $this->db->get('transaksi');
        $d = $q->row_array();

        return $d;
    }
}