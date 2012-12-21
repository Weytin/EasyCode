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
	 *	Assigning the $model variable used in various functions in this class
	 */
	protected $model;
	
	/*
	 *	Assigning the $view variable used in various functions in this class
	 */
	protected $view;
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	Fetching the 'Model' class
	 */
	public function getModel()
	{
		return $this->model;
	}
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	Fetching the 'View' class
	 */
	public function getView()
	{
		return $this->view;
	}
}
?>