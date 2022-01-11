<?php

$first = 0;
$second = 1;
$fibo = array();

for ($i=0;$i<5;$i++) {
    array_push($fibo,$first,$second);
    $first = $second + $first;
    $second = $second + $first;
}

print_r($fibo);

$num = 25;

if (in_array($num,$fibo)) {
    echo "Está";
} else {
    echo "No está";
}

?>