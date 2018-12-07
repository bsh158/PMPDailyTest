<?php 

	$str = countNum(array('1','9','33','4','5','6','7'));
	var_dump($str);


	function countNum($arr){
		$len=count($arr);
		for ($i=0; $i <$len; $i++) { 
			for ($j=$i+1; $j <$len ; $j++) { 
				if ($arr[$i]>$arr[$j]) {
					// intval($arr[$i].''.$arr[$j])>intval($arr[$j].''.$arr[$i])
					$tmp=$arr[$i];
					$arr[$i]=$arr[$j];
					$arr[$j]=$tmp;
				}
			}
		}
		$str = implode($arr);
		return $str;
	}
 ?>