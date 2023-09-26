<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parks extends Model
{
    protected $table = "parks";
    protected $primaryKey = "id";
    protected $keyType= "string";
    public $timestamps = false;

    public function rides(){
        return $this->hasMany(Rides::class,'park_id');
    }

    public function destinations(){
        return $this->belongsTo(Destinations::class);
    }

    public static function getRides($id){
        $result= Parks::find($id)->rides;
        return $result;
    }

    public static function getParksByNames($name){
        $result=Parks::where('name', 'LIKE', '%' . $name . '%')->get();
        return $result;
    }


}
