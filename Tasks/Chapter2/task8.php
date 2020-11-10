<?php

	function reshaffle_last_negative_and_max_element($arr){
		$last_negative_element;
		$max_element = 0;
		$index_of_last_negative_element;
		$index_of_max_element;

		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] < 0){
				$last_negative_element = $arr[$i];
				$index_of_last_negative_element = $i;
			}

			if ($arr[$i] > $max_element){
				$max_element = $arr[$i];
				$index_of_max_element = $i;
			}
		}

		output_arr($arr,1);//исходный массив

		$temp = $arr[$index_of_max_element];
		$arr[$index_of_max_element] = $arr[$index_of_last_negative_element];
		$arr[$index_of_last_negative_element] = $temp;

		output_arr($arr,1);//после перестановки

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

	$massive = array(1,2,17,-4,22,-7,9,14,-5);

	reshaffle_last_negative_and_max_element($massive);

?>