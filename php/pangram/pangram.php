<?php

/**
 * Checks if the given string is a pangram.
 * @param string $text
 * @return bool
 */
function isPangram(string $text)
{
    $text = format($text);
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';

    return $text === $alphabet;
}

/**
 * Formats the given string.
 * @param string $text
 * @return string
 */
function format(string $text): string
{
    $text = preg_replace('/[^a-z]/', '', strtolower($text));
    $text = str_split($text);
    sort($text);

    return implode("", array_unique($text));
}
