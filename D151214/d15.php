<?php 

	var_dump(FirstNotRepeatingChar('Hellow World!'));

	function FirstNotRepeatingChar($str){
		$sum='';
		$arr=[];

		for ($i=0; $i <strlen($str); $i++) { 
			if (!isset($arr[$i])) {
				$arr[$str[$i]]=1;	
			}
			if ($arr[$str[$i]] == 1) {
				return $str[$i];
			}else{
				return -1;
			}
		}

	}

 ?>