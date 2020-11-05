<?php

function parimpar ($num) {

$num = rand(1,100);
if ($num % 2 == 0) {
	echo $num;
	echo "<br>";
	echo "O número inserido é par";
}
	else {
	echo $num;
	echo "<br>";
	echo "O número é impar";
}

}


?>