'use strict';

// This is the default node assertion library, it appears this is not commonly used
// const assert = require('assert');

// Import Chai's assert which is a third party assertion library  --  https://www.chaijs.com/
const assert = require('chai').assert;

// Import Chai's expect
const expect = require('chai').expect;

// Import Chai's should
// const should = require('chai').should();

// Get the file we're testing
const Calculate = require('../../src/Calculate');

// Set variable for method we're testing
const getAreaOfSquare = Calculate.getAreaOfSquare;

// Create a test called Calculate
describe('Calculate', function () {
    // Describe what the test should do
    it('Calculate.getAreaOfSquare passed 2 should return 4', function () {
        // Get the result of our method
        let result = Calculate.getAreaOfSquare(2);

        // Assert that passing a 2 should return 4
        assert.equal(result, 4);
    });

    // Describe what the test should do
    it('Calculate.getAreaOfSquare passed -2 should return 4', function () {
        // Get the result of our method
        let result = Calculate.getAreaOfSquare(-2);

        // Assert that passing a -2 should return 4
        assert.equal(result, 4);
    });

    // Describe what the test should do
    it('Calculate.getAreaOfSquare passed a number should return a number', function () {
        // Get the result of our method
        let result = Calculate.getAreaOfSquare(2);

        // Assert the type returned should be a number
        assert.typeOf(result, 'number');
    });

    // Describe what the test should do
    it('Calculate.getAreaOfSquare passed a string should throw an error', function () {
        // In order for chai to catch the error we must wrap the method throwing the error in a function
        // It seems you may also be able to use .bind()  --  https://stackoverflow.com/questions/21587122/mocha-chai-expect-to-throw-not-catching-thrown-errors
        expect(function () {
            // Get the result of our method
            Calculate.getAreaOfSquare('string');
        }).to.throw('The argument was not a number, please use only numeric values.');
    });
});
