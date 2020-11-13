<?php 

	function find_unique_elements_of_arr($arr){
		$arr_with_unique_elements = array();

		for ($i = 0; $i < count($arr); $i++){
			$element_index = null;
			$counter = 0;
				

			for ($j = 0; $j < count($arr); $j++){
				if ($arr[$i] == $arr[$j]){
					$element_index = $arr[$i];
					$counter++;
				}
			}

			if ($counter == 1){
				array_push($arr_with_unique_elements,$element_index);
			}
		}
		echo " Массив уникальных элементов :";
		output_arr($arr_with_unique_elements,1);

		find_the_max_element($arr_with_unique_elements);
	}

	function find_the_max_element($arr){
		$max = 0;

		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] > $max){
				$max = $arr[$i];
			}
		}
		echo "Максимальный элемент среди уникальных $max </br>";
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

	$massive = create_arr_with_random_value(10,0,20);

	echo " Исходный массив: ";
	output_arr($massive,1);

	find_unique_elements_of_arr($massive);
