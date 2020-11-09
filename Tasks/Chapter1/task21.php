<?php
	//алгоритм Евклида(Числа называются взаимно простыми, если НОД = 1)
	 function greatest_common_factor($N,$M){
		while ($N != 0 && $M != 0){
			if ($N > $M){
				$N = $N % $M;
			}else{
				$M = $M % $N;
			}
		}
		return $N + $M;
	}

	function output($N,$M){
		echo "Numbers $N and $M are coprime</br>";
	}

	function mutually_simple($N,$M){
		if (greatest_common_factor($N,$M) == 1){
			return output($N,$M);
		}
		echo "Numbers $N and $M are not coprime </br>";
	}

	mutually_simple(2,5);
	mutually_simple(13,16);
	mutually_simple(35,88);
	mutually_simple(25,5);

?>