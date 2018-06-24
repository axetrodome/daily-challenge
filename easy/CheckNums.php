<?php 

function CheckNums($num1,$num2) { 
	if($num1 > $num2) {
		return "false";
	}elseif($num1 < $num2) {
		return "true";
	}else {
		return "-1";
	}
}

echo CheckNums(9,8);   
