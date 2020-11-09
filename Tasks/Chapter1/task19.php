<?php
	
	Class NOD{
		//алгоритм Евклида
		protected function greatest_common_factor($N,$M){
			while ($N != 0 && $M != 0){
				if ($N > $M){
					$N = $N % $M;
				}else{
					$M = $M % $N;
				}
			}
			return $N + $M;
		}

	}

	Class NOK extends NOD{

		public function least_common_multiple($N,$M){
			echo ($N*$M)/(parent::greatest_common_factor($N,$M));
		}

	}

	$getting_the_result = new NOK();
	$getting_the_result -> least_common_multiple(10,5);

?>