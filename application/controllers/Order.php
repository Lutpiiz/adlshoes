<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('id_customer')) {
            redirect('/', 'refresh');
        }
    }

	public function index()
	{
		$this->load->model('Morder');
		$this->Morder->tampil();
		$data['transaksi'] = $this->Morder->tampil();

		$this->load->view('header');
		$this->load->view('order', $data);
		$this->load->view('footer');
	}
}
