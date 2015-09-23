#This is Project 2 for Dwa15 Scott Johnston password generator

##logic.php

requires functions.php it then imports a word list from a file on the server

inputs the list into an array 

places the values from the $_GET super global into an array 

sets up a couple of default values that will load when the page loads

Depending on which values the user has selected logic calls functions

from functions.php and generates a password that is displayed at the 

end of the file with an echo command

##functions.php

###readInFile - 

reads a file into an array removing the new line spaces at

the end and throws an exception if the file does not exist

###selectWords - selects the words from the array of words and concatenates them

with the selector

###addSpecialChar -

calls randomSpecChars and concatenates the number of special chars required

###addNumbers - 

concatenates a random number between 1 and 1000 to the end of the string

###maxLength

returns a substring of the password 

###randomSpecChars

returns a random special character from an array of special chars

##index.php 

similar template to project one there is some custom css in scottsCss.css

##scottsCss.css

resizes the text boxes and aligns the different headings so that they all look

good on a phone screen as well as a pc Provides some color for the password

[p2.scottvjohnston.me](http://p2.scottvjohnston.me/)

[screen cast link is](http://screencast.com/t/Gfoo9TbjXXyp)
