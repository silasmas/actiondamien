<?php

namespace App\Models;

use App\Models\rubrique;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class actualite extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $dates=['created_at','updated_at'];

    use HasTranslations;

    public $translatable = ['titre','resumer','description'];

    public function rubrique(){
        return $this->belongsTo(rubrique::class);
    }
}
