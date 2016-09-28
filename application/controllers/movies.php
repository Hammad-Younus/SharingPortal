<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/movies');		
	}

}

/* End of file movies.php */
/* Location: ./application/controllers/movies.php */