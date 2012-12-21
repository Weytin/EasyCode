<?php
/*
 * Index - EasyCode
 *
 * @author Weytin
*/
define('INDEX', true);

require_once 'library.php';

$page = !empty($_GET['url']) ? $_GET['url'] : 'index';

	$view->getTemplate($page);
	
$view->publish();
?>