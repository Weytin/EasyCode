<?php
/*
 * View - CodeWave
 *
 * @author Ekene Aneke
*/

class View
{
	/*
	 *	Assigning the $param variable used for various functions in this file
	 */
	public $param = array();
	
	/*
	 *	Assigning the $x variable used for various functions in this file
	 */
	public $x;
	
	/*
	 *	Assigning the $value variable used for various functions in this file
	 */
	public $value;
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	Set all parameters
	 */
	public function setAll()
	{
		global $view;
		$this->appendParameter('hi', 'Wassup, dawg');
	}
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	This function enables you to assign a value to a variable
	 */
	public function appendParameter($key, $value)
	{
		$this->param['{' .$key. '}'] = $value;
		return true;
	}
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 * Filter all assigned variables
	 */
	 public function filter()
	 {
		$this->setAll();
		foreach($this->param as $key => $value)
		{
			$this->x = str_replace('{' .$key. '}', $value, $this->x);
		}
		
		return $this->x;
	 }
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	Fetch all the data needed for the template
	 */
	public function getTemplate($file)
	{
		if(file_exists('engine/view/' .$file. '.html'))
		{
			require_once 'engine/view/' .$file. '.html';
		}
		else
		{
			die("File could not be found!");
		}
	}
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	This function enables you to embed HTML in your PHP code.
	 */
	public function write($data)
	{
		$this->value .= $data.PHP_EOL;
		unset($this->value);
	}
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	Publishing all content in this class
	 */
	public function publish()
	{
		return $this->filter();
		return $this->x;
	}
}