<?php 

	function find_amount_of_unique_elements($arr){
		for ($i = 0; $i < count($arr); $i++){
			$counter = 0;

			for ($j = 0; $j < count($arr); $j++){
				if ($arr[$i] == $arr[$j]){
					$counter++;
				}
			}

			if ($counter == 1){
				echo " $arr[$i] ";
			}
		}
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

	$massive = create_arr_with_random_value(10,1,20);

	output_arr($massive,1);
	find_amount_of_unique_elements($massive);