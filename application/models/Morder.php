<?php
class Morder extends CI_Model {
    function tampil() {
        $this->db->where("id_customer", $this->session->userdata('id_customer'));
        $this->db->order_by('tanggal_pesan', 'DESC');
        $q = $this->db->get("transaksi");

        $d = $q->result_array();

        return $d;
    }

    function detail($id_transaksi) {
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->join('layanan', 'transaksi.id_layanan = layanan.id_layanan', 'left');
        $this->db->group_by('layanan.id_layanan');

        $q = $this->db->get("transaksi");
        $d = $q->row_array();

        return $d;
    }

    function set_lunas($id_transaksi) {
        $this->db->where('id_transaksi', $id_transaksi);
		$this->db->set('status_transaksi', 'dibayar');
		$this->db->update('transaksi');
    }
}