<?php
class Mcustomer extends CI_Model {
    function login($inputan) {
        $identitas = $inputan['identitas'];
        $password = $inputan['password'];
        $password = sha1($password);

        //cek database
        $this->db->where("(email_customer = '$identitas' OR nama_customer = '$identitas')");
        $this->db->where('password', $password);
        $q = $this->db->get('customer');
        $cekcustomer = $q->row_array();

        //jika tidak kosong maka ada
        if (!empty($cekcustomer)) {
            $this->session->set_userdata("id_customer", $cekcustomer["id_customer"]);
            $this->session->set_userdata("email_customer", $cekcustomer["email_customer"]);
            $this->session->set_userdata("nama_customer", $cekcustomer["nama_customer"]);
            $this->session->set_userdata("alamat", $cekcustomer["alamat"]);
            return "ada";
        } else {
            return "gak ada";
        }
    }
}
