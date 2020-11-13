<?php

	function find_the_last_positive_element($arr,$p){
		$last_miltiplay_posotive = 0;
		$last_miltiplay_posotive_index;

		for ($i = 0; $i < count($arr); $i++){
			if (($arr[$i] > 0) && ($arr[$i] % 2 == 0) && ($arr[$i] % $p == 0)){
				$last_miltiplay_posotive = $arr[$i];
				$last_miltiplay_posotive_index = $i;
			}
		}
		$arr[$last_miltiplay_posotive_index] = $last_miltiplay_posotive_index;
		$arr[count($arr) - 1] = $arr[$last_miltiplay_posotive_index];

		output_arr($arr,2);

		echo "$last_miltiplay_posotive </br>";
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

	$massive = create_arr_with_random_value(20,-10,10);

	output_arr($massive,2);
	find_the_last_positive_element($massive,2);