<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$clear_name = &$very_bad_unclear_name;
$clear_name .= " from kfc\n";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";
