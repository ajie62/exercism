<?php

/**
 * DNA to RNA
 * @param string $strand
 * @return string
 */
function toRna(string $strand): string
{
    $strand = str_split($strand);

    for ($i = 0; $i < count($strand); $i++) {
        switch($strand[$i]) {
            case 'G':
                $strand[$i] = 'C';
                break;
            case 'C':
                $strand[$i] = 'G';
                break;
            case 'T':
                $strand[$i] = 'A';
                break;
            case 'A':
                $strand[$i] = 'U';
                break;
        }
    }

    return implode('', $strand);
}
