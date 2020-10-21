<?php 
	//
	function find_the_number_of_digits($number){
		$length = amount($number);
		$counter = 0;
        for ($i = 0; $i < $length; $i++) {
        	if (($number % 10) < 5){
        		$counter++;
        	}
        	$number /= 10;
        }
       echo "Количество цифр в числе меньших 5: $counter";
	}
	//поиск общего кол-ва цифр в числе
	function amount($number){
		$length = (int) log10($number)+1;
		return $length;
	}

	if (isset($_POST['number'])){
		$N = htmlentities($_POST['number']);
		find_the_number_of_digits($N);
	}
	
?>
<form method="POST">
 	<input type="text" name="number" placeholder="Введите натурально число..">
 	<input type="submit" value="send">	
</form>
