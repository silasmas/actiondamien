<?php

namespace App\Models;

use App\Models\rubrique;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class accueil extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $dates=['created_at','updated_at'];

    use HasTranslations;

    public $translatable = ['titre1','titre2','maladie',
    'h1maladie','description','txtbtn','txtbtn2','telephone','txtphone','nbrpays'];

    public function rubrique(){
        return $this->belongsTo(rubrique::class);
    }
}
