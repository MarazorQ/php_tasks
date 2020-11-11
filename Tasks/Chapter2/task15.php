<?php

	function check_arr_on_sequence($arr,$k,$x){
		$sequence = 0;

		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] == $x){
				$sequence++;
			}
		}

		if ($sequence == $k){
			echo "Такая последовательность есть!";
		}else{
			echo "Такой последовательности нет!";
		}
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

	$massive = create_arr_with_random_value(20,-10,10);

	output_arr($massive,1);
	check_arr_on_sequence($massive,2,2);

?>