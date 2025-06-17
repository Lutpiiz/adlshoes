<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('id_customer')) {
            redirect('/', 'refresh');
        }
    }

	public function index()
	{
		$this->load->model("Mservice");
        $data['layanan'] = $this->Mservice->tampil();

		$this->load->view('header');
		$this->load->view('service', $data);
		$this->load->view('footer');
	}

	public function pesan($id_layanan)
	{
		$this->load->model("Mservice");
		$data['detail_layanan'] = $this->Mservice->detail_layanan($id_layanan);

		$this->load->view('header');
		$this->load->view('service_order', $data);
		$this->load->view('footer');
	}

	public function proses_pesan() {
        $this->load->model("Mservice");
    
        $id_customer = $this->session->userdata('id_customer');
        $id_layanan = $this->input->post('id_layanan');
        $jumlah = $this->input->post('jumlah');
        $layanan = $this->Mservice->detail_layanan($id_layanan);

        $total_transaksi = $layanan['harga_layanan'] * $jumlah;
    
        $data = [
            'id_customer' => $id_customer,
            'nama_pemesan' => $this->input->post('nama'),
            'link_alamat' => $this->input->post('link_alamat'),
            'patokan' => $this->input->post('patokan'),
            'id_layanan' => $this->input->post('id_layanan'),
            'jumlah_pesan' => $this->input->post('jumlah'),
            'total_transaksi' => $total_transaksi,
            'metode_pembayaran' => $this->input->post('metode_pembayaran'),
            'tanggal_pesan' => date('Y-m-d H:i:s'),
        ];

        if($data['metode_pembayaran'] == 'cod') {
            $data['status_transaksi'] = 'dibayar';
        }
    
        $this->db->insert('transaksi', $data);

        $this->session->set_flashdata('pesan_sukses', 'Pesanan diterima!');
    
        redirect('order', 'refresh');
    }
    
}
