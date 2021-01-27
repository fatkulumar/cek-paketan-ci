<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();		
		$this->load->model('m_paket');
		$this->load->helper('url');
		// $this->load->library('form_validation');
	}

	public function index()
	{
		$this->output->delete_cache();
		$data['nama_paket'] = $this->m_paket->grafikNamaPaket()->result_array();
		$data['hitungCod'] = $this->m_paket->hitungCod();
		$data['hitungLangsung'] = $this->m_paket->hitungLangsung();
		$data['penerima'] = $this->m_paket->grafikPenerima()->result_array();

		$data['data_asc'] = $this->m_paket->tampil_data_asc();
		$data['data_desc'] = $this->m_paket->tampil_data_desc();
		$this->load->view('admin/index', $data);
	}

	public function tambah_aksi()
	{
		$nama_paket = $this->input->post('nama_paket',true);
		$penerima = $this->input->post('penerima',true);
		$jenis_kirim = $this->input->post('jenis_kirim');
		$hp = $this->input->post('no_hp');
		$tgl_terima = $this->input->post('tgl_terima');

		$data = [
			'hp' => $hp,
			'nama_paket' => $nama_paket,
			'penerima' => $penerima,
			'jenis_kirim' => $jenis_kirim,
			'tgl_terima' => $tgl_terima,
			'creat_at' => $tgl_terima
		];


		$this->m_paket->input_paket($data, 'tb_paket');
		redirect('admin/index');
	}

	public function edit_data($id)
	{
		$data['data_asc'] = $this->m_paket->tampil_data_desc();
		$data['data_desc'] = $this->m_paket->tampil_data_desc();
		$data['data'] = $this->m_paket->getOne($id);
		$this->load->view('admin/form_edit', $data);
	}

	public function update_data($id)
	{
		$nama_paket = $this->input->post('nama_paket');
		$penerima = $this->input->post('penerima');
		$jenis_kirim = $this->input->post('jenis_kirim');
		$hp = $this->input->post('no_hp');
		$last_modified = $this->input->post('last_modified');

		$data = [
			'hp' => $hp,
			'nama_paket' => $nama_paket,
			'penerima' => $penerima,
			'jenis_kirim' => $jenis_kirim,
			'modified_at' => $last_modified,
			'tgl_ambil' => $last_modified
		];


		$this->m_paket->update_data($data, 'tb_paket', $id);
		redirect('admin/index');
	}

	public function updateNamaPengambil($id)
	{
		$id_paket = $this->input->post('id_paket');
		$pengambil = $this->input->post('pengambil');
		$tgl_ambil = $this->input->post('tgl_ambil');

		$data = [
			'pengambil' => $pengambil,
			'tgl_ambil' => $tgl_ambil,
			'modified_at' => $tgl_ambil,
			'status_ambil' => $tgl_ambil
		];

		$this->m_paket->update_data($data, 'tb_paket', $id_paket);

		echo json_encode($data);
	}

	public function hapus_data($id)
	{	
		if(!isset($id)) show_404(); 

		$this->m_paket->hapus_data($id);
		redirect('admin/index');
	}
}
