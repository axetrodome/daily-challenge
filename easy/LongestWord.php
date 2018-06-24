<?php

/*
Challenge
*/

function LongestWord($str) {  
	$words = explode(' ', $str);

	$LongestWordLength = 0;
	$LongestWord = '';
	foreach ($words as $word) {
		$word = preg_replace('/[^A-Za-z0-9]/', '', $word);
		if(strlen($word) > $LongestWordLength){
			$LongestWordLength = strlen($word);
			$LongestWord = $word;
		}
	}

	return $LongestWord;
}
echo LongestWord('I Love programming');