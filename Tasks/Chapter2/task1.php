<?php

	Class WorkWithArr{

		private function filling_arr($N){
			for ($i = 0; $i < $N; $i++){
				$arr[$i] = rand(-10,100);
				echo '   '."  $arr[$i]   ".'   '; 
			}
			echo '</br>';

			for ($i = 0; $i < count($arr); $i++){
				if ($arr[$i] < 0){
					break;
				}
				echo ' '." $arr[$i] " . ' ';
			}
			
		}

		private function get_all_elements_up_to_the_first_negative($arr){
			for ($i = 0; $i < count($arr); $i++){
				if ($arr[$i] < 0){
					break;
				}
				echo ' '." arr[i] " . ' ';
			}
		}

		private function amount_after_the_last_item($arr){
			for ($i = 0)

		}

		public function main($N){
			$this ->filling_arr($N);
		}

	}

	$N = new WorkWithArr();
	$N -> main(10);

?>