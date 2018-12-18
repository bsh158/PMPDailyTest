<?php 
	function NumberOf1($n){
		$count=0;
		while ($n) {
			if ($n >> 3 & 1) {
				$count++;
			}
		}
		return $count;
	}

	echo NumberOf1(9);
	// echo 9 >> 2;
 ?>