<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    protected $table = "destinations";
    protected $primaryKey = "id";
    protected $keyType= "string";
    public $timestamps = false;


    public function parks(){
        return $this->hasMany(Parks::class,'destination_id');
    }

    public static function getParks($id){
        $result = Destinations::find($id)->parks;
        return $result;
    }

}
