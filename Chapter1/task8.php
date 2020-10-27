<?php 
	
	Class WorkWithNumber{

		public function search_numbers(){
			for ($i = 1000; $i < 9999; $i++){
				$a = floor($i / 1000);// 1я цифры
				$b = floor(($i / 100) % 10);// 2ая цифра
				$c = floor(($i / 10) % 10);// 3я цифра
				$d = floor($i % 10);// 4я цифра

				if (($a != $b && $a != $c && $a != $d) && ($b != $c && $b != $d) && ($с != $d) && ($d != $c)){
					echo "$i </br>";
				}
			}
		}

	}

	$N = new WorkWithNumber();
	$N -> search_numbers();

?>