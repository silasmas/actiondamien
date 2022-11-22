<?php

namespace App\Models;

use App\Models\about;
use App\Models\slide;
use App\Models\projet;
use App\Models\accueil;
use App\Models\contact;
use App\Models\donation;
use App\Models\soutenir;
use App\Models\actualite;
use App\Models\temoignage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class rubrique extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];

    public function about()
    {
        return $this->hasMany(about::class);
    }
    public function accueil()
    {
        return $this->hasMany(accueil::class);
    }
    public function actualite()
    {
        return $this->hasMany(actualite::class);
    }
    public function contact()
    {
        return $this->hasMany(contact::class);
    }
    public function donation()
    {
        return $this->hasMany(donation::class);
    }
    public function projet()
    {
        return $this->hasMany(projet::class);
    }
    public function slide()
    {
        return $this->hasMany(slide::class);
    }
    public function soutenir()
    {
        return $this->hasMany(soutenir::class);
    }
    public function temoignage()
    {
        return $this->hasMany(temoignage::class);
    }
}
