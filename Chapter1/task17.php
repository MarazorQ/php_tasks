<?php
	
	Class WorkWithNumber{
		//алгоритм Евклида
		static function NOD($N,$M){
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

	echo WorkWithNumber::NOD(50,125);

?>