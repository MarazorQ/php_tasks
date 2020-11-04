<?php 
	// класс для нахождения суммы делителей(родительский класс)
	Class A{

		protected $sum;

		protected function sum_of_dilifers($number){
			$sum = 0;
			
			for ($i = 2; $i < $number; $i++){
				if ($number % $i == 0){
					$sum += $i;	
				}			
			}
			return $sum;
		}

	}

	// класс наследник (выводит результата)
	Class B extends A{

		private $max_sum_of_dilivers = 0;
		private $maximum_element_index;

		public function search_numbers($N,$M){
			for ($i =$N; $i < $M; $i++){
				$sum = 0;
				$sum = parent::sum_of_dilifers($i);

				if ($sum > $max_sum_of_dilivers){
					$max_sum_of_dilivers = $sum;
					$maximum_element_index = $i;
					$this ->output($maximum_element_index,$max_sum_of_dilivers);//вывожу все значения, так как более наглядно
				}
			}
			//$this ->output($maximum_element_index,$max_sum_of_dilivers);
		}

		private function output($i,$max){
			echo "Number of max sum of dilivers $i with sum: $max </br>";
		}

	}

	$get_result = new B();
	$get_result -> search_numbers(10,1000);

?>