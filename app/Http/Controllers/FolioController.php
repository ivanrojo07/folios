<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Place;
use App\Models\FakeFolio;
use Illuminate\Http\Request;

class FolioController extends Controller
{
    //

    public function find(Request $request){
        $folio_find = null;
        $real_folio = null;

        $establishment= null;
        $places = null;
        if($request->folio){
            $folio_find = FakeFolio::where('folio',$request->folio)->first();
            $real_folio = $folio_find->real_folio;

            $establishment= $real_folio->establishment;
            $places = $establishment->places;

        }
        return Inertia::render('Folio/Find.js',compact("folio_find",'real_folio','establishment','places'));
    }
}
