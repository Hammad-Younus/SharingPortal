<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/games');
	}

}

/* End of file games.php */
/* Location: ./application/controllers/games.php */