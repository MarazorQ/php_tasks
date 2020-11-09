<?php
	
	Class WorkWithNumebr{

		private $sum_of_dilivers;

		static function find_perfect_numbers($N,$M){
			for ($i = $N; $i < $M; $i++){
				$sum_of_dilivers = null;
				for ($j = 1; $j < $i; $j++){
					if ($i % $j == 0){
						$sum_of_dilivers += $j;
					}
				}
				if ($i == $sum_of_dilivers){
					echo "$i </br>";
				}
			}
		}

	}

	WorkWithNumebr::find_perfect_numbers(1,10000);

?>