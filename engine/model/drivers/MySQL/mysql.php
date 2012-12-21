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
		
		$this->connection = new mysql
		(
			$host, $user, $pass, $db
		);
	}
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	This function disconnects the MySQL engine
	 */
	public function dbDisconnect()
	{
		if($this->connection->ping($this->connection) == true)
		{
			$this->connection->close();
		}
	}
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	This function reconnecs to the MySQL database, if the connection was dropped
	 */
	public function dbReconnect()
	{
		if(!$this->connection->ping($this->connection))
		{
			$this->connection->close($this->connection);
			
			$this->connection = new mysql
			(
				$host, $user, $pass, $db
			);
		}
	}
	
	/*--------------------------------------------------------------------------*/
	
	/*
	 *	This function cleans all data that is being inserted in the MySQL database
	 */
	public function cleanString($string)
	{
		return $this->connection->real_escape_string(stripslashes(strip_tags(htmlentities(htmlspecialchars($data)))));
	}
}
?>