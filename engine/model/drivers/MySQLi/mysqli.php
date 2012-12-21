<?php
/*
 * MySQLi Database - EasyCode
 *
 * @author Ekene Aneke
*/

if(!defined('INDEX')) { die('This file contains valid information, which you cannot view.'); }
class MySQLi_Database extends MySQLi_Library
{
	public $connection;
	
	public function dbConnect()
	{
		// Connect all parameters
		global $_CONFIG;
		$host = $_CONFIG['db']['host'];
		$user = $_CONFIG['db']['user'];
		$pass = $_CONFIG['db']['pass'];
		$db = $_CONFIG['db']['name'];
		
		$this->connection = new mysqli
		(
			$host, $user, $pass, $db
		);
	}
	
	public function dbDisconnect()
	{
		if(!empty($this->connection) || $this->connection == true)
		{
			$this->connection->close();
		}
		
		return false;
	}
	
	public function dbReconnect()
	{
		if(empty($this->connection->ping) || $this->connection == false)
		{
			$this->connection->reconnect($this->connection);
		}
		
		return true;
	}
	
	public function cleanString($string)
	{
		return $this->connection->real_escape_string(addlashes(htmlentities(htmlspecialchars($string))));
	}
	
	public function secureString($string)
	{
		return $this->connection->real_escape_string(stripslashes(strip_tags(htmlentities(htmlspecialchars($string)))));
	}
}
?>