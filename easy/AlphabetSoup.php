<?php
/*
Challenge
Using the PHP language, have the function AlphabetSoup(str) take the str string parameter being passed and return the string with the letters in alphabetical order (ie. hello becomes ehllo). Assume numbers and punctuation symbols will not be included in the string. 
Sample Test Cases

Input:"coderbyte"
Output:"bcdeeorty"

Input:"hooplah"
Output:"ahhloop"
*/
function AlphabetSoup($str) {

	$pattern = '/[^a-zA-Z]/';

	$str = preg_replace($pattern, '', $str);
	$array_string = str_split($str);
	
	sort($array_string);
	$ordered = implode('', $array_string);
	return $ordered; 

}
echo AlphabetSoup('coderbyte');