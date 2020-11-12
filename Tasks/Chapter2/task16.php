<?php

	function search_sequence($arr){
		$max_lenght = 1;
		$tmp_lenght = 1;

		for ($i = 0; $i < count($arr) - 1; $i++){
			if ($arr[$i] == $arr[$i + 1]){
				$tmp_lenght++;

				if ($tmp_lenght > $max_lenght){
					$max_lenght = $tmp_lenght;
				}
			}else{
				$tmp_lenght = 1;
			}
		}
		echo "$max_lenght </br>";
	}

	function create_arr_with_random_value($size,$left_border,$right_border){
		for ($i = 0; $i < $size; $i++){
			$arr[$i] = rand($left_border,$right_border);
		}
		return $arr;
	}

	function output_arr($arr,$flag){
		switch ($flag) {
			case '1':
				foreach ($arr as $key){
					echo "  $key ";
				}
				break;
			
			case '2':
				print_r($arr);
				break;
		}
		echo "</br>";
	}

	$massive = create_arr_with_random_value(20,0,2);

	output_arr($massive,1);
	search_sequence($massive);
?>