<?php 

	function get_average_of_the_first_elements($arr,$item_number){
		for ($i = 0; $i < $item_number; $i++){
			$average += $arr[$i];
		}
		return $average / $item_number;
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

	function create_new_arr($arr,$item_number){
		for ($i  = 0; $i < count($arr); $i++){
			$new_arr[$i] = $arr[$i];
		}
		$new_arr[$item_number] = get_average_of_the_first_elements($arr,$item_number);
		
		output_arr($arr,1);
		output_arr($new_arr,1);
	}

	$massive = array(1,2,3,4,5,6,7,8,9,10);
	create_new_arr($massive,5);

?>