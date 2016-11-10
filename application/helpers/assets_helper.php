<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Assets Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 */

// ------------------------------------------------------------------------

/**
 * Assets URL
 * 
 * Create a local URL based on your assets url.
 *
 * @access	public
 * @return	string
 */
if ( ! function_exists('assets_url'))
{
	function assets_url()
	{
		$CI =& get_instance();
		return $CI->config->slash_item('base_url') . $CI->config->slash_item('assets_url');
	}
}


/**
 * Assets DIR
 * 
 * Create a local DIR based on your assets url.
 *
 * @access	public
 * @return	string
 */
if ( ! function_exists('assets_dir'))
{
	function assets_dir()
	{
		$CI =& get_instance();
		return dirname(BASEPATH) . DIRECTORY_SEPARATOR . $CI->config->slash_item('assets_url');
	}
}

/* End of file assets_helper.php */
/* Location: ./application/helpers/assets_helper.php */