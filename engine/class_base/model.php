<?php
/*
 * Model - EasyCode
 *
 * @author Weytin
*/

if(!defined('INDEX')) { die('This file contains valid information, which you cannot view.'); }
class Model
{
  public function __construct()
  {
		$connect = R::setup('mysql:host=' .Config::read('sql.host'). ';dbname=' .Config::read('sql.db'). '',Config::read('sql.user'), Config::read('password'));
		return $connect;
	}
	
	public function insert()
	{
		$rows = array(
		$key => $value
		);
		
		$query = "INSERT INTO users (`" .implode(',', $rows). "`)";
		$query2 = "VALUES ('" .implode(',', $rows). "')";
	}
}
?>
