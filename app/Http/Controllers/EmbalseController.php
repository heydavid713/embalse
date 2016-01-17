<?php

namespace App\Http\Controllers;

use app\Embalse;
use Symfony\Component\HttpFoundation\Request;

class EmbalseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function show(string $slug){

        $embalse = Embalse::whereSlug($slug)->firstOrFail();

        return $embalse->latestRead();
    }


    public function all(){
        $embalses = Embalse::all();

        $reads = [];

        foreach($embalses as $embalse){
            $reads[$embalse->nombre] = $embalse->latestRead();
        }

         return $reads;
    }
}
