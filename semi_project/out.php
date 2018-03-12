<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/init.php';
	
	$tpl->define('body', 'out.html');

	$tpl-> print_('body');
?>