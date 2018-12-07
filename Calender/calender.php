<?php 
	header('content-type:text/html;charset=utf8');

		$y = isset($_GET['y'])?$_GET['y']:2019;
		$m = isset($_GET['m'])?$_GET['m']:1;

	$date = calender($y,$m);
	if (isset($date)) {
		
		$week = date('w',strtotime("$y-$m-1"));
		$n=date('d',time());
		require 'calShow.html';
	}

	function calender($y,$m){
		//每月的天数
		$monsD=cal_days_in_month(CAL_GREGORIAN, $m, $y);

		$date=[];
		for ($i=1; $i <=$monsD; $i++) { 
			$date[$i]=$i;
		}
		return $date;
	}
 ?>