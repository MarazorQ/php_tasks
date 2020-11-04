<?php 

	function search_numbers($N,$M){
		$sum_of_numbers = 0;
		$count_of_numbers = 0;

		for ($i = $N; $i < $M; $i++){
			if ($i == sum_of_factorial($i)){
				$sum_of_numbers += $i;
				$count_of_numbers++;
				echo "$i </br>";
			}
		}
		echo " count = $count_of_numbers </br> sum = $sum_of_numbers";
	}

	function factorial($number){
		if ($number == 0) {
        	return 1;
    	}
    	return factorial($number - 1) * $number;
	} 

	function sum_of_factorial($number){
		$sum = 0;

		while ($number >= 1){
			$digit = $number % 10;
			$sum += factorial($digit);
			$number = floor($number / 10);
		}
		return $sum;
	}

	search_numbers(10,100000);

?>