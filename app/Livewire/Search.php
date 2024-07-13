<?php

namespace App\Livewire;

use App\Models\Advert;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        $results = [];
        if (strlen($this->search) > 2) {
            $results = Advert::where('title', 'like', '%'.$this->search.'%')->orWhere('body', 'like', '%'.$this->search.'%')->get();

        }

        return view('livewire.search', ['results' => $results]);
    }
}
