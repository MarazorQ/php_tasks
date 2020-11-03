<?php

	Class WorkWithNumber{

		public  function range_of_numbers($N,$M){
			for ($i = $N; $i < $M; $i++){
				for ($j = 1; $j < $i; $j++){
					if (($i == $this ->sum_of_dilivers($j)) && ($j == $this ->sum_of_dilivers($i))){
						echo "$i and $j - дружественные </br>";
					}
				}
			}

		}

		private function sum_of_dilivers($number){
			$sum = 0;
			for ($i = 2; $i < $number; $i++){
				if ($number % $i == 0){
					$sum += $i;
				}
			}
			return $sum;
		}

	}

	$result = new WorkWithNumber();
	$result -> range_of_numbers(10,1000);
	
?>