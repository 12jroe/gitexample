<?php

$name = 'JOOHN';

if($name == 'JOHN' && substr($name, -1) == 'N') {
	echo "John is in all caps";
} else {
	echo "John is not in all caps";
}

$number = 20;

if($number < 10) {
	echo 'Number is less than ten';	
} else if($number < 15) {
	echo 'Number is less than fifteen';
} else if($number < 21) {
	echo 'Number is less than twenty one';
} else {
	echo 'Number doesn\'t match anything';
}

?>