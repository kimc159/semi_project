<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
	include_once 'inc/bbs_init.php';

	$tpl->define('body', 'write.html');

	$tpl->print_('body');
?>