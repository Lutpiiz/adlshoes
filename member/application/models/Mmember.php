<?php
class Mmember extends CI_Model
{
	function login($inputan)
	{
        $email_customer = $inputan['email_customer'];
        $password = $inputan['password'];
        // $password = sha1($password);
         
        $this->db->where('email_customer', $email_customer);
        $this->db->where('password', $password);
        $q = $this->db->get('customer');
        $cekcustomer = $q->row_array(); 

        if(!empty($cekcustomer)){
            $this->session->set_userdata("id_customer", $cekcustomer['id_customer']);
            $this->session->set_userdata("email_customer", $cekcustomer['email_customer']);
            $this->session->set_userdata("nama_customer", $cekcustomer['nama_customer']);
            $this->session->set_userdata("alamat_customer", $cekcustomer['alamat_customer']);
            $this->session->set_userdata("wa_customer", $cekcustomer['wa_customer']);
            $this->session->set_userdata("kode_distrik_customer", $cekcustomer['kode_distrik_customer']);
            $this->session->set_userdata("nama_distrik_customer", $cekcustomer['nama_distrik_customer']);
            return "ada";
        }else{
            return "ga ada";
        }
	}

	function tampil()
	{
		$q = $this->db->get("member");
		
		$d = $q->result_array();

		return $d;
	}
	function detail($id_member){
		$this->db->where("id_member", $id_member);
		$q= $this->db->get("member");
		$d=$q->row_array();
		return $d;
	}
	function jumlah_member_distrik(){
		$q = $this->db->query("SELECT COUNT(*) as jumlah, nama_distrik_member from `member` group by nama_distrik_member");
		$d =$q->result_array();

		return $d;
	}

    function ubah($inputan,$id_member){

        if(!empty($inputan['password'])){
            $inputan['password'] = sha1($inputan['password']);
        }else{
            unset($inputan['password']);
        }
        $this->db->where('id_member', $id_member);
        $this->db->update('member', $inputan);
        
        $this->db->where('id_member', $id_member);
        $q = $this->db->get('member');
        $cekmember = $q->row_array(); 

        $this->session->set_userdata("id_member", $cekmember['id_member']);
        $this->session->set_userdata("email_member", $cekmember['email_member']);
        $this->session->set_userdata("nama_member", $cekmember['nama_member']); 
        $this->session->set_userdata("alamat_member", $cekmember['alamat_member']); 
        $this->session->set_userdata("wa_member", $cekmember['wa_member']); 
        $this->session->set_userdata("kode_ditrik_member", $cekmember['kode_ditrik_member']); 
        $this->session->set_userdata("nama_ditrik_member", $cekmember['nama_ditrik_member']); 
    }

    function register($m){
        $this->db->insert('member', $m);
    }
}