<?php

namespace App\Http\Livewire;

use App\Models\actualite;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class News extends Component
{
    use WithPagination;
    public $actualite = "";
    public $annee = "";
    public $existe = false;
    public $tab = [];
    public $t = "";
    // $tabl = "";

    private function s($val)
    {
        return $val > 2 ? "s" : "";
    }
    protected $queryString = [
        'actualite' => ['except' => ''],
        'annee' => ['except' => ''],
    ];
    public function updating($nom, $value)
    {

        if (request()->annee != "") {
            $this->tab = actualite::where("annee", "LIKE", "{$this->annee}")
                ->orderBy("annee", "DESC")->get();
            $this->tab->withPath('news?annee=' . request()->annee);
        } elseif (request()->actualite != "") {
            // dd('ok');
            $this->tab = actualite::where("titre", "LIKE", "%{$this->actualite}%")
                ->orWhere("description", "LIKE", "%{$this->actualite}%")
                ->orderBy("annee", "DESC")->get();
            $this->tab->withPath('news?actualite=' . request()->actualite);
        }
        // else{
        //     $this->tab = actualite::get();
        // }
    }
    public function actualiser()
    {

        $this->resetPage();
    }
    // public function paginationView(){
    //     // return "vendor.pagination.bootstrap-4";
    // }
    public function updatedAnnee()
    {
        $tab = "";
        if (Str::length($this->annee) > 0) {
            $this->tab = actualite::where("annee", "LIKE", "{$this->annee}")
                ->orderBy("annee", "DESC")->get();
            if (count($this->tab) > 0) {
                $this->existe = false;
                session()->flash('message', count($this->tab) . ' information ' . $this->s(count($this->tab)) . ' trouvée' . $this->s(count($this->tab)));
                session()->flash('type', 'success');
            } else {
                $this->existe = true;
                session()->flash('message', 'Aucune information trouvé');
                session()->flash('type', 'danger');
            }
            return $this->tab;
        } else {

        }
    }
    public function updatedActualite()
    {
        $tab = "";
        if (Str::length($this->actualite) > 0) {
            $this->tab = actualite::where("titre", "LIKE", "%{$this->actualite}%")
                ->orWhere("description", "LIKE", "%{$this->actualite}%")
                ->orderBy("annee", "DESC")->get();
            //    dd( $newss));
            if (count($this->tab) > 0) {
                $this->existe = false;
                session()->flash('message', count($this->tab) . ' information ' . $this->s(count($this->tab)) . ' trouvée' . $this->s(count($this->tab)));
                session()->flash('type', 'success');
            } else {
                $this->existe = true;
                session()->flash('message', 'Aucune information trouvé');
                session()->flash('type', 'danger');
            }
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

        // if(request()->actualite=='' && request()->actualite==""){

        //     $this->tab = actualite::get();
        // }
        if (request()->annee != "") {
            $this->tab = actualite::where("annee", "LIKE", "{$this->annee}")
                ->orderBy("annee", "DESC")->get();
            // $this->tab->withPath('news?annee=' . request()->annee);
        } elseif (request()->actualite != "") {
            // dd('ok');
            $this->tab = actualite::where("titre", "LIKE", "%{$this->actualite}%")
                ->orWhere("description", "LIKE", "%{$this->actualite}%")
                ->orderBy("annee", "DESC")->get();
            // $this->tab->withPath('news?actualite=' . request()->actualite);
        } else {
            $this->tab = actualite::get();
        }

        return view('livewire.news');
    }
}
