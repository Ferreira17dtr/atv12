<?php
$soma=0;
function percentagem ($rapazes,$raparigas) {
	$soma= $raparigas + $rapazes;
	$nr =($rapazes/$soma)*100;
	echo "a percentagem de rapazes é" .$nr;
	echo "<br>";
	$nrpg =($raparigas/$soma)*100;
	echo "a percentagem de raparigas é" .$nrpg;
}

$rapazes = rand(1,25);
$raparigas = rand(1,25);
percentagem($rapazes,$raparigas);
?>
