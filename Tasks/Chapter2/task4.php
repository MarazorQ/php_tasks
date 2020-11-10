<?php

	function search_the_number_of_given_pairs($arr){
		$counter = 0;

		for ($i = 1; $i < count($arr); $i++){
			if (($arr[$i] == $arr[$i-1])){
				$counter++;
			}
		}
		echo "Кол-во таких пар с одинаковыми соседями: $counter </br>";
	}

	$massive = array(1,1,2,3,4,4,5,6,7,7,8,9,10,10);

	search_the_number_of_given_pairs($massive);

?>