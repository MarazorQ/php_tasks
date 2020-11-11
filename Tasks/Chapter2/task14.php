<?php

	function split_arr_on_positive_and_negative_elements($arr){
		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] > 0){
				$new_arr_with_positive[$i] = $arr[$i];
			}

			if ($arr[$i] < 0){
				$new_arr_with_negative[$i] = $arr[$i];
			}
		}
		echo "массив положительных элементов: ";
		output_arr($new_arr_with_positive,1);

		echo "массив отрицательных элементов: ";
		output_arr($new_arr_with_negative,1);
	}

	function split_arr_on_even_and_uneven_elements($arr){
		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] % 2 == 0){
				$new_arr_with_even[$i] = $arr[$i];
			}

			if ($arr[$i] % 2 != 0){
				$new_arr_with_uneven[$i] = $arr[$i];
			}
		}
		echo "массив четных элементов";
		output_arr($new_arr_with_even,1);

		echo "массив нечетных элементов";
		output_arr($new_arr_with_uneven,1);
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

	function create_arr_with_random_value($size,$left_border,$rigth_border){
		for ($i = 0; $i < $size; $i++){
			$arr[$i] = rand($left_border,$rigth_border);
		}
		return $arr;
	}

	$massive = create_arr_with_random_value(20,-50,50);

	echo "Исходный массив :"; 
	output_arr($massive,1);

	split_arr_on_positive_and_negative_elements($massive);
	split_arr_on_even_and_uneven_elements($massive);


?>