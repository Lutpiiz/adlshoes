<?php
class Layanan extends CI_Controller {
    function __construct()
    {
        parent::__construct();

        //jika tidak ada tiket bioskop, maka suruh login
        if (!$this->session->userdata('id_admin')) {
            redirect('/', 'refresh');
        }
    }

    function index() {
        //panggil model Mlayanan
        $this->load->model("Mlayanan");

        $data["layanan"] = $this->Mlayanan->tampil();

        $this->load->view("header");
        $this->load->view("layanan_tampil", $data);
        $this->load->view("footer");
    }

    function tambah() {
        $inputan = $this->input->post();

		$this->form_validation->set_rules("nama_layanan", "Nama layanan", "required");
		$this->form_validation->set_rules("deskripsi_layanan", "Deskripsi layanan", "required");
		$this->form_validation->set_rules("harga_layanan", "Harga layanan", "required");
		$this->form_validation->set_rules("estimasi_layanan", "Estimasi layanan", "required");

		$this->form_validation->set_message("required", "%s wajib diisi");

        if ($this->form_validation->run()==TRUE) {
            $this->load->model('Mlayanan');

            $this->Mlayanan->simpan($inputan);

            $this->session->set_flashdata('pesan_sukses', 'Data layanan tersimpan');

            redirect('layanan', 'refresh');
        }

        $this->load->view("header");
        $this->load->view("layanan_tambah.php");
        $this->load->view("footer");
    }

    function hapus($id_layanan) {
        echo $id_layanan;

        //memanggil model layanan
        $this->load->model('Mlayanan');

        //memanggil fungsi hapus
        $this->Mlayanan->hapus($id_layanan);

        //pesan di layar
        $this->session->set_flashdata('pesan_sukses', 'layanan telah dihapus');

        //redirect ke layanan untuk tampil data
        redirect('layanan', 'refresh');
    }

    function edit($id_layanan) {
        //1. tampilkan dulu layanan lama
        $this->load->model('Mlayanan');
        $data['layanan'] = $this->Mlayanan->detail($id_layanan);

        //2. baru mikir ngubah data
        $inputan = $this->input->post();

        //form validation nama layanan wajib diisi
		$this->form_validation->set_rules("nama_layanan", "Nama layanan", "required");

		//atur pesan dalam bahasa indonesia
		$this->form_validation->set_message("required", "%s wajib diisi");

        //jika ada inputan
        if ($this->form_validation->run()==TRUE) {
            //jalankan fungsi edit
            $this->Mlayanan->edit($inputan, $id_layanan);

            //pesan
            $this->session->set_flashdata('pesan_sukses', 'layanan telah diubah');

            //redirect
            redirect('layanan', 'refresh');
        }

        $this->load->view('header');
        $this->load->view('layanan_edit', $data);
        $this->load->view('footer');
    }
}