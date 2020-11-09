<?php
	Class WorkWithNumbers{

		const MAX_NUMBER = 9999;

		public function search_numbers(){
			for ($i = 1000; $i < self::MAX_NUMBER; $i++){
				$a = floor($i / 1000);// 1я цифры
				$b = floor(($i / 100) % 10);// 2ая цифра
				$c = floor(($i / 10) % 10);// 3я цифра
				$d = floor($i % 10);// 4я цифра

				if (($a == 0 || $a == 2 || $a == 3 || $a == 7) && ($b == 0 || $b == 2 || $b == 3 || $b == 7) && ($c == 0 || $c == 2 || $c == 3 || $c == 7) && ($d == 0 || $d == 2 || $d == 3 || $d == 7)){
					echo "$i </br>";
				}
			}
		}
	}

	$N = new WorkWithNumbers();
	$N -> search_numbers();
?>
