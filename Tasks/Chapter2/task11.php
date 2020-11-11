<?php

	function search_first_negative_element_before_the_maximum($arr){
		$negative_element;
		$max_element = 0;

		for ($i = 0; $i < count($arr); $i++){
			if (($arr[$i] < 0) && ($arr[$i + 1] > $max_element)){
				$max_element = $arr[$i+1];
				$negative_element = $arr[$i];
			}
		}
		return $negative_element;
	}

	function search_last_positive_element_after_negative($arr){
		$min_element = 10;
		$max_element = 0;

		for ($i = 0; $i < count($arr); $i++){
			if (($arr[$i] < $min_element) && ($arr[$i + 1] > $max_element)){
				$min_element = $arr[$i];
				$max_element = $arr[$i + 1];
			}
		}
		return $max_element;
	}

	$massive = array(1,-2,3,4,-5,6,-7,9,10,-8);

	echo search_first_negative_element_before_the_maximum($massive);
	echo '</br>';
	echo search_last_positive_element_after_negative($massive);

?>