<?php
/**
 * Clase FizzBuzz
 * La famosa serie FizzBuzz para un número natural es una sucesión desde 1 hasta N
 * donde:
 *     - Los números que sean múltiplos de 3 se cambian por Fizz.
 *     - Los números que sean múltiplos de 5 se cambian por Buzz.
 *     - Los números que sean múltiplos de 3 y 5 se cambian por FizzBuzz. 
 * @author Alexis E. Mata <alexis.ed.mata@gmail.com>
 * @created 01-06-2023
 *
 */

namespace App\Classes;
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
