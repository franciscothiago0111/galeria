<?php
require 'environment.php';
global $config;  
$config  = array();
if(ENVIRONMENT == "development"){
	$config['dbname'] = 'galeria';
	$config['host'] = '127.0.0.1';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';

} else {
	$config['dbname'] = 'galeria';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';

}


?>