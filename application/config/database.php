<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 179.50.4.94)(PORT = 1521)) (CONNECT_DATA = (SERVICE_NAME = dbpaco.paco.com.co) (SID = dbpaco)))',//'179.50.4.68' > SN  dbpaco, 179.50.4.94 > SN dbpaco.paco.com.co
	'username' => 'PACOEME',
	'password' => 'propiedad1',
	'database' => 'dbpaco',
	'dbdriver' => 'oci8',
	'dbprefix' => '',
	'pconnect' => TRUE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',	
	'port' => '1521',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
