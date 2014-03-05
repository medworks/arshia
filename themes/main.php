<?php
	ob_start(); 
	include_once("./themes/inc/index-content.php");
	$page_content = ob_get_contents();
	ob_end_clean();	
	include_once("./themes/inc/header.php");
	echo $page_content;
	include_once("./themes/inc/footer.php");
?>