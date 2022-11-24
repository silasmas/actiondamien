<?php

namespace App\Http\Livewire;

use App\Models\actualite;
use Livewire\Component;

class News extends Component
{
    public function render()
    {

        $newss = actualite::all();
        // dd($news[0]->description);
        return view('livewire.news',compact("newss"));
    }
}
