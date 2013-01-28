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
	 *	Assigning the $model and $view variable used in various functions in this class
	 */
	protected $model, $view;
	
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
}
?>
