<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $car = Car::find(1);
        
        return view('home.index')->with('name', 'Damjan')->with('surename', 'Stamenov');
    }
}
