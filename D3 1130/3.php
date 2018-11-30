<?php 
	require 'Paper.php';
	$par = new Paper();
	$num = '10';
	
	$arr = $par->notRecursion($num);
	var_dump($arr);

	// $arr = $par->isRecursion($num);
	// var_dump($arr);
 ?>