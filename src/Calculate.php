<?php declare(strict_types=1);

namespace App;

class Calculate {
    /**
     * Calculate the area of a square using one side's length
     *
     * @param float|int $length
     *
     * @return float|int The area of the square
     */
    public function areaOfSquare($length) {
        // Make sure the argument is a number -- Strings may evaluate to true when passed to is_numeric()
        if (is_string($length) || !is_numeric($length)) {
            $type = gettype($length);

            throw new \TypeError("The argument must be of type int or float -- passed type: {$type}");
        }

        return pow($length, 2);
    }
}
