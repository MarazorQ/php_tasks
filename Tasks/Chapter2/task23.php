<?php 

	function finde_elements_wich_occurring_more_than_once($arr){
		$arr_with_ununique_elements = array();

		for ($i = 0; $i < count($arr); $i++){
			$ununique_element = null;
			$count_of_ununique_elements = 0;

			for ($j = 0; $j < count($arr); $j++){
				if ($arr[$i] == $arr[$j]){
					$ununique_element = $arr[$i];
					$count_of_ununique_elements++;
				}
			}

			if ($count_of_ununique_elements > 1){
				array_push($arr_with_ununique_elements, $ununique_element);
			}
		}
		echo "Повторяющиеся элементы массива:";
		output_arr($arr_with_ununique_elements,1);

		finde_the_min_element($arr_with_ununique_elements);
	}

	function finde_the_min_element($arr){
		$min = 10;

		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] < $min){
				$min = $arr[$i];
			}
		}
		echo " Минимальный элемент среди повторяющихся  $min  ";
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

	output_arr($massive,1);
	finde_elements_wich_occurring_more_than_once($massive);