<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php

	include_once 'inc/init.php';

	$popup = post('is_popup', 'N');

	set_cookie('is_popup', $popup, 60);
?>
<script>
	window.close();
</script>