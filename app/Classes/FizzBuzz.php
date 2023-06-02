<?php

namespace App\Classes;

class FizzBuzz
{
    public $arrFizzBuzz;
    public $arrayNumbers;

    public function setList(array $numbers)
    {
        $this->arrayNumbers = $numbers; 
    }
    public function getList() {
        return $this->arrayNumbers;
    }


}