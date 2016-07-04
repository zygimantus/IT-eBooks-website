<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IndexTable extends CI_Controller {

	public function index()
	{
		$uri = "http://it-ebooks-api.info/v1/search/php%20mysql";
		$response = \Httpful\Request::get($uri)->addHeader('Accept', 'application/json')->send();

		$data['somedata'] = $response;

		$this->load->view('index', $data);
	}
}
