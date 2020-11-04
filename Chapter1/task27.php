<?php

	function search_number($N,$M){
		$number_with_max_sum;
		$mux_sum_of_simple_dilivers = 0;

		for ($i = $N; $i < $M; $i++){
			for($j = 2; $j < $i; $j++){
				if (sum_of_dilivers($i) > $mux_sum_of_simple_dilivers){
					$mux_sum_of_simple_dilivers = sum_of_dilivers($i);
					$number_with_max_sum = $i;
					echo "numer with max sum of simple diliveirs = $number_with_max_sum and sum of diliveirs = $number_with_max_sum </br>";// так нагляднее
				}
			}
		}
	}

	function simplicity_check($number){
		$result = true;

		if ($number > 1){
			for ($i = 2; $i < $number; $i++){
				if ($number % $i == 0){
					$result = false;
					break; 
				}
			}
		}else{
			$result = false;
		}
		return $result;
	}

	function sum_of_dilivers($number){
		$sum = 0;
		for ($i = 2; $i < $number; $i++){
			if ($number % $i == 0){
				if (simplicity_check($i)){
					$sum += $i;
				}
			}
		}
		return $sum;
	}


	search_number(10,1000);

?>