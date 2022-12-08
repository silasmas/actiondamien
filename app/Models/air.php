<?php

namespace App\Models;

use App\Models\zone;
use App\Models\centre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class air extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $dates=['created_at','updated_at'];
    protected $with = ['centre'];
    public function zone(){
        return $this->belongsTo(zone::class);
    }
    public function centre(){
        return $this->hasMany(centre::class);
    }
}
