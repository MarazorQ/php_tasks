<?php

	function check_number($number){
		$length = amount_of_digits($number);
		$max = 9;
		$tmp = $number;

		for ($i = 0; $i < $length; $i++){
			if (($tmp % 10) <= $max){
				$max = $tmp % 10;
				$tmp = floor($tmp/10);
			}else{
				break;
			}
		}
		if ($tmp == 0){
			echo "образует";
		}else{
			echo "не образует";
		}
	}

	// узнаем их количество
	function amount_of_digits($number){
		$length = (int) log10($number)+1;
		return $length;
	}
	check_number(123);
?>