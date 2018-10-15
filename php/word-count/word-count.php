<?php

/**
 * Count the occurrences of each word in a given string.
 *
 * @param string $string
 * @return array
 */
function wordCount(string $string): array
{
    $filteredString = preg_replace('/[^\w\d_\.]/', ' ', strtolower($string));
    $result = explode(' ', $filteredString);

    return array_count_values((array_filter($result)));
}
