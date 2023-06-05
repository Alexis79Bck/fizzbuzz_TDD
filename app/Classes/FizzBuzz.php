<?php

namespace App\Classes;

class FizzBuzz
{
    public $arrFizzBuzz;
    public $arrayNumbers;

    public function __construct(array $numbers)
    {
        $this->arrayNumbers = $numbers; 
    }
    public function getList() {
        return $this->arrayNumbers;
    }
    public function getNumber(int $index) {
        return $this->arrayNumbers[$index];
    }


}