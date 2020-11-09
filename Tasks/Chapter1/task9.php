<?php

	Class WorkWithNumber{

		public function check_number($number){
			$number_square = $number * $number;
			
			while ($number >= 1){
				if (($number % 10) != ($number_square % 10)){
					echo "no";
					return false;
				}

				$number /= 10;
				$number_square /= 10;
			}

			echo "yes";
		}
	}

	$N = new WorkWithNumber();
	$N -> check_number(25);

?>

