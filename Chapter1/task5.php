<?php 
	Class TransformNumber{

		public function get_number($number){
			$length = $this ->amount_of_digits($number);
			$tmp = $number;

			for ($i = 0; $i < $length; $i++){
				$max = $tmp % 10;
				$M .= $max;
				$tmp = floor($tmp/10);
		    }
			echo $M;
		}

		private function amount_of_digits($number){
			$length = (int) log10($number)+1;
			return $length;
		}
	}
	
	$N = new TransformNumber();
	$N -> get_number(123456789);
	
?>