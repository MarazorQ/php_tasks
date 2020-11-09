<?php
	
	Class WorkWithNumbers{

		private function get_sum($number){
			while($number >= 1){
				$sum_of_digit += $number % 10;
				$number = floor($number / 10);
			}
			return $sum_of_digit;
		}

		public function priint_element_of_sequence($n,$m){
			for ($i = $n; $i < $m; $i++){
				if ($i % $this ->get_sum($i) == 0){
					echo $i . '</br>';
				}
			}

		}

	}

	$N = new WorkWithNumbers();
	$N -> priint_element_of_sequence(1, 500);

?>