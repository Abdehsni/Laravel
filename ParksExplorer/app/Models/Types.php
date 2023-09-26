<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    protected $table = "types";
    protected $primaryKey = "id";
    protected $keyType= "string";
    public $timestamps = false;
    
    public function rides(){
        return $this->hasMany(Rides::class,'type_id');
    }

    public static function getRides($id){
        return Types::find($id)->rides;
    }

}
