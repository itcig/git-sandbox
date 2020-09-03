<?php declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Calculate;

class CalculateTest extends TestCase {
    /**
     * @var Calculate The Calculate class
     */
    public Calculate $calculate;

    public function setUp(): void {
        $this->calculate = new Calculate();
    }

    public function test_areaOfSquare_WhenCalledWithLength2_Return4(): void {
        $length = 2;

        $response = $this->calculate->areaOfSquare($length);

        // Make sure the returned item is a number
        $this->assertTrue(is_numeric($response));

        // Make sure the returned item is an integer
        $this->assertTrue(is_int($response));

        // Make sure the response of 2x2=4
        $this->assertEquals(4, $response);
    }

    public function test_areaOfSquare_WhenCalledWithLength2Decimal2_Return4Decimal84(): void {
        $length = 2.2;

        $response = $this->calculate->areaOfSquare($length);

        // Make sure the returned item is a number
        $this->assertTrue(is_numeric($response));

        // Make sure the returned item is a float
        $this->assertTrue(is_float($response));

        // Make sure the response of 2.2x2.2=4.84
        $this->assertEquals(4.84, $response);
    }

    public function test_areaOfSquare_WhenCalledWithLengthNegative2_Return4(): void {
        $length = -2;

        $response = $this->calculate->areaOfSquare($length);

        // Make sure the returned item is a number
        $this->assertTrue(is_numeric($response));

        // Make sure the returned item is an integer
        $this->assertTrue(is_int($response));

        // Make sure the response of -2x-2=4
        $this->assertEquals(4, $response);
    }

    public function test_areaOfSquare_WhenCalledWithLengthString_ThrowAnException(): void {
        // Make sure the exception is the type we expect
        $this->expectException('TypeError');

        $response = $this->calculate->areaOfSquare('2');
    }

    public function test_areaOfSquare_WhenCalledWithoutLength_ThrowAnException(): void {
        // Make sure the exception is the type we expect
        $this->expectException('ArgumentCountError');

        // Make sure the exception message is what we expect
        $this->expectExceptionMessage('Too few arguments to function');

        $response = $this->calculate->areaOfSquare();
    }
}
