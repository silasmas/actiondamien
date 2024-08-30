<?php

namespace App\Http\Livewire;

use App\Models\actualite;
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

    private function s($val)
    {
        return $val > 1 ? "s" : ""; // Corrigé pour être cohérent avec le pluriel
    }
    protected $queryString = [
        'actualite' => ['except' => ''],
        'annee' => ['except' => ''],
    ];
    // public function updating($nom, $value)
    // {

    //     if (request()->annee != "") {
    //         $this->tab = actualite::where("annee", "LIKE", "{$this->annee}")
    //             ->orderBy("annee", "DESC")->get();
    //         $this->tab->withPath('news?annee=' . request()->annee);
    //     } elseif (request()->actualite != "") {
    //         // dd('ok');
    //         $this->tab = actualite::where("titre", "LIKE", "%{$this->actualite}%")
    //             ->orWhere("description", "LIKE", "%{$this->actualite}%")
    //             ->orderBy("annee", "DESC")->get();
    //         $this->tab->withPath('news?actualite=' . request()->actualite);
    //     }
    //     // else{
    //     //     $this->tab = actualite::get();
    //     // }
    // }
    public function updating($nom, $value)
    {
        $this->resetPage(); // Réinitialiser la pagination lors de la mise à jour

        if ($this->annee) {
            $this->tab = Actualite::where('annee', 'LIKE', "%{$this->annee}%")
                ->orderBy('annee', 'DESC')
                ->get();
        } elseif ($this->actualite) {
            $this->tab = Actualite::where('titre', 'LIKE', "%{$this->actualite}%")
                ->orderBy('annee', 'DESC')
                ->get();
        } else {
            $this->tab = Actualite::all(); // Récupérer toutes les actualités si rien n'est filtré
        }

        $this->existe = count($this->tab) === 0; // Mettre à jour l'état d'existence
        $this->notifyCount();
    }
    private function notifyCount()
    {
        if ($this->existe) {
            session()->flash('message', 'Aucune information trouvée');
            session()->flash('type', 'danger');
        } else {
            session()->flash('message', count($this->tab) . ' information' . $this->s(count($this->tab)) . ' trouvée');
            session()->flash('type', 'success');
        }
    }
    public function actualiser()
    {

        $this->resetPage();
    }
    // public function paginationView(){
    //     // return "vendor.pagination.bootstrap-4";
    // }
    // public function updatedAnnee()
    // {
    //     $tab = "";
    //     if (Str::length($this->annee) > 0) {
    //         $this->tab = actualite::where("annee", "LIKE", "{$this->annee}")
    //             ->orderBy("annee", "DESC")->get();
    //         if (count($this->tab) > 0) {
    //             $this->existe = false;
    //             session()->flash('message', count($this->tab) . ' information ' . $this->s(count($this->tab)) . ' trouvée' . $this->s(count($this->tab)));
    //             session()->flash('type', 'success');
    //         } else {
    //             $this->existe = true;
    //             session()->flash('message', 'Aucune information trouvé');
    //             session()->flash('type', 'danger');
    //         }
    //         return $this->tab;
    //     } else {

    //     }
    // }
    // public function updatedActualite()
    // {
    //     $tab = "";
    //     if (Str::length($this->actualite) > 0) {
    //         $this->tab = actualite::where("titre", "LIKE", "%{$this->actualite}%")
    //             ->orWhere("description", "LIKE", "%{$this->actualite}%")
    //             ->orderBy("annee", "DESC")->get();
    //         //    dd( $newss));
    //         if (count($this->tab) > 0) {
    //             $this->existe = false;
    //             session()->flash('message', count($this->tab) . ' information ' . $this->s(count($this->tab)) . ' trouvée' . $this->s(count($this->tab)));
    //             session()->flash('type', 'success');
    //         } else {
    //             $this->existe = true;
    //             session()->flash('message', 'Aucune information trouvé');
    //             session()->flash('type', 'danger');
    //         }
    //         //
    //         return $this->tab;
    //     } else {

    //     }
    // }
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

    // public function render()
    // {

    //     // if(request()->actualite=='' && request()->actualite==""){

    //     //     $this->tab = actualite::get();
    //     // }
    //     if (request()->annee != "") {
    //         $this->tab = actualite::where("annee", "LIKE", "{$this->annee}")
    //             ->orderBy("annee", "DESC")->get();
    //         // $this->tab->withPath('news?annee=' . request()->annee);
    //     } elseif (request()->actualite != "") {
    //         // dd('ok');
    //         $this->tab = actualite::where("titre", "LIKE", "%{$this->actualite}%")
    //             ->orWhere("description", "LIKE", "%{$this->actualite}%")
    //             ->orderBy("annee", "DESC")->get();
    //         // $this->tab->withPath('news?actualite=' . request()->actualite);
    //     } else {
    //         $this->tab = actualite::get();
    //     }

    //     return view('livewire.news');
    // }

    public function render()
    {
        // Récupération des paramètres de la requête
        // $annee = request()->annee;
        // $actualite = request()->actualite;

        // // Construction de la requête de base
        // $query = actualite::query()->orderBy("annee", "DESC");

        // // Ajout des conditions selon les paramètres de la requête
        // if (!empty($annee)) {
        //     $query->where("titre", "LIKE", "%{$annee}%");
        // } elseif (!empty($actualite)) {
        //     $query->where("titre", "LIKE", "%{$actualite}%");
        // }

        // // Exécution de la requête et récupération des résultats
        // $this->tab = $query->get();

        // return view('livewire.news');
        return view('livewire.news', [
            'actualites' => $this->tab, // Passer les actualités à la vue
        ]);
    }

}
