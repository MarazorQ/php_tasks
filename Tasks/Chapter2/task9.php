<?php

	function seach_maximum_even_element($arr){
		$max_even_element = 0;

		for ($i = 2; $i < count($arr); $i += 2){
			if ($arr[$i] > $max_even_element){
				$max_even_element = $arr[$i];
			}
		}

		output_arr($arr,2);
		echo "Maximum event element of array = $max_even_element </br>";
	}

	function search_minimum_uneven_element($arr){
		$minimum_uneven_element = 0;

		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] != 0){
				if ( $arr[$i] < $minimum_uneven_element){
					$minimum_uneven_element = $arr[$i];
				}
			}
		}
		echo "Minimum uneven element of array = $minimum_uneven_element </br>";
	}

	function output_arr($arr,$flag){
		switch ($flag) {
			case '1':
				foreach ($arr as $key) {
					echo "  $key  ";
				}
				break;
			
			case '2':
				print_r($arr);
				break;
		}
		echo '</br>';
	}

	$massive = array(-188,2,3,4,-500,6,-7,23,90,10);

	seach_maximum_even_element($massive);
	search_minimum_uneven_element($massive);

?>