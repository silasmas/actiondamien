<?php

namespace App\Http\Livewire;

use App\Models\zone;
use Livewire\Component;
use Illuminate\Support\Str;

class Carthographie extends Component
{
    public $center = "";
    public $annee = "";
    public $existe = false;
    public $tab = [];

    private function s($val)
    {
        return $val > 2 ? "s" : "";
    }
    protected $queryString = [
        'center' => ['except' => '']
    ];
    public function updatedCenter()
    {
        $tab = "";
        if (Str::length($this->center) > 0) {
            // $this->tab = zone::where("titre", "LIKE", "%{$this->actualite}%")
            //     ->orWhere("description", "LIKE", "%{$this->actualite}%")
            //     ->orderBy("created_at", "DESC")->get();
            // //    dd( $newss));
            // if (count($this->tab) > 0) {
            //     $this->existe = false;
            //     session()->flash('message', count($this->tab) . ' information ' . $this->s(count($this->tab)) . ' trouvée' . $this->s(count($this->tab)));
            //     session()->flash('type', 'success');
            // } else {
            //     $this->existe = true;
            //     session()->flash('message', 'Aucune information trouvé');
            //     session()->flash('type', 'danger');
            // }
            //
            return $this->tab;
        } else {

        }
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

    public function render()
    {
        $this->tab = zone::get();
       // dd($this->tab);
        return view('livewire.carthographie');
    }
}
