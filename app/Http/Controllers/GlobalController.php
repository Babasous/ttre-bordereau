<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Materiel;
use App\Models\Bordereau;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GlobalController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $fournisseurs = Fournisseur::all(); //dd($fournisseurs);
        
        $materiels = Materiel::all(); //dd($materiels);

        // Recuperation de l'operateur connecté
        $user = User::select('id','name','email')
                ->where('id', '=', Auth::user()->id)
                ->get();
        //dd($user);

        $bordereau = new Bordereau();
        
        return view('bordereau', [

            'bordereau' => $bordereau,

            'fournisseurs' => $fournisseurs,

            'materiels' => $materiels,

            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {          // dd($request);
        // $code_bordereau = $request->input('code_bordereau');
        $quantite = $request->input('quantite');
        $prix = $request->input('prix');
        $total = $request->input('total');
        $user_id = $request->input('user_id');
        $materiel_id = $request->input('materiel_id');
        $fournisseur_id = $request->input('fournisseur_id');

        $bordereau = new Bordereau();

        // $bordereau->code_bordereau = $code_bordereau; 
        $bordereau->quantite = $quantite; 
        $bordereau->prix = $prix; 
        $bordereau->total = $total;
        $bordereau->user_id = $user_id;
        $bordereau->fournisseur_id = $fournisseur_id;
        $bordereau->materiel_id = $materiel_id;
        
        $bordereau->save();

        return view('bordereau.create', [compact('bordereau')]);


    }

    public function show(){

        //       
    }
}
