<?php
/*
 * MySQLi Library - EasyCode
 *
 * @author Ekene Aneke
*/

abstract class MySQLi_Library
{
	abstract protected function dbConnect();	// Calling the dbConnect(); function
	abstract protected function dbDisconnect();	// Calling the dbDisconnect(); function
	abstract protected function dbReconnect();	// Calling the dbReconnect(); function
	abstract protected function cleanString();	// Calling the cleanString(); function
	abstract protected function secureString();	// Calling the secureString(); function
}
?>