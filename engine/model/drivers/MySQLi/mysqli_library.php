<?php
/*
 * MySQLi Library - EasyCode
 *
 * @author Weytin
*/
abstract class MySQLi_Library
{
	abstract protected function dbConnect();	// Calling the dbConnect(); function
	abstract protected function dbDisconnect();	// Calling the dbDisconnect(); function
	abstract protected function dbReconnect();	// Calling the dbReconnect(); function
}
?>
