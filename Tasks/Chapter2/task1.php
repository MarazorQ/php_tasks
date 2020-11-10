<?php

	function fill_arr($size){
		for ($i = 0; $i < $size; $i++){
			$arr[$i] = rand(-5,5); 
		}
		return $arr;
	}

	function output_arr($arr,$flag){
		echo " Исходный массив : ";

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

	function amount_after_the_last_item($arr){
		$sum = 0;

		for ($i = 0; $i < count($arr); $i++){
			$sum += $arr[$i];

			if ($arr[$i] < 0){
				$sum = 0;
			}
		}
		echo " Сумма элеметнов после последнего отрицательного элемента : $sum </br>";
	}

	function get_all_elements_up_to_the_first_negative($arr){
		$counter = 0;

		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] < 0){
				echo "Количество элементов предшествующих первому отрицательному : $counter </br>";
				break;
			}
			$counter++;
		}
	}

	$massive = fill_arr(20);
	output_arr($massive,1);// Второй входной параметр 1 или 2. Это способы вывода , 1- обычный вывод , 2 - prin_r
	get_all_elements_up_to_the_first_negative($massive);
	amount_after_the_last_item($massive);
	
?>