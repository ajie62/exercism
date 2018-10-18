<?php

/**
 * Run-length decoding.
 * @param string $input
 * @return string
 */
function encode(string $input): string
{
    $result = '';
    if (empty($input)) return $result;

    $input = str_split($input);
    $repetitions = 0;

    for ($i = 0; $i < count($input); $i++) {
        $repetitions++;

        if (($i+1) < count($input)) {
            if ($input[$i+1] !== $input[$i]) {
                $result .= ($repetitions > 1) ? $repetitions.$input[$i] : $input[$i];
                $repetitions = 0;
            }
        } else {
             $result .= ($repetitions > 1) ? $repetitions.$input[$i] : $input[$i];
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
    $input = str_split($input);

    for ($i = 0; $i < sizeof($input); $i++) {
        if (is_numeric($input[$i])) {
            $number .= $input[$i];
        } else if (!is_numeric($input[$i])) {
            $result .= ($number !== '') ? str_repeat($input[$i], $number) : $input[$i];
            $number = '';
        }
    }

    return $result;
}
