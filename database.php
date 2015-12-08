<?php
if (!defined('SMF'))
	require_once('SSI.php');

global $modSettings, $smcFunc;

$smcFunc['db_add_column']('{db_prefix}members',array(
	'name' => 'cookie_hash',
	'type' => 'text',
	'null' => false
));

$smcFunc['db_change_column']('{db_prefix}members',array(
	'name' => 'passwd',
	'type' => 'varchar',
	'size' => 255,
	'null' => false
));


$smcFunc['db_create_table']('{db_prefix}rsa_keys', array(
	array('name' => 'key_id', 'type' => 'int', 'null' => false, 'auto' => true),
	array('name' => 'privKey', 'type' => 'text', 'null' => false),
	array('name' => 'pubKey', 'type' => 'text', 'null' => false),
	array('name' => 'ts', 'type' => 'timestamp', 'null' => false)
), array(
	array('type' => 'primary', 'columns' => array('key_id'))
));
?>
