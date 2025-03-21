<?php

function areGreaterTen( $lhs, $rhs ) {
	return ($lhs + $rhs) > 10;
} 

function eqaul( $lhs, $rhs ) {
	return $lhs == $rhs;
}

$test = 2;
echo !$test ? "true\n" : '';

$age = 55;
if( $age < 10 || $age > 99 ) {
	echo "the ege is out of range\n";

} else {
	$sum = array_sum(str_split((string)$age));

	if( $sum <= 9 ) {
		echo "digits sum is single-digit\n";

	} else {
		echo "digits sum is two-digit\n";
	}
}

$arr = [1, 2, 3];
if( count($arr) == 3 ) {
	echo array_sum($arr) . "\n";
}
