<?php 
	
	$sum = calFn();
	print_r($sum);

	function calFn($n=100,$m=1300){
		$sum=0;
		for ($i=$n; $i <=$m ; $i++) { 
			$sum += substr_count($i,1);
		}
		return $sum;
	}
	
	// function calFn($n=100,$m=1300){
	// 	$arr=[];
	// 	$sum=0;
	// 	for ($i=$n; $i <=$m ; $i++) { 
	// 		$g=$i%10;
	// 		$s=($i/10)%10;
	// 		$b=(($i/10)/10)%10;
	// 		$q=((($i/10)/10)/10)%10;
	// 		if ($g==1) {
	// 			$arr[]=$i;
	// 			$sum++;
	// 		}
	// 		if ($s==1) {
	// 			$arr[]=$i;
	// 			$sum++;
	// 		}
	// 		if ($b==1) {
	// 			$arr[]=$i;
	// 			$sum++;
	// 		}
	// 		if ($q==1) {
	// 			$arr[]=$i;
	// 			$sum++;
	// 		}
	// 	}
	// 	return $sum;
	// }
 ?>