<?php
/*
 * MySQL Database - EasyCode
 *
 * @author Weytin
*/

class MySQL_Database extends MySQL_Library
{
	/*
	 *	Assigning the $connection variable used in various functions in this class
	 */
	public $connection;
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	This function connects to the MySQL engine
	 */
	public function dbConnect()
	{
		// Connecting all parameters
		global $_CONFIG;
		$host = $_CONFIG['db']['host'];
		$user = $_CONFIG['db']['user'];
		$pass = $_CONFIG['db']['pass'];
		$db = $_CONFIG['db']['name'];
		
		$this->connection = mysql_connect($host, $user, $pass);
	}
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	This function disconnects the MySQL engine
	 */
	public function dbDisconnect()
	{
		if($this->connection == true)
		{
			$this->connection->close();
			unset($this->connection);
		}
	}
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	This function reconnecs to the MySQL database, if the connection was dropped
	 */
	public function dbReconnect()
	{
		if($this->connection == false)
		{
			do()
			{
				$this->dbConnect();
			}
			while(die('The MySQL connection was dropped...attempting to reconnect.'))
		}
	}
}
?>
