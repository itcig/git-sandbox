'use strict';

class Calculate {
    /**
     * Get the area of a square using the length of one of it's sides
     *
     *  @param {number} length The length of one side of a square
     *
     * @return {number} The area of the square
     */
    getAreaOfSquare(length) {
        return this.calcAreaOfSquare(length);
    }

    /**
     * Calculate the area of a square using one side's length
     *
     * @param {number} length  The length of one side of a square
     *
     * @return {number} The area of the square
     */
    calcAreaOfSquare(length) {
        if (isNaN(length)) {
            throw new Error('The argument was not a number, please use only numeric values.');
        }

        return Math.pow(length, 2);
    }
}

module.exports = new Calculate();
