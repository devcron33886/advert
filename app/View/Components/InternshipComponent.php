<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InternshipComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $adverts = \App\Models\Advert::where('category_id', 4)->orderBy('created_at', 'desc')->get();

        return view('components.internship-component', ['adverts' => $adverts]);
    }
}
