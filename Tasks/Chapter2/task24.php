<?php 

	function search_the_longeset_zero_part_of_arr($arr){
		$max_lenght = 0;
		$tmp_max_length = 0;
		$start_index = 0;
		$finish_index = 0;

		for ($i = 0; $i < count($arr); $i++){
			if ($arr[$i] == 0){
				if ($tmp_max_length == 0){
					$tmp_start_index = $i;
				}
				$tmp_max_length++;
			}else{
				if ($tmp_max_length > $max_lenght){
					$max_lenght = $tmp_max_length;
					$finish_index = $i - 1;
					$start_index = $tmp_start_index;
				}
				$tmp_max_length = 0;
			}
		}
		echo " Максимальная длина $max_lenght Начало $start_index - конец $finish_index </br>";
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

	$massivee = create_arr_with_random_value(10,0,1);

	output_arr($massivee,1);
	search_the_longeset_zero_part_of_arr($massivee);