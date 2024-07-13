<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $adverts = Advert::latest()->take(12)->get();

        return view('welcome', ['adverts' => $adverts]);
    }
}
