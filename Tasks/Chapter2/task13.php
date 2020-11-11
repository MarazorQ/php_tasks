<?php

	function search_two_max_and_min_element_of_arr($arr){
		$first_max = 1;
		$second_max = 0;
		$firs_min = 10;
		$second_min = 9;

		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] > $first_max){
				$second_max = $first_max;
				$first_max = $arr[$i];
			}

			if (($second_max < $arr[$i]) && ($arr[$i] != $first_max)){
				$second_max = $arr[$i];
			}

			if ($arr[$i] < $firs_min){
				$second_min = $firs_min;
				$firs_min = $arr[$i];
			}

			if(($second_min > $arr[$i]) && ($arr[$i] != $firs_min)){
				$second_min = $arr[$i];
			}
		}

		echo " Два максимальных элемента массива: $first_max, $second_max </br>";
		echo " Два минимальных элемента массива: $firs_min, $second_min </br>";
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

	$massive = create_arr_with_random_value(20,0,100);

	output_arr($massive,1);
	search_two_max_and_min_element_of_arr($massive);

?>