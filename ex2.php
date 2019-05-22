<?php
	
	$arr = range('A', 'Z');
	print_r($arr);

	echo "<br>";
	echo "<br>";

	// Start 

	$text = "KHOOR ZRUOG, L DP FV";
	echo strlen($text);
	$shift = 3;

	for ($i=0; $i < strlen($text) ; $i++) { 
		echo " $text[$i] ";
	}

	echo "<br>";

	for ($i=0; $i < strlen($text) ; $i++) { 
		for ($j=0; $j < sizeof($arr); $j++) { 
			# code...
			// echo "$text[$i]";

			if ("$text[$i]" == "$arr[$j]") {
				# code...
				$a = $j - $shift ;
				echo "$arr[$a]";	
			}			
		}
		echo "<br>";

	}

?>