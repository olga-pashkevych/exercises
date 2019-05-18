<?php

function printReverse($string)
{
    if (!$string)
        return;

    echo substr($string, -1);
    $string = substr($string, 0, strlen($string)-1);

    printReverse($string);
}

printReverse('AnjaSuperGirl');