<?php
/*
APLICATIVO TESTE - RAMON MOURA (MANYMINDS)
------------------------------
By: Ramon Felipe de Moura santos
E-mail: ramonmoura2012@gmail.com
Todos os direitos reservados
*/
defined('BASEPATH') OR exit('No direct script access allowed');


$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'cruddbci',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => TRUE, // TRUE-> Para hospedagem
	'failover' => array(),
	'save_queries' => TRUE
);
