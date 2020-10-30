<?php

	Class WorkWithNumber{

		public $counter = 0;

		public function get_all_dividers($number){
			for ($i = 2; $i <= $number; $i++){
				if ($number % $i == 0){
					echo  "Делитель : " . $i . '</br>';
					$counter++;
				}
			}
			return $counter;
		}

	}

	$N = new WorkWithNumber();
	 echo  "Количество делителей: " . $N -> get_all_dividers(65);

?>