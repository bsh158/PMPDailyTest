<?php 
	header('content-type:text/html;charset=utf8');

	/**
	 * 
	 */
	class Paper
	{
		function notRecursion($num){
			if ($num==0 || $num==1) {
				return $num;
			}

			$arr[0]=0;
			$arr[1]=1;
			for ($i=2; $i < $num; $i++) { 
				$arr[$i] = $arr[$i-1]+$arr[$i-2];
			}
			return $arr;
		}

		function isRecursion($num){
			if ($num==0 || $num==1) {
				return $num;
			}

			return ($this->isRecursion($num-1)+$this->isRecursion($num-2));
		}
	}
 ?>