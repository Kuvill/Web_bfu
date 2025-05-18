<?php

function increaseEnthusiasm( string $str ) {
	return $str . "!";
}

function repeatThreeTimes( string $str ) {
	return $str . $str . $str;
}
function cut( string $str, int $len = 10 ) {
	return substr( $str, 0, $len );
}

function printArr( array $arr, int $i = 0 ) {
	if( $i >= count($arr) ) {
		echo "\n";
		return;
	}

	echo $arr[$i] . " ";
	printArr( $arr, $i + 1 );
}

// Fix: function implemented
function sumDigitsUntilSingle( $number ) {
    $sum = $number;

    while ($sum > 9) {
        $sum = array_sum(str_split((string)$sum));
    }
    return $sum;
}

echo increaseEnthusiasm( "please" ) . "\n";

echo repeatThreeTimes( "over and over" ) . "\n";

echo increaseEnthusiasm( repeatThreeTimes( "no") ) . "\n";

