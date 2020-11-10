<?php

	function search_elements($arr){
		$index_of_first_positive_element;
		$index_of_last_negative_element; 

		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] > 0){
				$index_of_first_positive_element = $i;
				break;
			}
		}

		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] < 0){
				$index_of_last_negative_element = $i;
			}
		}
		//Выводим до перестановки
		output_arr($arr,1);
		//Перестановка
		$arr = reshuffle($index_of_first_positive_element,$index_of_last_negative_element,$arr);
		//Вывод нового массива
		output_arr($arr,1);

	}

	function reshuffle($index_of_first_positive_element,$index_of_last_negative_element,$arr){
		$temp = $arr[$index_of_first_positive_element];
		$arr[$index_of_first_positive_element] = $arr[$index_of_last_negative_element];
		$arr[$index_of_last_negative_element] = $temp;

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

	$massive = array(1,-2,-3,-4,-5,6,7,-8,9,10);
	
	search_elements($massive);
?>