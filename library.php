<?php
/*
 * Library - EasyCode
 *
 * @author Ekene Aneke
*/

function usingClass($file) { require_once 'engine/class_base/' .$file. '.php'; }

usingClass('view');
usingClass('model');
usingClass('controller');

$view = new View();
$model = new Model();
$controller = new Controller();