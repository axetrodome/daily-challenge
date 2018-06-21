<?php
/*
Challenge
Using the PHP language, have the function LetterCapitalize(str) take the str parameter being passed and capitalize the first letter of each word. Words will be separated by only one space. 

Sample Test Cases

Input:"hello world"
Output:"Hello World"

Input:"i ran there"
Output:"I Ran There"
*/
function LetterCapitalize($str) {  

	$str_array = explode(' ', trim(strtolower($str)));
	foreach ($str_array as $bit) {
		$words[] = ucfirst($bit);
	}
	$str = implode(' ', $words);

  return $str; 
}
echo LetterCapitalize('capitalize the first letter');