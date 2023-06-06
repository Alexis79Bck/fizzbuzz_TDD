<?php

namespace App\Http\Controllers;

use App\Classes\FizzBuzz;
use Illuminate\Http\Request;

class FizzBuzzController extends Controller
{
    public function index() {
        return view('fizzbuzz');
    }

    public function result(Request $request){
        $numeros = range(1, $request->maximo);
        $maximo = $request->maximo;
        $fizzbuzz = new FizzBuzz($numeros);
        $listado = $fizzbuzz->showFizzBuzzList();

        return view('fizzbuzz_result', compact('numeros','listado','maximo'));
    }
}
