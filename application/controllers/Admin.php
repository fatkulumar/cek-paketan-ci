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
		$this->load->model('M_paket','paket');
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
		$data['getWarning'] = $this->m_paket->getWarning();

		$this->load->view('admin/index', $data);
	}

	public function tambah_aksi()
	{
		$id_paket = $this->input->post('id_paket', true);
		$nama_paket = $this->input->post('nama_paket', true);
		$penerima = $this->input->post('penerima',true);
		$jenis_kirim = $this->input->post('jenis_kirim',true);
		$hp = $this->input->post('no_hp',true);
		$tgl_terima = $this->input->post('tgl_terima', true);

		$data = [
			'hp' => $hp,
			'nama_paket' => $nama_paket,
			'penerima' => $penerima,
			'jenis_kirim' => $jenis_kirim,
			'tgl_terima' => $tgl_terima,
			'creat_at' => $tgl_terima
		];

		$kirim_telegram = "Nama: " . $nama_paket . " dengan nomor hp " . $hp . " paketan sudah ada di Gasek Multimedia pada " .$tgl_terima. " harap segera di ambil karena gudang mau meledak. Terimakasih . info lain cek di simpas.gasekmultimedia.com Pesan ini di kirim otomatis oleh sistem karena anda sudah numpang paket di gasek multimedia";

		// $this->m_paket->input_paket($data, 'tb_paket');
		$data["id_akhir"] = $this->m_paket->idAkhir()->row_array();
		// redirect('admin/index');
		// $this->bot_telegram($kirim_telegram);
		echo json_encode($data);
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
		redirect('admin/index', 'refresh');
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

	public function updateWarning()
	{
		$warning = $this->input->post('warning', true);

		$data = [
			'warning' => $warning
		];

		// print_r($data); die();

		$this->m_paket->updateWarning($data);

		redirect('admin/index');
	}

	public function updateInfo()
	{
		$warning = $this->input->post('info', true);

		$data = [
			'info' => $warning
		];

		// print_r($data); die();

		$this->m_paket->updateInfo($data);

		redirect('admin/index');
	}

	public function peringkat()
	{
		$rangking = array();
		$peringkat = $this->m_paket->peringkat()->result_array();
		foreach($peringkat as $rank){
			echo $rangking[] =  $rank["jumlah"];
			echo "<br>";
		}

		//  echo sort($peringkat);

		// echo $angka = implode(",", $rangking);
		echo sort($peringkat);
	}

	private function bot_telegram($data)
	{
		define('BOT_TOKEN', '1605818633:AAEbvEQB417rgK_gDjlnI9_oORUOEENlh7Y');
		define('CHAT_ID', '585866693');

		$pesan = json_encode($data);
		$API = "https://api.telegram.org/bot".BOT_TOKEN."/sendmessage?chat_id=".CHAT_ID."&text=$data";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_URL, $API);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}

	public function ajax_list()
    {
        $list = $this->m_paket->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $paket) {
            $no++;
            $row = array();
            // $row[] = $no;
            $row[] = $paket->tgl_terima;
            $row[] = $paket->nama_paket;
            $row[] = $paket->hp;
            $row[] = $paket->penerima;
            $row[] = $paket->jenis_kirim;
			$row[] = $paket->pengambil;
			if($paket->status_ambil==''){

				$btn_status="<td><a class='btn btn-danger btn-sm' onclick='userInput($paket->id_paket)' href=''>Belum Diambil</a></td>";
			}else{

				$btn_status="<button class='btn btn-success btn-sm' disabled>Sudah Diambil</button><div><span>$paket->tgl_ambil</span>";
			}
		$row[]=$btn_status;
		$row[]= "<td><a class='btn btn-sm btn-danger' onclick='return confirm('Yakin Hapus $paket->nama_paket ?')' href='".base_url("admin/hapus_data/$paket->id_paket")."'><i class='fa fa-trash' aria-hidden='true'></i></a></td><td><a class='btn btn-sm btn-success' onclick='return confirm('Yakin Hapus $paket->nama_paket ?')' href='".base_url("admin/edit_data/$paket->id_paket")."'><i class='fa fa-edit' aria-hidden='true'></i></a></td>";


            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->paket->count_all(),
                        "recordsFiltered" => $this->paket->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
	}
}
