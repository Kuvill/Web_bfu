<?php

$array = [];
for( $i = 0; $i < 10; ++$i ) {
	$array[$i] = str_repeat( 'x', $i );
}

function arrayFill( mixed $value, int $len ) {
	return array_fill( 0, $len, $value );
}

$array = arrayFill( 'x', 5 );
print_r( $array );

$vec2 = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ( $vec2 as $row ) {
	foreach( $row as $elem ) {
		$sum += $elem;
	}
} echo $sum . "\n"; 

// Fix: added the task
$vec2 = [];
for( $i = 0; $i < 3; ++$i ) {
    for( $j = 0; $j < 3; ++$j ) {
        $array[$i][$j] = ($i+1)*($j+1);
    }
}

$array = [2, 5, 3, 9];
$result = $array[0] * $array[1] + $array[2] * $array[3];

$user = [ 'name' => 'John', 'surname' => 'Smith', 'patronymic' => 'Smithov' ];
echo "Initial: {$user['surname']} {$user['name']} {$user['patronymic']}\n";

$date = [ 'year' => date('Y'), 'month' => date('m'), 'day' => date('d') ];
echo "today: {$date['year']}-{$date['month']}-{$date['day']}\n";

$arr = [ 'a', 'b', 'c', 'd', 'e' ];
echo count( $arr ) . "\n";
echo end( $arr ) . "\n";
echo prev( $arr ) . "\n";
