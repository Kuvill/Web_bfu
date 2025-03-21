<?php

function increaseEnthusiasm( string $str ) {
	return $str . "!";
}

echo increaseEnthusiasm( "please" ) . "\n";

function repeatThreeTimes( string $str ) {
	return $str . $str . $str;
}

echo repeatThreeTimes( "over and over" ) . "\n";

echo increaseEnthusiasm( repeatThreeTimes( "no") ) . "\n";

function cut( string $str, int $len = 10 ) {
	return substr( $str, 0, $len );
}

function printArr( array $arr, int $i = 0 ) {
	if( $i >= count($array) ) {
		echo "\n";
		return;
	}

	echo $arr[$i] . " ";
	printArr( $arr, $i + 1 );
}


function downGrade( $number ) {
    $digits = str_split((string)$number);

    $sum = array_sum($digits);

    if ($sum > 9) {
        return sumDigitsUntilSingle( $sum );
    }

    return $sum;
}

