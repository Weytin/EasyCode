<?php
/*
 * Controller - EasyCode
 *
 * @author Weytin
*/

if(!defined('INDEX')) { die('This file contains valid information, which you cannot view.'); }
class Controller
{
	/*
	 *	Assigning the $model, $view and $config variable used in various functions in this class
	 */
	protected $model, $view, $config;
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	Fetching the 'Model' class
	 */
	public function model()
	{
		return $this->model;
	}
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	Fetching the 'View' class
	 */
	public function view()
	{
		return $this->view;
	}
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	Fetching the 'Config' class
	 */
	 public function config()
	 {
	 	return $this->config;	
	 }
	 }
}
?>
