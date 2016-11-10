<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Model {

	/**
	 * Database table name
	 *
	 * @access public
	 */
	public $table = 'clients';

	/**
	 * Constructor of client class
	 *
	 * @access public
	 * @return void
	 */
    public function __construct()
    {
        parent::__construct();
    }
}

/* End of file client.php */
/* Location: ./application/models/client.php */