<?php  
/*
Challenge
Using the PHP language, have the function LetterChanges(str) take the str parameter being passed and modify it using the following algorithm. Replace every letter in the string with the letter following it in the alphabet (ie. c becomes d, z becomes a). Then capitalize every vowel in this new string (a, e, i, o, u) and finally return this modified string. 

Hint
Changing a character to the next one that appears in the alphabet can easily be achieved by using the letters character code (ASCII).
*/

function letterChanges($str){
	$str = strtolower($str);
	$alphabets = range('a', 'z');
	$vowels = ['a','e','i','o','u'];
	$str_array = str_split($str);
	$collected_letters = [];

	foreach ($str_array as $string_bits) {
		if(in_array($string_bits, $alphabets)) {
			$key = array_search($string_bits, $alphabets);
			$collected_letters[] = in_array($alphabets[$key + 1],$vowels) 
									? strtoupper($alphabets[$key + 1]) 
									: $alphabets[$key + 1];
			$str = implode('', $collected_letters);
		}
	}
	return $str;
}

echo letterChanges('Hello');