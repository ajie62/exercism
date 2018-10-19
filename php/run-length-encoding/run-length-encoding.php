<?php

/**
 * Run-length decoding.
 * @param string $input
 * @return string
 */
function encode(string $input): string
{
    $result = '';
    $repetitions = 0;

    for ($i = 0; $i < strlen($input); $i++) {
        $repetitions++;

        if ($i === strlen($input) - 1 || $input[$i+1] !== $input[$i]) {
            $result .= ($repetitions > 1) ? $repetitions.$input[$i] : $input[$i];
            $repetitions = 0;
        }
    }

    return $result;
}

/**
 * Run-length decoding.
 * @param string $input
 * @return string
 */
function decode(string $input): string
{
    $number = $result = '';

    for ($i = 0; $i < strlen($input); $i++) {
        if (is_numeric($input[$i])) {
            $number .= $input[$i];
        } else if (!is_numeric($input[$i])) {
            $result .= ($number !== '') ? str_repeat($input[$i], $number) : $input[$i];
            $number = '';
        }
    }

    return $result;
}
