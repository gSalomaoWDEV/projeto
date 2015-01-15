<?php  

	header('Content-Type: text/html; charset=utf-8');  
	include 'autoload.php';
	
	spl_autoload_register("autoload");
  
	use \lib\Functions\CheckLength as CheckLength;
	
	$b = new CheckLength("amor", "upper", "-12");
	echo $b->checkUpper();
	echo $b->checkLower();