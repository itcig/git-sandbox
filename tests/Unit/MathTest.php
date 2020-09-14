<?php declare(strict_types=1);

namespace Tests\Unit;

use App\Math;
use Mockery as m;
use Mockery\Adapter\Phpunit\MockeryTestCase;

// Extend Mockery's MockeryTestCase instead of PHPUnit's TestCase
// Mockery can carry out Mockery specific assertion verification and cleanup the process after each test call
class MathTest extends MockeryTestCase {
    public $calculate;
    public Math $math;

    public function setUp(): void {
        // Use the Mockery class with a namespace of App\Calculate
        $this->calculate = m::mock('App\Calculate');

        // Pass the mockery object to the Math class
        $this->math = new Math($this->calculate);
    }

    public function test_getArea_WhenCalledWithLength2_Return4() {
        $this->calculate
            // The mock Calculate class should receive the areaOfSquare method
            ->shouldReceive('areaOfSquare')
            // The method should return a value of 4
            ->andReturn(4)
            // Only call the method once during the testing execution
            ->once(); // Can also use ->twice() or ->times([number of times to run])

        $length = 2;

        // Pass our argument to our Math wrapper class
        $response = $this->math->getArea($length);

        // Similar to using PHPUnit assertions, assert what results we expect
        $this->assertTrue(is_int($response));
        $this->assertEquals(4, $response);
    }
}
