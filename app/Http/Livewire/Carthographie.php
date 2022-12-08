<?php

namespace App\Http\Livewire;

use App\Models\zone;
use Illuminate\Support\Str;
use Livewire\Component;

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
        'center' => ['except' => ''],
    ];

    public function updating($nom, $value)
    {

        if (request()->center != "") {
            $this->tab = zone::selectRaw('zones.nom,airs.nom,centres.*')
                ->join('airs', 'airs.zone_id', 'zones.id')
                ->join('centres', 'airs.id', 'centres.air_id')
                ->where('zones.nom', "LIKE", "%{$this->center}%")
                ->orWhere("airs.nom", "LIKE", "%{$this->center}%")
                ->orWhere("centres.nom", "LIKE", "%{$this->center}%")
                ->orWhere("centres.phone", "LIKE", "%{$this->center}%")
                ->orWhere("centres.adresse", "LIKE", "%{$this->center}%")
                ->get();
        }
    }
    public function updatedCenter()
    {
        // $tab = "";
        if (Str::length($this->center) > 0) {
            $this->tab = zone::selectRaw('zones.nom,airs.nom,centres.*')
            ->join('airs', 'airs.zone_id', 'zones.id')
            ->join('centres', 'airs.id', 'centres.air_id')
            ->where('zones.nom', "LIKE", "%{$this->center}%")
                ->orWhere("airs.nom", "LIKE", "%{$this->center}%")
                ->orWhere("centres.nom", "LIKE", "%{$this->center}%")
                ->orWhere("centres.phone", "LIKE", "%{$this->center}%")
                ->orWhere("centres.adresse", "LIKE", "%{$this->center}%")
                ->get();
            //  dd($this->tab);
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
        //  dd(Str::cou );
        if ((request()->center) == 0) {
            $this->tab = zone::get();
        }else{
            // dd($this->center);
            $this->tab = zone::selectRaw('zones.nom,airs.nom,centres.*')
            ->join('airs', 'airs.zone_id', 'zones.id')
            ->join('centres', 'airs.id', 'centres.air_id')
            ->where('zones.nom',  "$this->center")
            // ->orWhere("airs.nom",  "$this->center")
            // ->orWhere("centres.nom",  "$this->center")
            // ->orWhere("centres.phone",  "$this->center")
            // ->orWhere("centres.adresse",  "$this->center")
            ->get();
            //  dd($this->tab);
        }
        return view('livewire.carthographie');
    }
}
