<?php
	Class WorkWithNumbers{

	const MAX_VALUE = 9999;

	public function search_numbers(){
		for ($i = 1000; $i <self::MAX_VALUE; $i++){
			$bool = $this ->check_number($i);

			if ($bool){
				echo $i . '</br>';
			}
		}
	}

	private function amount_of_digits($number){
		$length = (int) log10($number)+1;
		return $length;
	}

	private function check_number($number){
		$length = $this ->amount_of_digits($number);
		$max = 9;
		$tmp = $number;
		$stutus;

		for ($i = 0; $i < $length; $i++){
			if (($tmp % 10) < $max){
				$max = $tmp % 10;
				$tmp = floor($tmp/10);
			}else{
				break;
			}
		}
		if ($tmp == 0){
			$status = true;
		}else{
			$status = false;
		}
		return $status;
	}
}

	$N = new WorkWithNumbers();
	$N -> search_numbers();

?>