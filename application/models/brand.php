<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Brand extends CI_Model {

	/**
	 * Database table name
	 *
	 * @access public
	 */
	public $table = 'brands';

	/**
	 * Constructor of brand class
	 *
	 * @access public
	 * @return void
	 */
    public function __construct()
    {
        parent::__construct();
    }
}

/* End of file brand.php */
/* Location: ./application/models/brand.php */