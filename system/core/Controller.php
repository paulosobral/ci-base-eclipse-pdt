<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Application Controller Class
 *
 * This class object is the super class that every library in
 * CodeIgniter will be assigned to.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/general/controllers.html
 */
class CI_Controller {

	private static $instance;
	
	/**
	 *
	 * @var CI_User_agent
	 */
	public $agent;
	
	/**
	 *
	 * @var CI_Benchmark
	 */
	public $benchmark;
	
	/**
	 *
	 * @var CI_Calendar
	 */
	public $calendar;
	
	/**
	 *
	 * @var CI_Cart
	 */
	public $cart;
	
	/**
	 *
	 * @var CI_Config
	 */
	public $config;
	
	/**
	 *
	 * @var CI_DB_active_record
	 */
	public $db;
	
	/**
	 *
	 * @var CI_Email
	 */
	public $email;
	
	/**
	 *
	 * @var CI_Encrypt
	 */
	public $encrypt;
	
	/**
	 *
	 * @var CI_Form_validation
	 */
	public $form_validation;
	
	/**
	 *
	 * @var CI_FTP
	 */
	public $ftp;
	
	/**
	 *
	 * @var CI_Input
	 */
	public $input;
	
	/**
	 *
	 * @var CI_Image_lib
	 */
	public $image_lib;
	
	/**
	 *
	 * @var CI_Language
	 */
	public $lang;
	
	/**
	 *
	 * @var CI_Loader
	 */
	public $load;
	
	/**
	 *
	 * @var CI_Output
	 */
	public $output;
	
	/**
	 *
	 * @var CI_Pagination
	 */
	public $pagination;
	
	/**
	 *
	 * @var CI_Parser
	 */
	public $parser;
	
	
	/**
	 * @var CI_Router
	 */
	public $router;
	
	/**
	 *
	 * @var CI_Session
	 */
	public $session;
	
	/**
	 *
	 * @var CI_Table
	 */
	public $table;
	
	/**
	 *
	 * @var CI_Trackback
	 */
	public $trackback;
	
	/**
	 *
	 * @var CI_Typography
	 */
	public $typography;
	
	/**
	 *
	 * @var CI_Unit_test
	 */
	public $unit;
	
	/**
	 *
	 * @var CI_Upload
	 */
	public $upload;
	
	/**
	 *
	 * @var CI_URI
	 */
	public $uri;
	
	/**
	 *
	 * @var CI_Xmlrpcs
	 */
	public $xmlrpcs;
	
	/**
	 *
	 * @var CI_Zip
	 */
	public $zip;
	
	/**
	 * Constructor
	 */
	public function __construct()
	{
		self::$instance =& $this;

		// Assign all the class objects that were instantiated by the
		// bootstrap file (CodeIgniter.php) to local class variables
		// so that CI can run as one big super object.
		foreach (is_loaded() as $var => $class)
		{
			$this->$var =& load_class($class);
		}

		$this->load =& load_class('Loader', 'core');

		$this->load->initialize();
		
		log_message('debug', "Controller Class Initialized");
	}

	public static function &get_instance()
	{
		return self::$instance;
	}
}
// END Controller class

/* End of file Controller.php */
/* Location: ./system/core/Controller.php */