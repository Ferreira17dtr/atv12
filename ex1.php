<?php

define("PI", 3.14);
$raio = rand(1,20);

function area ($raio) {
$a = $raio * $raio * PI;
return $a;
}

echo "A area do circulo com raio" .$raio. " é " .area($raio);

?>