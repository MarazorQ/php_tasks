<?php

	function factorization($number){
		$div = 2;
		echo "$number = 1 ";

		while ($number > 1){
			while ($number % $div == 0) {
				echo "*  $div ";
				$number = floor($number / $div);
			}
			$div++;
		}
		echo '</br>';
	}	

	factorization(20);
	factorization(126);
	factorization(12);
	factorization(1226);
?>