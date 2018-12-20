<?php 
	var_dump(CountSteps(5,5));

	function CountSteps($x,$y){
		$arr=[];
		for ($i=0; $i <$x ; $i++) { 
			for ($j=0; $j <$y ; $j++) { 
				$arr[$i][$j]=0;
			}
		}
		for ($i=0; $i <$x; $i++) {//给最外列的赋值为一 
			$arr[$i][0]=1;
		}
		for ($j=0; $j <$y; $j++) {//给最外行赋值为一 
			$arr[0][$j]=1;
		}

		for ($i=1; $i <$x; $i++) { 
			for ($j=1; $j <$y; $j++) { 
				$arr[$i][$j]=$arr[$i][$j-1]+$arr[$i-1][$j];
			}
		}
		return $arr[$x-1][$y-1];
	}
 ?>