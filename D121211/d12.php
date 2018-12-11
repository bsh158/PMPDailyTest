<?php 
	
	var_dump(Sum_Solution(100));
	function Sum_Solution($num){
		$res=$num;

		$num && $res=$num+Sum_Solution($num-1);

		return $res;
	}
 ?>