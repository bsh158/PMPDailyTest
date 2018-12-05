<?php 
	//传值要找的第几项丑数
	$num = findUgly(20);
	var_dump($num);

	function isUgly($number){
		while ($number%2==0) {
			$number /= 2;
		}

		while ($number%3==0) {
			$number /= 3;
		}

		while ($number%5==0) {
			$number /= 5;
		}
		if ($number == 1) {
			return 1;
		}else{
			return 0;
		}
	}

	function findUgly($num){
		$count=0;//用来计算位置下标第几项
		$i=1;//用来判断是否为丑数
		while (1) {
			if (isUgly($i)) {
				$count++;
			}
			//判断如果找到传值项的丑数就返回
			if ($count == $num) {
				return $i;
			}else{
				//否则继续找
				$i++;
			}
		}
	}
 ?>