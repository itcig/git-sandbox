<?php declare(strict_types=1);

namespace App;

class Math {
    /**
     * @var Calculate The Calculate class
     */
    public Calculate $calculate;

    /**
     * Math constructor.
     *
     * @param Calculate $calculate
     */
    public function __construct(Calculate $calculate) {
        // Assign the Calculate class to a property of this class
        $this->calculate = $calculate;
        // It is generally better to do this than to use the new keyword to instantiate injected dependencies
    }

    /**
     * Get Area
     *
     * @param float|int $length
     *
     * @return float|int
     */
    public function getArea($length) {
        return $this->calculate->areaOfSquare($length);
    }
}
