<?php 
	header('content-type:text/html;charset=utf8');
	$data = dailyOne('Have you ever gone shopping and');
	var_dump($data);
	function dailyOne($str){
		$res = '';
		$arr[] ='';
		for ($i=0,$len=strlen($str); $i <$len ; $i++) { 
			if (isset($arr[$str[$i]])) {
				$arr[$str[$i]]++;
			}else{
				$arr[$str[$i]]=1;
			}

			if ($arr[$str[$i]]==3) {
				echo "字符共出现".$arr[$str[$i]]."次<br>";
				return $str[$i];
				break;
			}
		}
		
	}
 ?>