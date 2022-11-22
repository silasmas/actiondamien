<?php

namespace App\Http\Livewire;

use App\Models\slide;
use Livewire\Component;
use Livewire\WithFileUploads;

class Addhome extends Component
{
    // use WithFileUploads;
    public $idslide = "";
    public $h1_fr = "";
    public $h1_en = "";
    public $h1_ln = "";
    public $textbtn_fr = "";
    public $textbtn_en = "";
    public $textbtn_ln = "";
    public $page = "";
    public $extrait_fr = "";
    public $extrait_en = "";
    public $extrait_ln = "";
    public $image = "";
    public $imagedit = "";

    protected $rules = [
        'image' => 'required|image|max:1024',
        'h1_fr' => 'required',
        'h1_en' => 'required',
        'h1_ln' => 'required',
        'textbtn_fr' => 'required',
        'textbtn_en' => 'required',
        'textbtn_ln' => 'required',
        'page' => 'required',
        'extrait_fr' => 'required',
        'extrait_en' => 'required',
        'extrait_ln' => 'required',
    ];
    public function saveSlide()
    {
        $this->validate();
        $client = slide::create([
            'h1' => ['fr' => $this->h1_fr, 'en' => $this->h1_en, 'ln' => $this->h1_ln],
            'textbtn' =>  ['fr' => $this->textbtn_fr, 'en' => $this->textbtn_en, 'ln' => $this->textbtn_ln],
            'extrait' =>  ['fr' => $this->extrait_fr, 'en' => $this->extrait_en, 'ln' => $this->extrait_ln],
            'page' => $this->page,
            // 'image' => $this->tel2,
        ]);
        if ($client) {
            $this->vider();
            $this->notify("success", "Enregistrement réussit", "Merci");
        }
    }
    // public function mount()
    // {
    // }
    // public function updated($champ)
    // {
    //     $this->validateOnly($champ, ['image' => 'required',]);
    // }
    public function render()
    {
        return view('livewire.addhome')->layout('admin.home');
    }

    private function notify($type, $msg, $titre)
    {
        session()->flash('message', $msg);
        session()->flash('type', $type);
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => $type,
            'titre' => $titre,
            'text' => $msg,
            'from' => "client",
        ]);
    }
    private function vider()
    {
        $this->h1_en = "";
        $this->h1_ln = "";
        $this->textbtn_fr = "";
        $this->textbtn_en = "";
        $this->textbtn_ln = "";
        $this->page = "";
        $this->extrait_fr = "";
        $this->extrait_en = "";
        $this->extrait_ln = "";
        $this->image = "";
        $this->imagedit = "";
        $this->h1_fr = "";
    }
}
