<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contactus extends CI_Controller {

	public $show_banner = FALSE;
	public $active = array('','', '', '', 'active');
	
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view('contactus/index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */