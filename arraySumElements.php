<?php

function simpleArraySum(&$array, $current = 1) {
    if ($current == count($array)){
        return $array[0];
    }
    $array[0] = $array[0] + $array[$current];
    simpleArraySum($array, $current + 1);
}

$array = [1,3,9,5,7,21,42];
simpleArraySum($array);

print_r($array[0]);