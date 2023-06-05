<?php

namespace Tests\Unit;

use App\Classes\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    public function test_fizzbuzz_is_an_object(): void {
        $fzbz = new FizzBuzz(range(1, 20));
        $this->assertIsObject($fzbz);
    }

    public function test_fizzbuzz_arraynumbers_is_an_array(): void {
        $fzbz = new FizzBuzz(range(1, 20));
        $this->assertIsArray($fzbz->arrayNumbers);
    }


    public function test_get_1_when_value_is_1(): void
    {
        $fzbz = new FizzBuzz(range(1, 20));

        $list = $fzbz->getList();

        $this->assertEquals(1, $list[0]);
    }

    public function test_get_the_value_3_from_the_list(): void
    {
        $fzbz = new FizzBuzz(range(1, 20));

        $list = $fzbz->getList();

        $this->assertEquals(3, $list[2]);
    }

    public function test_get_the_value_5_from_the_list(): void
    {
        $fzbz = new FizzBuzz(range(1, 20));

        $list = $fzbz->getList();

        $this->assertEquals(5, $list[4]);
    }

    public function test_get_any_value_from_the_list_by_index(): void
    {
        $fzbz = new FizzBuzz(range(1, 20));

        $number1 = $fzbz->getNumber(random_int(0, count($fzbz->arrayNumbers) - 1));
        $number2 = $fzbz->getNumber(random_int(0, count($fzbz->arrayNumbers) - 1));

        $this->assertContains($number1, $fzbz->arrayNumbers);
        $this->assertContains($number2, $fzbz->arrayNumbers);
    }

    // public function test_convert_fizz_when_value_is_divided_by_3(): void
    // {
    //     $fzbz = new FizzBuzz(range(1, 20));

    //     $number1 = $fzbz->getNumber(2);
    //     $number2 = $fzbz->getNumber(6);
    //     $number3 = $fzbz->getNumber(11);
    //     $number4 = $fzbz->getNumber(16);

    //     $this->assertEquals(3, $list[2]);
    //     $this->assertEquals(3, $list[2]);
    //     $this->assertEquals(3, $list[2]);
    //     $this->assertEquals(3, $list[2]);
    // }

}
