<?php

namespace App\View\Components;

use App\Models\Advert;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RelatedJobsComponent extends Component
{
    public $advertId;

    public $relatedAdverts;

    /**
     * Create a new component instance.
     */
    public function __construct($advertId)
    {
        $this->advertId = $advertId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->relatedAdverts = Advert::where('category_id', '=', $this->advertId)->limit(3)->get();

        return view('components.related-jobs-component');
    }
}
