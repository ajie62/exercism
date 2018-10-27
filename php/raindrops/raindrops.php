<?php

/**
 * Convert a number to a string with content depending on number's factor.
 * @param int $int
 * @return string
 */
function raindrops(int $int): string
{
    $output = '';

    if ($int % 3 === 0) $output .= 'Pling';
    if ($int % 5 === 0) $output .= 'Plang';
    if ($int % 7 === 0) $output .= 'Plong';

    return $output === '' ? strval($int) : $output;
}
