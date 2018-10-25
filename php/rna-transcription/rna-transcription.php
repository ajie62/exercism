<?php

/**
 * DNA to RNA
 * @param string $strand
 * @return string
 */
function toRna(string $strand): string
{
    return strtr($strand, 'GCTA', 'CGAU');
}
