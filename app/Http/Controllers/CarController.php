<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    public function index() {

        $cars = Car::all();
        dump($cars);

        return view("car", compact("cars"));
    }
}
