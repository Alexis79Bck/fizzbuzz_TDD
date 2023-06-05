<?php

namespace App\Classes;
use Symfony\Component\Translation\Exception\InvalidArgumentException;

class FizzBuzz
{
    public $arrFizzBuzz;
    public $arrayNumbers;

    public function __construct(array $numbers)
    {
        $this->arrayNumbers = $numbers;

    }
    public function getList(): array {
        return $this->arrayNumbers;
    }
    public function getNumberByIndex(int $index): int {
        return $this->arrayNumbers[$index];
    }
    public function getRandomNumber(): int {
        $index = array_rand($this->arrayNumbers);
        return $this->arrayNumbers[$index];
    }
    public function isDividedBy3(int $number): bool {
        return $number % 3 === 0;
    }

    public function isDividedBy5(int $number): bool {
        return $number % 5 === 0;
    }

    public function isDividedBy3And5(int $number): bool {
        return ($number % 3 === 0 && $number % 5 === 0);
    }
    public function convertToText(int $number): string {
        if ($this->isDividedBy3And5($number)) {
            return 'FizzBuzz';
        }elseif ($this->isDividedBy3($number)) {
            return 'Fizz';
        }elseif ($this->isDividedBy5($number)) {
            return 'Buzz';
        }
        return $number;
    }

    public function showFizzBuzzList() {

        return array_map([$this, 'convertToText'], $this->arrayNumbers);

    }


}
