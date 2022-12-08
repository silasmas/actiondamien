<?php

namespace App\Models;

use App\Models\zone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class centre extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $dates=['created_at','updated_at'];
    protected $with = ['air'];
    public function air(){
        return $this->belongsTo(zone::class);
    }
}
