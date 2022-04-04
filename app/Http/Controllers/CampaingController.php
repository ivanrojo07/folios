<?php

namespace App\Http\Controllers;

use App\Models\Campaing;
use App\Models\FakeFolio;
use App\Models\RealFolio;
use Inertia\Inertia;
use Illuminate\Http\Request;

class CampaingController extends Controller
{
    //

    public function create(){
        $folios = RealFolio::with('establishment')->get();
        return Inertia::render('Campaing/Create',compact('folios'));
    }
    public function store(Request $request){
        $campaing = Campaing::create([
            'name'=>$request->nombre
        ]);

        $campaing->real_folios()->attach($request->folio_id);

        $fake_folios = [];
        
        for ($i=0; $i < 5; $i++) { 
            $fake_folio = FakeFolio::create([
                'folio'=>uniqid(),
                'real_folio_id'=>$request->folio_id
            ]);
            array_push($fake_folios,$fake_folio);
        }
        return redirect()->route('index');
    }
}
