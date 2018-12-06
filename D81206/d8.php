<?php 
	$sum = LastRemaining_Solution(20,6);
	var_dump($sum);
	function LastRemaining_Solution($n,$m){
		$arr=[];
		//分配小朋友编号
		for ($i=0; $i <$n ; $i++) { 
			$arr[]=$i;
		}

		//开始报数直到剩下最后一人停止
		while (count($arr) != 1) {
			//当报数到m数字后,编号为m-1的小朋友出去
			for ($i=0; $i <$m ; $i++) { 
				//array_shift 当前人报完数之后还在队列里边等待下次报数
				array_push($arr,array_shift($arr));
			}
			//本轮报数结束编号m-1出去
			echo array_pop($arr); echo "  ";
		}
		return $arr;//返回最后一人编号
	}
?>