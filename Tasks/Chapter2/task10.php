<?php

	function search_max_and_min_elements_of_arr($arr){
		$max_element_of_arr = 0;
		$min_element_of_arr = 10;

		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] > $max_element_of_arr){
				$max_element_of_arr = $arr[$i];
			}

			if ($arr[$i] < $min_element_of_arr){
				$min_element_of_arr = $arr[$i];
			}
		}

		output_arr($arr,2);

		$arr = replacing_array_elements($arr,$max_element_of_arr,$min_element_of_arr);

		output_arr($arr,2);
	}

	function replacing_array_elements($arr,$max_element_of_arr,$min_element_of_arr){
		for ($i = 0; $i <count($arr); $i++){
			if ($arr[$i] % 2 == 0){
				$arr[$i] = $max_element_of_arr;
			}

			if ($arr[$i] % 2 != 0){
				$arr[$i] = $min_element_of_arr;
			}
		}
		return $arr;
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

	$massive = array(1,2,3,4,5,6,7,8,9,10);

	search_max_and_min_elements_of_arr($massive);

?>