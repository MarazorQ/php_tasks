<?php

	function search_max_of_all_negative($arr){
		$max_of_negtive = -10;

		for ($i = 0; $i < count($arr); $i++){
			if (($arr[$i] < 0) && ($arr[$i] > $max_of_negtive)){
				$max_of_negtive = $arr[$i];
			}
		}
		return $max_of_negtive;
	}

	function search_min_of_all_positive($arr){
		$min_element = 10;

		for ($i = 0; $i < count($arr); $i++){
			if (($arr[$i] >= 0) && ($arr[$i] < $min_element)){
				$min_element = $arr[$i];
			}
		}
		return $min_element;
	}

	function create_arr_with_random_value($size,$left_border,$rigth_border){
		for ($i = 0; $i < $size; $i++){
			$arr[$i] = rand($left_border,$rigth_border);
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

	$massive = create_arr_with_random_value(50,-20,20);

	output_arr($massive,1);
	
	echo search_max_of_all_negative($massive) . "</br>";
	echo search_min_of_all_positive($massive);


?>