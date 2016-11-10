<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profession extends CI_Model {

	/**
	 * Database table name
	 *
	 * @access public
	 */
	public $table = 'professions';

	/**
	 * Constructor of profession class
	 *
	 * @access public
	 * @return void
	 */
    public function __construct()
    {
        parent::__construct();
    }
}

/* End of file profession.php */
/* Location: ./application/models/profession.php */