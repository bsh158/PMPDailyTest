<?php 
		
		for ($i=1; $i < 1000; $i++) { 
			if (isset($i)) {
				$return = dailyTwo($i);
				if (!empty($return)) {
					var_dump($return);
				}
			}
		}

	function dailyTwo($str){
		$res = '';

		$g = $str%10;
		$s = $str/10%10;
		$b = $str/100%10;
		$sum = ($b*$b*$b)+($s*$s*$s)+($g*$g*$g);
		if ($sum == $str) {
			return $str;
		}
	}
 ?>