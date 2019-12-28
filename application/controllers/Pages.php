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

	// edit content
	public function edit($id = null)
	{
		if (!isset($id)) redirect('');
		$content = $this->modelContent;
		$validation = $this->form_validation;
		$validation->set_rules($content->rules());

		if ($validation->run()) {
			$content->update();
			$this->session->set_flashdata('success', 'berhasil disimpan');
		}

		$data['content'] = $content->getById($id);
		if (!$data['content']) show_404();

		$this->load->view('', $data);
	}

	// delete content
	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->modelContent->delete($id)) {
			redirect(base_url('dashboard'));
		}
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
