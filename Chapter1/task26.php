<?php

	function search_numbers($N,$M){
		$max_sum_of_dilivers = 0;
		$number_with_max_sum;
		$sum;

		for ($i = $N; $i < $M; $i++){
			for ($j = 2; $j < $i; $j++){
				if (sum_of_dilivers($i) > $max_sum_of_dilivers){
					$max_sum_of_dilivers = sum_of_dilivers($i);
					$number_with_max_sum = $i;
					echo "number with max sum = $number_with_max_sum and sum = $max_sum_of_dilivers </br>";//так нагляднее
				}
			}
		}
	}

	function sum_of_dilivers($number){
		$sum = 0;
		for ($i = 2; $i < $number; $i++){
			if ($number % $i == 0){
				$sum += $i;
			}
		}
		return $sum;
	}

	search_numbers(10,1000);

?>