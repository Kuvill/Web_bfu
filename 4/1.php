<?php
$str = "ahb acb aeb beeb adcb axxeb";
preg_match_all( "/b..b/", $str, $matches );

print_r( $matches[0] );
