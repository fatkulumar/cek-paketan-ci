<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		// $data["table"] = 'user/table';
		// $data["grafik"] = 'user/grafik'; 
		$data['data_asc'] = $this->m_paket->tampil_data_asc();
		$this->load->view('user/index', $data);
	}
}
