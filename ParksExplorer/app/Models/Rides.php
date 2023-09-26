<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rides extends Model
{
    protected $table = "rides";
    protected $primaryKey = "id";
    protected $keyType= "string";
    public $timestamps = false;

    public function parks(){
        return $this->belongsTo(Parks::class);
    }

    public function types(){
        return $this->belongsTo(Types::class);
    }

    public static function getRidesByType($type){
        $result = Rides::where('type_id','$type')->get();
        return $result[0];
    }
}
