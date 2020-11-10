<?php

	function reshaffle($arr){
		$max_element = 1;
		$min_element = 10;
		$index_of_max;
		$index_of_min;

		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] > $max_element){
				$max_element = $arr[$i];
				$index_of_max = $i;
			}

			if ($arr[$i] < $min_element){
				$min_element = $arr[$i];
				$index_of_min = $i;
			}
		}

		output_arr($arr,1);// массив до переставноки 
		//перестановка
		$temp = $arr[$index_of_max];
		$arr[$index_of_max] = $arr[$index_of_min];
		$arr[$index_of_min] = $temp;

		output_arr($arr,1);//после переставки

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

	reshaffle($massive);

?>