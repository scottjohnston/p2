<?php
	require_once "functions.php";
	$wordLilst = readTextFile("wordList.txt");

	

	foreach ($_GET as $key => $value) 
	{
		$getArray[$key] = $value;
	}

	print_r($getArray);


	$pass = selectWords($wordLilst, $getArray["numberOfWords"], $getArray["separator"]);



	echo "<br>" . $pass;








?>