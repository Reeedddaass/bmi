<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function calculate(Request $request)
    {
        $request->validate([
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:1',
        ]);

        $height = $request->input('height')/100;
        $weight = $request->input('weight');

        $bmi = $weight / ($height * $height);

        return view('welcome', ['bmi' => number_format($bmi,1)]);
    }
}
