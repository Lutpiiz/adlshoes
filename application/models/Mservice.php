<?php
class Mservice extends CI_Model {
    function tampil() {

        $q = $this->db->get("layanan");

        $d = $q->result_array();

        return $d;
    }

    public function detail_layanan($id_layanan) {
        $this->db->where('id_layanan', $id_layanan);
        $query = $this->db->get('layanan');

        return $query->row_array();
    }

}

