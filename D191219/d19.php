<?php 
	$arr = [12,23,39,48,57,64,72,81,93,105,110];
	$a = 110;
	$low = 0;
	$high = count($arr)-1;

	var_dump(find($arr,$a,$low,$high));

	function find($arr,$a,$low,$high){
		$mid = (intval($low+$high)/2);
		// return $mid;
		if ($arr[$mid] > $a) {
			return 	find($arr,$a,$low,$mid-1);
		}elseif ($arr[$mid] < $a) {
			return 	find($arr,$a,$mid+1,$high);
		}else{
			return floor($mid);
		}
	}
 ?>