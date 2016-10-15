<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IndexTable extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
	}

	public function index()
	{
    $search_term = $this->input->post('search');

		$response = $this->execute_search($search_term);

		$data['somedata'] = $response;

		$this->load->view('indexTable', $data);
	}

	public function execute_search($search_term="php%20mysql")
	{
		$uri = "http://it-ebooks-api.info/v1/search/" . $search_term;
		$response = \Httpful\Request::get($uri)->addHeader('Accept', 'application/json')->send();

		return $response;
	}
}
