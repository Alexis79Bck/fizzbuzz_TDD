<?php

namespace Tests\Unit;

use App\Classes\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    public function test_set_fizzbuzz_array_numbers(): void {
        $fzbz = new FizzBuzz;
        $fzbz->setList([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]);

        $this->assertIsObject($fzbz);
    }
    
    public function test_get_1_when_value_is_1(): void
    {
        $fzbz = new FizzBuzz();
        $fzbz->setList([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]);
        $list = $fzbz->getList();

        $this->assertEquals(1, $list[0]);
    }

    public function test_get_fizz_when_value_is_3(): void
    {
        $fzbz = new FizzBuzz();
        $fzbz->setList([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]);
        $list = $fzbz->getList();

        $this->assertEquals(3, $list[2]);
    }

}
