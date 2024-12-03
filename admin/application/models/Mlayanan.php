<?php
class Mlayanan extends CI_Model {
    function tampil() {

        //melakukan query
        $q = $this->db->get("layanan");

        //pecah ke array
        $d = $q->result_array();

        return $d;
    }

    function simpan($inputan) {
        //kita urusi dulu upload foto layanan
        $config['upload_path'] = $this->config->item("assets_layanan");
        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        //adegan upload foto_layanan
        $ngupload = $this->upload->do_upload("foto_layanan");

        //jika ngupload, maka dapatkan nama fotonya untuk ditampung ke db
        if ($ngupload) {
            $inputan['foto_layanan'] = $this->upload->data("file_name");
        }

        //query simpan data ke tabel layanan
        //insert into layanan bla bla bla
        $this->db->insert('layanan', $inputan);
    }

    function hapus($id_layanan) {
        //delete from layanan where id_layanan = ...
        $this->db->where('id_layanan', $id_layanan);
        $this->db->delete('layanan');
    }

    function detail($id_layanan) {
        //select * from layanan where id_layanan = ...
        $this->db->where('id_layanan', $id_layanan);
        $q = $this->db->get('layanan');
        $d = $q->row_array();

        return $d;
    }

    function edit($inputan, $id_kategori) {
        //ngurusi foto_kategori jika pengguna upload foto
        $config['upload_path'] = $this->config->item("assets_kategori");
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);

        //adegan ngupload
        $ngupload = $this->upload->do_upload("foto_kategori");

        //jika ngupload
        if ($ngupload) {
            $inputan['foto_kategori'] = $this->upload->data("file_name");
        }

        //query update data sesuai id_kategori
        $this->db->where('id_kategori', $id_kategori);
        $this->db->update('kategori', $inputan);
    }
}