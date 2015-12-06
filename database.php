<?php
if (!defined('SMF'))
	require_once('SSI.php');

global $modSettings, $smcFunc;

$smcFunc['db_add_column']('{db_prefix}members',array(
	'name' => 'cookie_hash',
	'type' => 'text',
	'null' => false
));
?>
