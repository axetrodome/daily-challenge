<?php  
/*

Challenge
Using the PHP language, have the function SimpleAdding(num) add up all the numbers from 1 to num. For example: if the input is 4 then your program should return 10 because 1 + 2 + 3 + 4 = 10. For the test cases, the parameter num will be any number from 1 to 1000. 

*/
function simpleAdding($num) {

	$sum = [];	
	for($i = 1; $i <= $num; $i++) {
		$sum[] = $i;
	}

	return array_sum($sum);
}

echo simpleAdding(12);