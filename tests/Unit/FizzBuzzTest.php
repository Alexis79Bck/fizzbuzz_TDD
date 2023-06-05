<?php

namespace Tests\Unit;

use App\Classes\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * Contendrá una instancia de la clasa FizzBuzz, que es una implementación del juego FizzBuzz.
     * FizzBuzz es un juego que consiste en reemplazar los numeros divisible entre 3 con
     * la palabra "Fizz", los numeros divisible entre 5 se reemplazaran con la palabra "Buzz" y
     * los numeros divisible entre 3 y tambien divisible entre 5 con la palabra "FizzBuzz"
     *
     * @var FizzBuzz
     */
    private $fzbz;
    /**
     * Se prepara el contexto de entorno para las pruebas de FizzBuzz.
     * Se crea una instancia de la clase FizzBuzz y se genera una lista de números del 1 al 100.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->fzbz = new FizzBuzz(range(1, 100));
    }
    /**
     * @test the fizzbuzz class is an object
     * Comprueba que la instancia de la clase FizzBuzz sea un objeto.
     * @return void
     */
    public function test_the_fizzbuzz_class_is_an_object(): void
    {
        $this->assertIsObject($this->fzbz);
    }
    /**
     * @test the arrayNumbers property is an array
     * Verifica que la propiedad $arrayNumbers sea un array.
     * @return void
     */
    public function test_the_arrayNumbers_prop_is_an_array(): void
    {
        $this->assertIsArray($this->fzbz->arrayNumbers);
    }
    /**
     * @test the first element is 1 from the list
     * Comprueba que el primer elemento de la lista sea el numero 1
     * @return void
     */
    public function test_the_first_element_is_1_from_the_list(): void
    {
        $list = $this->fzbz->getList();
        $this->assertEquals(1, $list[0]);
    }
    /**
     * @test the third element is 3 from the list
     * Comprueba que el tercer elemento de la lista sea el numero 3
     * @return void
     */
    public function test_the_third_element_is_3_from_the_list(): void
    {
        $list = $this->fzbz->getList();
        $this->assertEquals(3, $list[2]);
    }
    /**
     * @test the fifth element is 5 from the list
     * Comprueba que el quinto elemento de la lista sea el numero 5
     * @return void
     */
    public function test_the_fifth_element_is_5_from_the_list(): void
    {
        $list = $this->fzbz->getList();
        $this->assertEquals(5, $list[4]);
    }
    /**
     * @test get a random number from the list
     * Comprueba el obtener un numero aleatorio de la lista.
     * @return void
     */
    public function test_get_a_random_number_from_the_list(): void
    {
        $number1 = $this->fzbz->getRandomNumber();
        $this->assertContains($number1, $this->fzbz->arrayNumbers);
    }
    /**
     * @test get any number from the list by index
     * Comprueba el obtener un numero cualquiera de la lista por medio del indice.
     * @return void
     */
    public function test_get_any_number_from_the_list_by_index(): void
    {
        $number1 = $this->fzbz->getNumberByIndex(21);
        $this->assertContains($number1, $this->fzbz->arrayNumbers);
    }
    /**
     * @test if the number is divided by 3
     * Comprueba si el numero es divisible entre 3.
     * @return void
     */
    public function test_if_the_number_is_divided_by_3(): void
    {
        $number1 = $this->fzbz->getNumberByIndex(2);
        $this->assertTrue($this->fzbz->isDividedBy3($number1));
    }
    /**
     * @test if the number is not divided by 3
     * Comprueba si el numero no es divisible entre 3.
     * @return void
     */
    public function test_if_the_number_is_not_divided_by_3(): void
    {
        $number1 = $this->fzbz->getNumberByIndex(6);
        $this->assertFalse($this->fzbz->isDividedBy3($number1));
    }
    /**
     * @test if a random number is divided by 3 or not
     * Comprueba si un numero aleatorio es divisible entre 3 o no.
     * Esta prueba puede fallar debido a que el numero a comprobar
     * es aleatorio.
     * @return void
     */
    public function test_if_a_random_number_is_divided_by_3_or_not(): void
    {
        $number1 = $this->fzbz->getRandomNumber();
        $this->assertTrue($this->fzbz->isDividedBy3($number1));
    }
    /**
     * @test if the number is divided by 5
     * Comprueba si el numero es divisible entre 5.
     * @return void
     */
    public function test_if_the_number_is_divided_by_5(): void
    {
        $number1 = $this->fzbz->getNumberByIndex(4);
        $this->assertTrue($this->fzbz->isDividedBy5($number1));
    }
    /**
     * @test if the number is not divided by 5
     * Comprueba si el numero no es divisible entre 5.
     * @return void
     */
    public function test_if_the_number_is_not_divided_by_5(): void
    {
        $number1 = $this->fzbz->getNumberByIndex(22);
        $this->assertFalse($this->fzbz->isDividedBy5($number1));
    }
    /**
     * @test if a random number is divided by 5 or not
     * Comprueba si un numero aleatorio es divisible entre 5 o no.
     * Esta prueba puede fallar debido a que el numero a comprobar
     * es aleatorio.
     * @return void
     */
    public function test_if_a_random_number_is_divided_by_5_or_not(): void
    {
        $number1 = $this->fzbz->getRandomNumber();
        $this->assertTrue($this->fzbz->isDividedBy5($number1));
    }
    /**
     * @test if the number is divided by 3 and divide by 5
     * Comprueba si el numero es divisible entre 3 y es divisible entre 5.
     * @return void
     */
    public function test_if_the_number_is_divided_by_3_and_divided_by_5(): void
    {
        $number1 = $this->fzbz->getNumberByIndex(14);
        $this->assertTrue($this->fzbz->isDividedBy3And5($number1));
    }
    /**
     * @test if the number is not divided by 3 and not divided by 5
     * Comprueba si el numero no es divisible entre 3 y no es divisible entre 5.
     * @return void
     */
    public function test_if_the_number_is_not_divided_by_3_and_not_divided_by_5(): void
    {
        $number1 = $this->fzbz->getNumberByIndex(27);
        $this->assertFalse($this->fzbz->isDividedBy3And5($number1));
    }
    /**
     * @test if a random number is divided by 3 and divided by 5 or not
     * Comprueba si un numero aleatorio es divisible entre 3 o no.
     * Esta prueba puede fallar debido a que el numero a comprobar
     * es aleatorio.
     * @return void
     */
    public function test_if_the_random_number_is_divided_by_3_and_divided_by_5_or_not(): void
    {
        $number1 = $this->fzbz->getRandomNumber();
        $this->assertTrue($this->fzbz->isDividedBy3And5($number1));
    }
    /**
     * @test when the number is divided by 3 replace with fizz
     * Verifica cuando un numero es divisible entre 3 reemplazarlo con el texto "Fizz"
     * @return void
     */
    public function test_when_the_number_is_divided_by_3_replace_with_fizz(): void
    {
        $number1 = $this->fzbz->getNumberByIndex(2);
        $text1 = $this->fzbz->convertToText($number1);
        $this->assertEquals('Fizz', $text1);
    }
    /**
     * @test when the number is divided by 5 replace with buzz
     * Verifica cuando un numero es divisible entre 5 reemplazarlo con el texto "Buzz"
     * @return void
     */
    public function test_when_the_number_is_divided_by_5_replace_with_buzz(): void
    {
        $number1 = $this->fzbz->getNumberByIndex(4);
        $text1 = $this->fzbz->convertToText($number1);
        $this->assertEquals('Buzz', $text1);
    }
    /**
     * @test when the number is divided by 3 and divided by 5 replace with fizzbuzz
     * Verifica cuando un numero es divisible entre 3 y es divisible entre 5 reemplazarlo con el texto "FizzBuzz"
     * @return void
     */
    public function test_when_the_number_is_divided_by_3_and_divide_by_5_replace_with_fizzbuzz(): void
    {
        $number1 = $this->fzbz->getNumberByIndex(14);
        $text1 = $this->fzbz->convertToText($number1);
        $this->assertEquals('FizzBuzz', $text1);
    }
    /**
     * @test when the number is not divided by 3 and is not divided by 5 return the number
     * Verifica cuando un numero no es divisible entre 3 y no es divisible entre 5, retorna el numero
     * @return void
     */
    public function test_when_the_number_is_not_divided_by_3_and_is_not_divided_by_5_return_the_number(): void
    {
        $number1 = $this->fzbz->getNumberByIndex(12);
        $text1 = $this->fzbz->convertToText($number1);
        $this->assertNotEquals('Fizz', $text1);
        $this->assertNotEquals('Buzz', $text1);
        $this->assertNotEquals('FizzBuzz', $text1);
    }
    /**
     * @test the list is an array
     * Comprueba la lista resultante es un array
     * @return void
     */
    public function test_the_list_is_an_array(): void {
        $list = $this->fzbz->showFizzBuzzList();
        $this->assertIsArray($list);

    }
    /**
     * @test the list has 100 numbers
     * Comprueba la lista resultante tiene 100 numeros
     * @return void
     */
    public function test_the_list_has_100_numbers(): void {
        $list = $this->fzbz->showFizzBuzzList();
        $this->assertCount(100, $list);
    }
    /**
     * @test the list has Fizz text
     * Comprueba la lista resultante tiene el texto Fizz
     * @return void
     */
    public function test_the_list_has_Fizz_text(): void {
        $list = $this->fzbz->showFizzBuzzList();
        $this->assertContains('Fizz', $list);
    }
    /**
     * @test the list has Buzz text
     * Comprueba la lista resultante tiene el texto Buzz
     * @return void
     */
    public function test_the_list_has_Buzz_text(): void {
        $list = $this->fzbz->showFizzBuzzList();
        $this->assertContains('Buzz', $list);
    }
    /**
     * @test the list has FizzBuzz text
     * Comprueba la lista resultante tiene el texto FizzBuzz
     * @return void
     */
    public function test_the_list_has_FizzBuzz_text(): void {
        $list = $this->fzbz->showFizzBuzzList();
        $this->assertContains('FizzBuzz', $list);
    }
}
