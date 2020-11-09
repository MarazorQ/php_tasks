<?php 
	function search_for_given_numbers($number){
		for ($i = 1000; $i < 9999; $i++){
			if (((($i / 1000) % 10) + (($i / 100) % 10) + (($i / 10) %10) + ($i % 10) ) == $number){
				echo $i . '<br/>';	
			}
		}

	}

	function main(){
		if (isset($_POST['number'])){
			$N = $_POST['number'];
			search_for_given_numbers($N);
		}
	}

	main();
?>

<form method="POST">
	<label>Число должно быть меньше или равно 35!</label>
	<div>
		<input type="text" name="number">
		<input type="submit" name="" >
	</div>
</form>