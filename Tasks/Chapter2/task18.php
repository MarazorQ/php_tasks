<?php

	function find_the_unique_elements($arr){
		for ($i = 0; $i < count($arr); $i++){
			$counter = 1;

			for ($j = 0; $j < count($arr); $j++){
				if (($arr[$i] == $arr[$j]) && ($i != $j)){
					$counter = 0;
					break;
				}
			}

			if ($counter == 1){
				echo "  $arr[$i]  ";
			}
		}
	}

	$massive = array(1,2,3,4,5,5,6,7,8,9,10);

	foreach ($massive as $key) {
		echo "   $key   ";

	}

	echo "</br>";

	find_the_unique_elements($massive);

?>