<?php

$array = [1, 2, 3, 4, 5];
$avg = array_sum($array) / count($array);

$sum = array_sum(range( 1, 100 ));

$array = [1, 4, 9, 16];
$roots = array_map( 'sqrt', $array );

$alphabet = array_combine(range( 'a', 'z' ), range( 1, 26 ));

$str = '1234567890';
$pairs = str_split($str, 2);
$sums = array_sum($pairs);

