<?php
	
	$arr = range('a', 'z');
	print_r($arr);

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";

	// Start 

	$text = "!xman in the zoo";
	echo strlen($text);
	$shift = 3;
	$result = "";

	for ($i=0; $i < strlen($text) ; $i++) { 
		echo " $text[$i] ";
	}

	echo "<br>";

	for ($i=0; $i < strlen($text) ; $i++) { 
		if (in_array($text[$i], $arr)) {
			# code...
			for ($j=0; $j < sizeof($arr); $j++) { 
			# code...
			// echo "$text[$i]";

				if ("$text[$i]" == "$arr[$j]") {
					# code...
					$a = ($j + $shift )%26;
					// echo "$arr[$a]";
					$result.=$arr[$a];	
				}	
			}		
		}else{
				$result.=$text[$i];
		}
	}
	echo "$result";
		
		echo "<br>";

	

?>