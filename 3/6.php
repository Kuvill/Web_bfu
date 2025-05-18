<?php
$a = 10;
$b = 3;

echo 'a % b = ' . $a % $b . "\n";

if( $a % $b == 0 ) {
	echo "Делится\n";
} else {
	echo "Делится с остатком " . $a % $b . "\n";
}

$st = pow( 2, 10 );
$sqrt = sqrt( 245 );

$array = array( 4, 2, 5, 19, 13, 0, 10 );
$sum = 0;
// Fix: added pow
foreach ( $array as $elem ) {
	$sum += $elem ** 2;
}

$sumSqrt = sqrt( $sum );
echo "Корень суммы квадратов" . $sumSqrt . "\n";

$sqrt = sqrt( 379 );
$sqrt0 = round( $sqrt, 0 );
$sqrt0 = round( $sqrt, 1 );
$sqrt0 = round( $sqrt, 2 );


$sqr = sqrt( 587 );
$map = ['floor' => floor($sqrt), 'ceil' => ceil($sqrt)];

$max = max( 4, 02, 5, 19, -130, 0, 10 );
$min = min( 4, 02, 5, 19, -130, 0, 10 );

echo "Случайное число (1-100): " . rand( 1, 100 )  . "\n";

// Fix: removed rand parameters
$array = array();
for( $i = 0; $i < 10; ++$i ) {
	$array[$i] = rand();
}

$a = 10;
$b = -20;
echo "Разница модулей $a и $b: " . abs($a) - abs($b) . "\n";

$a = 0;
$b = -20;
echo "Другой пример. $a, $b: " . abs($a) - abs($b) . "\n";

$array = array( 1, 2, -1, -2, 3, -3);
echo "new abs'ed massive: ";
foreach( $array as $elem ) {
	$elem = abs( $elem );
	echo  $elem;
} echo "\n";

$aNumber = 30;
$divs = array();
for ($i = 1; $i <= $aNumber; $i++) {
    if ($aNumber % $i == 0) {
        $divs[] = $i;
    }
}

$array = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );
$sum = 0;
for ($i = 0; $i < 10; ++$i) {
    if ($sum > 10) {
        echo "Нужно сложить $i первых чисел\n";
        break;
    }

    $sum += $array[$i];
}
