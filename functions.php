<?php


Function readInFile($fname)
{
	if(!file_exists($fname))
	{
		throw new Exception("file not found");
	}
	else
	{
		return $wordArray = file($fname, FILE_IGNORE_NEW_LINES);
	}
}



function selectWords($words, $numOfWords, $separator)
{
	//pick a random word location 
	$wordNumber = rand(0, count($words));	

	//
	$password = "";

	//if more than one word is needed loop
	for ($x = 0; $x < $numOfWords; $x++)
	{
		//pick the second and subsequent word number from the array
		$wordNumber = rand(0, count($words));

		//test to see if camel code is selected
		if ($separator == "camel")
		{
			//Camel code the words
			//$password = ucwords($password);
			$password = $password . ucwords($words[$wordNumber]);
		}
		elseif ($x < 1)	
		{
			$password = $words[$wordNumber];
		}
		else
		{
			//concatenate the final string
			$password = $password . $separator . $words[$wordNumber];
		}			
	}
	return $password;
}




function addSpecialChar ($words, $specChar, $numOfChars)
{
	for($x = 0; $x < $numOfChars; $x++ )
	{
		$words = $words . $specChar;
	}
	return $words;
}	

function addNumbers ($words, $nWords)
{
	for ($x = 0; $x < $nWords; $x++)
	{
		$words = $words . rand(0,9);
	}
	return $words;
}

function maxlength ($words, $maxLen)
{
	return substr($words, 0, $maxLen);
}



?>