<?php
	
	Class NumberProcessing{

		const MAX_VALUE = 10000;

		private $counter = 0;

		function __construct(){
			$this ->pair_simple_numbers();
		}

		private function pair_simple_numbers(){
			for ($i = 2; $i < self::MAX_VALUE; $i++){
				if ($this ->simplicity_check($i)){
					for ($j = 0; $j < $i; $j++){
						if ($this ->simplicity_check($j) && ($i - $j == 2)){
							echo "$i - $j = 2 : pair simple </br>";
							$counter++;

							if ($counter >= 10){
								exit();
							}
						}
					}
				}
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

	$N = new NumberProcessing();

?>