<?php
	
	$arr = range('a', 'z');
	print_r($arr);

	echo "<br>";
	echo "<br>";

	// Start 

	$text = "kill john";

	//print the lenth of stirng and display that string
	echo strlen($text);
	$shift = 3;

	for ($i=0; $i < strlen($text) ; $i++) { 
		echo " $text[$i] ";
	}

// break
	echo "<br>";

	// Do the random

	$random = array_rand($arr,3);

	echo $arr[$random[0]];
	echo $arr[$random[1]];
	echo $arr[$random[2]];

// Break
	echo "<br>";


	for ($i=0; $i < strlen($text); $i++) {
		echo "$text[$i]";
		echo $arr[$random[0]];
		echo $arr[$random[1]];
		echo $arr[$random[2]];
	}

	echo "<br>";

	// test code from internet
	
	

?>