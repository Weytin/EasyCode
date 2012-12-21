<?php
/*
 * MySQL Library - EasyCode
 *
 * @author Weytin
*/

abstract class MySQL_Library
{
	abstract protected function dbConnect();	// Calling the dbConnect(); function
	abstract protected function dbDisconnect();	// Calling the dbDisconnect(); function
	abstract protected function dbReconnect();	// Calling the dbReconnect(); function
	abstract protected function cleanString();	// Calling the cleanString(); function
}
?>