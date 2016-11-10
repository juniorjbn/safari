<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	/**
	 * Database table name
	 *
	 * @access public
	 */
	public $table = 'users';

	/**
	 * Constructor of user class
	 *
	 * @access public
	 * @return void
	 */
    public function __construct()
    {
        parent::__construct();
    }

	/**
	 * Return all teammates users 
	 *
	 * @access public
	 * @return array
	 */
    public function get_all_teammates()
    {
		$this->load->model('profession');
	
		$this->db->from($this->table . ' u');
		$this->db->select('u.*, ' . 'p.description as profession');
		$this->db->where(array('teammate' => 1, 'u.status_id' => ENABLED));
		$this->db->join($this->profession->table . ' p', 'p.id = profession_id');
		
		return $this->db->get();
    }
}

/* End of file user.php */
/* Location: ./application/models/user.php */