<?php

namespace App\Http\Controllers;

use App\Models\Advert;

class PostedAdsConteroller extends Controller
{
    public function __invoke($slug)
    {
        $advert = Advert::where('slug', $slug)->firstOrFail();

        return view('adverts.show', compact('advert'));
    }
}
