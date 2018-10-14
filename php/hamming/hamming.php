<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

/**
 * @param string $a
 * @param string $b
 * @return int
 */
function distance(string $a, string $b): int
{
    $a = str_split($a);
    $b = str_split($b);

    if (count($a) !== count($b))
        throw new InvalidArgumentException('DNA strands must be of equal length.');

    return count(array_diff_assoc($a, $b));
}
