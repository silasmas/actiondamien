<?php

namespace App\Models;

use App\Models\rubrique;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class temoignage extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $dates=['created_at','updated_at'];

    use HasTranslations;

    public $translatable = [];

    public function rubrique(){
        return $this->belongsTo(rubrique::class);
    }
}
