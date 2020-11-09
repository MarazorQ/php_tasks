<?php
	
	Class WorkWithNumbers{

		private function check_numbers($number){
			$tmp = $number;
			$result = true;

			while ($tmp >= 1){
				$digit = $tmp % 10;
				$reverse_number .= $digit;
				$tmp = floor($tmp / 10);
			}

			if ($number != $reverse_number){
				$result = false;
			}

			return $result;
		}

		public function search_numbers($number){
			for ($i = 0; $i < $number; $i++){
				if ($this ->check_numbers($i)){
					if ($this ->check_numbers($i * $i)){
						echo "$i - palendrom and  his square($i * $i = " . $i * $i . ") is palendrom </br>";
					}
				}
			}
		}

	}

	$N = new WorkWithNumbers();
	$N -> search_numbers(424);

?>