<?php

/**
 * DNA to RNA
 * @param string $strand
 * @return string
 */
function toRna(string $strand): string
{
    $trans = ["G" => "C", "C" => "G", "T" => "A", "A" => "U"];
    return strtr($strand, $trans);
}
