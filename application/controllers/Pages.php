<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("modelContent");
		$this->load->library('form_validation');
	}

	// query all content
	public function queryAll()
	{
		return $this->modelContent->getAll();
	}

	// view pages
	public function view($page = 'home')
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			show_404();
		}

		$data['title']	 = ucfirst($page);
		$data['content'] = $this->queryAll();

		$this->load->view('templates/header', $data);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer', $data);
	}
}
