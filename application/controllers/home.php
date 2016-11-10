<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public $show_banner = TRUE;
	public $active = array('','', '', '', '');
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		//$this->output->cache(1440); // one day
		$this->load->view('home/index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */