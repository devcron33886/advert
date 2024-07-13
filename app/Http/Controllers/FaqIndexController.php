<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $faqs = Faq::where('status', '=', 'published')->get();

        return view('faq', compact('faqs'));
    }
}
