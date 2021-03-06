<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jorong extends Model
{
    
    use HasFactory;
    protected $table="jorong";
    public $timestamp=false;

    public function nagari(){
        return $this->belongsTo(Nagari::class);
    }
    public function keluargas(){
        return $this->hasMany(KartuKeluarga::class,'jorong_id' );
    }
}
