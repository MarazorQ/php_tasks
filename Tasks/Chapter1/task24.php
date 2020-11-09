<?php

	Class WorkWithNumber{

		private $number;

		public function main(){
			$this ->get_value_from_form();
			$this ->conversion_to_binary($this ->$number);
		}

		public function conversion_to_binary($number){
			$div = 2;

			while ($number > 0){
				if (($number % 2 == 0) || ($number % 2 == 1)){
					$res .= $number % 2;
				}
				$number = floor($number / 2);
			}
			echo strrev($res);
		}

		private function get_value_from_form(){

			if (isset($_POST['number'])){
				$this ->$number = $_POST['number'];
			}else{
				die("404");
			}
		}

	}
	
	$res = new WorkWithNumber();
	$res -> main();
?>


<form method="POST">
	<p style="color: red">Conversion to binary</p>
	<div class="block">
		<input type="text" name="number" placeholder="input...">
	</div>
	<div class="block">
		<input type="submit" name="translit" value = "translit">
	</div>
</form>