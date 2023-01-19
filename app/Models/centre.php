<?php

namespace App\Models;

use App\Models\air;
use App\Models\zone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class centre extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $dates=['created_at','updated_at'];
    
    public function air(){
        return $this->belongsTo(air::class);
    }
}
