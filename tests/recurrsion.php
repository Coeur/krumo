<?php /**
* Test rendering arrays with recurrsion dependency inside them
*/

error_reporting(E_ALL);
include __DIR__ . '/../class.krumo.php';

// creating an array that has one of its elements pointing to itself
//
$a1 = array(1,2,3);
$a1[] =& $a1;
$a1[] = 4;
krumo($a1);

// $GLOBALS array has a recurring reference to itself in its elements
//
krumo($GLOBALS);
