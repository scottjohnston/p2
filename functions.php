<?php
/*functions.php Project 2 Scott Johnston dwa15-
*is a collection of functions to simplify the generation of a 
* password it is included into the logic file that drives the site
*/

/** readInFile is a function to read in a list of words 
*   The function checks to see if the file exists and then loads it
*   into and array using the built in php function file with the 
*   FILE_IGNORE_NEW_LINES property set to prevent spaces at the ends 
*   of the words
*
*   the link to the list of words used in the program 
*   is from this site http://www.mieliestronk.com/corncob_lowercase.txt 
*   I got the link from a fellow student in piazza	
*/

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

/**selectWords generates the initial string of words to create a
*  password it. 
*  $words an array that contains the words to be selected from
*  $numberOfWords contains the number of words to be concatenated
*  $separator contains the symbol to be placed between the words or
*  the string camel that will generate capitals at the beginning of 
*  every word
*
*  the result is returned as a string
*/

function selectWords($words, $numOfWords, $separator)
{
	//pick a random word location 
	$wordNumber = rand(0, (count($words) - 1));	

	//initialize the string variable
	$password = "";

	//if more than one word is needed loop
	for ($x = 0; $x < $numOfWords; $x++)
	{
		//pick the second and subsequent word number from the array
		$wordNumber = rand(0, (count($words) - 1));

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


/**addSpecialChars calls randomSecChars and concatenates the requested number of
*  special characters to the end of a string passed in as a parameter and returns 
*  the result
*  $words the password string that is to have the chars added to
*  $numOfChars how many random chars to add to the password
*/

function addSpecialChar ($words, $numOfChars)
{
	for($x = 0; $x < $numOfChars; $x++ )
	{
		$words = $words . randomSpecChars();
	}
	return htmlspecialchars($words);
}

/**addNumbers accepts a password string and concatenates numbers between 1 and 1000
*  to the end of the password and returns the string
*  $words the string to have the numbers added too
*/	

function addNumbers ($words)
{
	$words = $words . rand(1,1000);
	return $words;
}

/**maxLength shortens the length a password by returning the string up to the length 
*  specified
*  $words the string to be shortened
*  $maxLength the length of the string 
*/

function maxLength ($words, $maxLen)
{
	return substr($words, 0, $maxLen);
}

/** randomSecChars creates and array of special chars and then returns one
*   randomly selected with the built in rand function and returns it
*/
function randomSpecChars ()
{
	$specCharArray = array("@", "%", "+", "\\", "/", "'", "!", "#", "$", "^", "?", ":", ".", "(", ")", "{", "}", "[", "]", "~", "_" );
	return $specCharArray[rand(0, (count($specCharArray) - 1))];
}

?>