<?php

/**
 * Calculate the date and time 1 billion seconds later.
 *
 * @param DateTime $date
 * @return DateTime
 * @throws Exception
 */
function from(\DateTime $date): DateTime
{
    # Not mutation allowed, so a clone of the $date object is necessary.
    $gs = clone $date;

    return $gs->add(new DateInterval('PT'.(10 ** 9).'S'));
}
