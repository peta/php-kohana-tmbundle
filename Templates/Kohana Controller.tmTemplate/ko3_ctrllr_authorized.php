<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Your description here
 *
 * @package    untitled
 * @author     ${TM_FULLNAME}
 * @copyright  (c) ${TM_DATE} ${TM_ORGANIZATION_NAME}
 * @license    All rights reserved.
 */

class Controller_${TM_NEW_FILE_BASENAME} extends Controller_Authorized {
	
	public $secure_actions = array(
		'create'	=> array('login', 'author'),
		'show' 		=> array('login'),
		'edit'		=> array('login', 'author'),
		'delete'	=> array('login', 'author')
	);
	
	/**
	 * Instance members ... set by method resource_available
	 *
	 * @var ORM | NULL
	 */
	protected $foo;
	
	public function action_index()
	{
		die('action_index');
	}
	
	public function action_show()
	{
		if ( ! $this->resource_available('foo'))
			return;
			
		die('action_show');
	}
	
	public function action_create()
	{
		if (Request::$method === 'GET')
		{
			die('action_create via GET');
		} // End GET
		
		if (Request::$method === 'POST')
		{
			die('action_create via POST');
		} // End POST		
	}
	
	public function action_edit()
	{
		if ( ! $this->resource_available('foo'))
			return;
			
		if (Request::$method === 'GET')
		{
			die('action_edit via GET');
		} // End GET
		
		if (Request::$method === 'POST')
		{
			die('action_edit via POST');
		} // End POST
	}
	
	public function action_delete()
	{
		if ( ! $this->resource_available('foo'))
			return;
		
		if (Request::$method === 'GET')
		{
			die('action_delete via GET');
		} // End GET
		
		if (Request::$method === 'POST')
		{
			die('action_delete via POST');
		} // End POST
	}
		
} // End Controller_${TM_NEW_FILE_BASENAME}
