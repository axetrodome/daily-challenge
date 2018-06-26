<?php
/*
Challenge
Using the PHP language, have the function SimpleSymbols(str) take the str parameter being passed and determine if it is an acceptable sequence by either returning the string true or false. The str parameter will be composed of + and = symbols with several letters between them (ie. ++d+===+c++==a) and for the string to be true each letter must be surrounded by a + symbol. So the string to the left would be false. The string will not be empty and will have at least one letter. 

Sample Test Cases

Input:"+d+=3=+s+"
Output:"true"


Input:"f++d+"
Output:"false"

*/
function SimpleSymbols($str) {
	$r = 'true';  
    $str = strtolower($str);
    $letters = str_split($str);
    foreach($letters as $key => $value) {
        if(preg_match('/[a-z]/', $value)) {
	        if($key == 0 || $letters[$key-1] != '+') {
	            $r = 'false';
	        }elseif(!array_key_exists($key+1, $letters)){
	        	$r = 'false';
	        }elseif($letters[$key+1] != '+') {
	            $r = 'false';
	            echo $count;
	        }
        }
    }
    return $r;
}
   
// keep this function call here  
echo SimpleSymbols('+====++++=+d');  


