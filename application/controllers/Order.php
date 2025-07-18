<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{

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

	function detail($id_transaksi)
	{
		$this->load->model('Morder');
		$data['transaksi'] = $this->Morder->detail($id_transaksi);

		// midtrans
		$snapToken = '';
		$data['cekmidtrans'] = array();
		if ($data['transaksi']['status_transaksi'] == 'dipesan') {


			include 'midtrans-php/Midtrans.php';
			\Midtrans\Config::$serverKey = 'SB-Mid-server-szYx-X30eu6EtT0ASz2EfiwF';
			\Midtrans\Config::$isProduction = false;
			\Midtrans\Config::$isSanitized = true;
			\Midtrans\Config::$is3ds = true;

			$params['transaction_details']['order_id'] = $data['transaksi']['kode_transaksi'];
			$params['transaction_details']['gross_amount'] = $data['transaksi']['total_transaksi'];


			try {
				$snapToken = \Midtrans\Snap::getSnapToken($params);
			} catch (Exception $e) {
			}
			$data['snapToken'] = $snapToken;


			// cek ke midrtrans
			$curl = curl_init();

			curl_setopt_array($curl, array(
				CURLOPT_URL => "https://api.sandbox.midtrans.com/v2/" . $data['transaksi']['kode_transaksi'] . "/status",
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_ENCODING => "",
				CURLOPT_MAXREDIRS => 10,
				CURLOPT_TIMEOUT => 30,
				CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_HTTPHEADER => array(
					"accept: application/json",
					"authorization: Basic U0ItTWlkLXNlcnZlci1zell4LVgzMGV1NkV0VDBBU3oyRWZpd0Y6UmVhbGl0eTE2"
				),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			curl_close($curl);

			if ($err) {
				echo "cURL Error #:" . $err;
			} else {
				// echo $response;
				$responsi = json_decode($response, TRUE);
				if (isset($responsi['status_code']) && in_array($responsi['status_code'], [200, 201])) {
					$data['cekmidtrans'] = $responsi;

					if ($responsi['transaction_status'] == 'settlement') {
						$this->Morder->set_lunas($id_transaksi);
						redirect('order/detail/' . $id_transaksi, 'refresh');
					}
				}
			}
		}

		$this->load->view('header');
		$this->load->view('order_detail', $data);
		$this->load->view('footer');
	}
}
