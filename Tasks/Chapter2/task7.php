<?php

	function search_given_items($arr){
		$max_sum = 5;
		$min_sum = 10;
		$index_of_max;
		$index_of_min;

		for ($i = 1; $i < count($arr); $i++){
			if (($arr[$i-1] + $arr[$i]) > $max_sum){
				$max_sum = $arr[$i-1] + $arr[$i];
				$index_of_max = $i;
			}

			elseif (($arr[$i-1] + $arr[$i]) < $min_sum) {
				$min_sum = $arr[$i-1] + $arr[$i];
				$index_of_min = $i;
			}
		}

		echo "max = $index_of_max ; min = $index_of_min";
	}

	$massive = array(1,2,3,4,5,6,7,8,9,10);

	search_given_items($massive);
?>