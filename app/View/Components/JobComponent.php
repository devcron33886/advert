<?php

namespace App\View\Components;

use App\Models\Advert;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class JobComponent extends Component
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
        $adverts = Advert::where('category_id', 1)->get();

        return view('components.job-component', ['adverts' => $adverts]);
    }
}
