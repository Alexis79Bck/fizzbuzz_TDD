<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FizzBuzzFeatureTest extends TestCase
{
    /**
     * @test show index page
     */
    public function test_show_index_page(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * @test show result page
     */
    public function test_show_result_page(): void
    {
        $response = $this->post('/result', ['maximo' => 50]);
        $response->assertStatus(200);
    }
    /**
     * @test fizz
     */
    public function test_fizz()
    {
        $response = $this->post('/result', ['maximo' => 50]);

        $response->assertStatus(200)
            ->assertSee('1')
            ->assertSee('2')
            ->assertSee('Fizz');
    }
    /**
     * @test buzz
     */
    public function test_buzz()
    {
        $response = $this->post('/result', ['maximo' => 50]);

        $response->assertStatus(200)
            ->assertSee('1')
            ->assertSee('2')
            ->assertSee('Fizz')
            ->assertSee('4')
            ->assertSee('Buzz');
    }
    /**
     * @test fizzbuzz
     */
    public function test_fizz_buzz()
    {
        $response = $this->post('/result', ['maximo' => 50]);

        $response->assertStatus(200)
            ->assertSee('1')
            ->assertSee('2')
            ->assertSee('Fizz')
            ->assertSee('4')
            ->assertSee('Buzz')
            ->assertSee('Fizz')
            ->assertSee('7')
            ->assertSee('8')
            ->assertSee('Fizz')
            ->assertSee('Buzz')
            ->assertSee('11')
            ->assertSee('Fizz')
            ->assertSee('13')
            ->assertSee('14')
            ->assertSee('FizzBuzz');
    }
}
