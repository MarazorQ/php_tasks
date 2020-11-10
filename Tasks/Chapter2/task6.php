<?php

	function find_maximum_even_elements($arr){
		$max_element = 0;

		output_arr($arr,1);

		for ($i = 2; $i < count($arr); $i += 2){
			if ($arr[$i] > $arr[$max_element]){
				$max_element = $arr[$i];
				$arr[$i] = $i;
			}
		}
		output_arr($arr,1);
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

	find_maximum_even_elements($massive);

?>