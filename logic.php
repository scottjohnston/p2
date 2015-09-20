<?php
	
	//import the functions	
	require_once "functions.php";

	//import the word list
	try 
	{
		$wordList = readInFile("wordList.txt");
	}
	catch (Exception $e)
	{
		echo "Error : " . $e->getMessage();
		$wordList = 0;
	}

	//create the array to hold the user dater and load $_GET into it
	$userArray = array(); 
	foreach ($_GET as $key => $value) 
	{
		$userArray[$key] = $value;
	}

	//Declare default values for variables
	$numberOfWords = 4;
	$separator = "";

	//check that the variable keys exist in the userArray and load them if they do
	if (array_key_exists("numberOfWords", $userArray ) && is_numeric($userArray["numberOfWords"]))
		$numberOfWords = $userArray["numberOfWords"];
	if (array_key_exists("separator", $userArray ))
		$separator = $userArray["separator"];
		
	//build the word portion of the password
	$passWords = selectWords($wordList, $numberOfWords, $separator);

	//if special characters are selected add them to the end
	if (array_key_exists("numSpecChar", $userArray ) && is_numeric($userArray["numSpecChar"]))
		$passWords = addSpecialChar($passWords,"@", $userArray["numSpecChar"] );

	//add a random number between 0 and 9 to the end of the password
	if (array_key_exists("numberInc", $userArray ))
		$passWords = addNumbers ($passWords, $userArray["numberInc"]);

	//chop the password down to the maximum length if required - cuts from the front
	if (array_key_exists("maximumLength", $userArray ) && is_numeric($userArray["maximumLength"]) && ($userArray["maximumLength"] > 0 ) )
		$passWords = maxlength($passWords, $userArray["maximumLength"] );




	//display the password
	echo "<br>" . $passWords;// . "<br> is here";


	//debug
	//print_r($userArray);







?>