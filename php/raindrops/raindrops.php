<?php

/**
 * Convert a number to a string with content depending on number's factor.
 * @param int $int
 * @return string
 */
function raindrops(int $int): string
{
    $output = '';
    $sounds = [3 => 'Pling', 5 => 'Plang', 7 => 'Plong'];

    foreach ($sounds as $nb => $sound) {
        if ($int % $nb === 0) {
            $output .= $sound;
        }
    }

    return $output === '' ? (int) $int : $output;
}
