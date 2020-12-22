<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nagari extends Model
{
    use HasFactory;
    protected $table="nagari";
    public $timestamp=false;

    public function jorongs(){
        return $this->hasMany(Nagari::class, 'nagari_id');
    }
}