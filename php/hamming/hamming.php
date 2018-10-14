<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

/**
 * @param $a
 * @param $b
 * @return int
 */
function distance($a, $b)
{
    if (strlen($a) !== strlen($b))
        throw new InvalidArgumentException('DNA strands must be of equal length.');

    $nb = $i = 0;

    while ($i < strlen($a)) {
        ($a[$i] === $b[$i]) ?: $nb++;
        $i++;
    }

    return $nb;
}
