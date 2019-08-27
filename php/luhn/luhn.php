<?php

function isValid(string $number): bool
{
    $number = str_replace(' ', '', $number);

    if (strlen($number) <= 1) {
        return false;
    }

    $nbArray = array_reverse(str_split($number));

    foreach ($nbArray as $key => $value) {
        if ($value !== "0" && (int) $value === 0) {
            return false;
        }

        if ($key % 2 ==! 0) {
            $value = (int) $value;
            $newVal = $value * 2;
            $nbArray[$key] = $newVal > 9 ? $newVal - 9 : $newVal;
        }
    }

    return array_sum($nbArray) % 10 === 0;
}
