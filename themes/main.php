<?php
	ob_start(); 
	$page_content = ob_get_contents();
	ob_end_clean();	
	include_once("./themes/inc/header.php");
	echo $page_content;
	include_once("./themes/inc/index-content.php");
	include_once("./themes/inc/footer.php");
?>