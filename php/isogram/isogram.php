<?php

/**
 * Checks if the given string is an isogram.
 * @param string $str
 * @return bool
 */
function isIsogram(string $str): bool
{
    $str = str_replace(['-', ' '], '', mb_strtolower($str));
    $char = preg_split('//u', $str, 0, PREG_SPLIT_NO_EMPTY);

    return count($char) === count(array_unique($char));
}
