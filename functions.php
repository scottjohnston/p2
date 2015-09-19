<?php


Function readTextFile($fname)
{
	if(!file_exists($fname))
	{
		exit("exit");//could contain an exception
	}
	return $wordArray = file($fname, FILE_IGNORE_NEW_LINES);
}

function selectWords($words, $numOfWords, $separator, $camelCase)
{
	//pick a random word location 
	$wordNumber = array_rand($words);	

	//get the word from the array
	$password = $words[$numOfWords];

	//if more than one word is needed loop
	for ($x = 1; $x <= $numOfWords; $x++)
	{
		//pick the second word number from the array
		$wordNumber = array_rand($words);

		//add in the separator if selected
		if ($separator != NULL)
		{
			$password = $password . $separator;
		}

		//change the word to camel case if selected
		if ($camelCase != NULL)
		{
			$password = $password . ucwords($words[$wordNumber]);
		}
		else
		{
			//concatenate the final string
			$password = $password . $words[$wordNumber];
		}	
	}
	return $password;
}

function addSpecialChar ($words, $specChar, $numOfChars)
{
	for($x = 0;$x < $numOfChars; $x++ )
	{
		 $words = $words. $specChar;
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
	return substr($words, $maxLen);
}



?>