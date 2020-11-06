<?php

function parimpar ($num) {

if ($num % 2 == 0) {
	return true;
}
	else {
		return false;
	}
}

$n = rand(1,100);

if (parimpar($n)) {
	echo $n. "é par";
}
else {
	echo $n. "é impar";
}

?>
