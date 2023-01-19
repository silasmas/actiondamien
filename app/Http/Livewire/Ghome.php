<?php

namespace App\Http\Livewire;

use App\Models\slide;
use Livewire\Component;

class Ghome extends Component
{
    public function render()
    {
        $slides = slide::get();
        return view('livewire.ghome',compact('slides'));
    }
}
