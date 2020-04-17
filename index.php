<?php
/*Scott Thompson
  4/17/2020
  sthompson.greenriverdev.com/328/index.php
  Pair Program
*/
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo "PHP Array Practice <br>";

$numbers = array( 7, 9, 8, 9,
    8, 8, 6);

include('functions.php');

printArr($numbers);
