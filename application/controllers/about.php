<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public $show_banner = FALSE;
	public $active = array('','active', '', '', '');
	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->model('user');
		
		$data = array();
		
		$user = new User();
		$data['teammates'] = $user->get_all_teammates();
		
		$structure_path = 'img' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR .  'structure' . DIRECTORY_SEPARATOR;
		$structure_dir = assets_dir() . $structure_path;
		
		$files = scandir($structure_dir);
		$data['structure'] = 0;
		
		foreach($files as $file)
		{
			if (TRUE === is_file($structure_dir . $file) && $file != '.DS_Store')
			{
				$data['structure']++;
			}
		}
		
		$this->load->view('about/index', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */