<?php
$str = "a1b2c3";

$processed = preg_replace_callback( "/\d+/", function( $matches ) {
	return (string)((int)($matches[0] ** 2 ));
}, $str );

echo $processed . "\n";
