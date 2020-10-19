<?php
	// извлекаем цифры из числа
	function extracting_digits($number){
		$length = amount_of_digits($number);
		$arr_of_digits;
		for ($i = 0; $i < $length; $i++) {
			$arr_of_digits[$i] = $number % 10;
			$number /= 10;
			
		}
		return $arr_of_digits;
	}

	// узнаем их количество
	function amount_of_digits($number){
		$length = (int) log10($number)+1;
		return $length;
	}

	// меняем число , чтобы цифры следовали по возрастанию
	function sort_digits($arr){
		for ($i = 0; $i < count($arr) - 1; $i++){
			for ($j = count($arr) - 1; $j > $i; $j-- ){
				if ($arr[$j - 1] > $arr[$j]){
					$temp = $arr[$j - 1];
					$arr[$j - 1] = $arr[$j];
					$arr[$j] = $temp;
				}
			}
		}

		for ($i = 0; $i < count($arr); $i++){
			$num .= $arr[$i];
		}

		echo $num . '</br>';
	}

	function main(){
		if (isset($_POST['number'])){
			$N = extracting_digits(htmlentities($_POST['number']));
			sort_digits($N);
		}
	}

	main();
 ?>

<form method="POST">
	<input type="text" name="number" placeholder="Введите целое число...">
	<input type="submit" name="" value="send">
</form>