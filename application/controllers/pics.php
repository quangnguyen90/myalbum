<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pics extends CI_Controller {
	public function __construct() {
		parent::__construct();

		ob_start();
		$this->load->model('picModel');
	}

	public function index()
	{
		redirect('/pics/show');
	}

	public function show()
	{
		$data = array();
		$data['pics'] = $this->picModel->getAllPictureList();
		$this->load->view('v_pic', $data);
	}

}

/* End of file pics.php */
/* Localtion: ./application/controller/pics.php */