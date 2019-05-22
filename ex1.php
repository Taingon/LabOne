<?php
	
	$arr = range('a', 'z');
	print_r($arr);

	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";

	// Start 

	$text = "hello world, i am cs";
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
				$a = $j + $shift ;
				echo "$arr[$a]";	
			}			
		}
		echo "<br>";

	}

?>