<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = "brands";
    protected $primaryKey = "id";
    protected $keyType= "string";
    public $timestamps = false;


    public function parks(){
        return $this->hasMany(Parks::class);
    }
}
