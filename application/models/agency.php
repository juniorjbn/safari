<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agency extends CI_Model {

	/**
	 * Database table name
	 *
	 * @access public
	 */
	public $table = 'agencies';

	/**
	 * Constructor of agency class
	 *
	 * @access public
	 * @return void
	 */
    public function __construct()
    {
        parent::__construct();
    }
}

/* End of file agency.php */
/* Location: ./application/models/agency.php */