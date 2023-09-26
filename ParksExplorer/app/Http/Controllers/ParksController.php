<?php

namespace App\Http\Controllers;

use App\Models\Destinations;
use App\Models\Parks;
use App\Models\Types;

class ParksController extends Controller{


    public function home(){
        return view('home');
    }


    public function destination($id="0976f1b8-5782-4cda-887f-dc1d537d8d6e"){
        $dest=Destinations::find($id);
        
        return view('destination',[
                    'dest'=>$dest,
                    'parks'=>Destinations::getParks($id)
                    ]);
    }

    public function park($id= "1989dca9-c8d3-43b8-b0dd-e5575f692b95"){
        $park=Parks::find($id);
        return view('parc',[
            'park'=>$park,
            'rides'=> Parks::getRides($id),
            'types'=> ParksController::typesOfParkAvalaible($id),
        ]);
    }


    public function search(){
        return view('search');
    }

    
    public function apiSearch($name){
        $result = Parks::getParksByNames($name);     
        return $result;
    }


    public static function destinations(){
        return view('destinations',[
            'dests' => Destinations::all()
        ]);
    }

    public static function typesOfParkAvalaible($idpark){
        $results = Parks::getRides($idpark);
        $types = array();
        foreach($results as $result){         
            if(!is_null($result->type_id)){     
                if(!in_array(Types::find($result->type_id), $types))     
                array_push($types,Types::find($result->type_id));
            }
           
        }
        return $types;
    }

    public static function apiRandomParkData(){
        $park = Parks::inRandomOrder()->first();
        return response()->json($park);
    }

    
}