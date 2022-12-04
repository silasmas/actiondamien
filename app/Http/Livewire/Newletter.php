<?php

namespace App\Http\Livewire;

use App\Models\newsletter;
use Livewire\Component;

class Newletter extends Component
{
    public $email = "";

    protected $rules = [
        'email' => ['required', 'string', 'email', 'max:255', 'unique:newsletters'],
    ];
    public function addnewsLetter()
    {
        $this->validate();
        $news = newsletter::create([
            'email' => $this->email,
        ]);
        if ($news) {
            session()->flash('message', 'Enrégistrement réussi');
            session()->flash('type', 'success');
            $this->email = "";
        } else {
            session()->flash('message', 'Erreur d\'enrégistrement');
            session()->flash('type', 'danger');
        }
    }
    public function render()
    {
        return view('livewire.newletter');
    }
}
