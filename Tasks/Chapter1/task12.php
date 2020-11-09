<?php
	
	Class WorkWithNumber{

		function __construct($number){
			$this ->get_number($number);
		}
		

		private function get_number($number){
			if ($this ->simplicity_check($number)){
				echo "Простое";
			}else{
				echo "Составное";
			}
		}

		private function simplicity_check($number){
			$result = true;

			if ($number > 1){
				for ($i = 2; $i < $number; $i++){
					if ($number % $i == 0){
						$result = false;
						break; 
					}
				}
			}else{
				$result = false;
			}
			return $result;
		}

	}

	$N = new WorkWithNumber(10);
	
?>