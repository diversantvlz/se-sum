<?php

function sum(string $a, string $b): string
{
    $extra = 0;
    $result = '';
    $aLen = strlen($a);
    $bLen = strlen($b);

    if ($aLen > $bLen) {
        $b = str_pad($b, $aLen, "0", STR_PAD_LEFT);
    } elseif ($aLen < $bLen) {
        $a = str_pad($a, $bLen, "0", STR_PAD_LEFT);
    }

    for ($pos = $aLen - 1; $pos >= 0; $pos--) {
        $int = $a[$pos] + $b[$pos] + $extra;
        $extra = ($int >= 10) ? 1 : 0;
        $result .= $int % 10;
    }

    return strrev($result);
}