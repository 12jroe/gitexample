<?php
echo "Hello, John<br>";

<<<<<<< HEAD
echo "How are you today John?<br>";

$name = "JOHN";

if ($name == "John") {
	echo $name . " is normal today";
} else if ($name == "JOHN") {
	echo $name . "is all CAPS today";
=======
echo "How are you today John?\n";

$name = "John";

if(substr($name, -1) == "n") {
	echo "John's name ends in 'n'";
>>>>>>> 46a357b5558aa9c2bb5e599f77b9808939273b37
}
?>