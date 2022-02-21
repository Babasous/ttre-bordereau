<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Materiel;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GlobalController extends Controller
{
    public function show(){

        $fournisseurs = Fournisseur::all(); //dd($fournisseurs);
        
        $materiels = Materiel::all(); //dd($materiels);

        // Recuperation de l'operateur connecté
        $users = User::select('id','name','email')
                ->where('id', '=', Auth::user()->id)
                ->get();
        //dd($user);
        
        return view('bordereau', [

            'fournisseurs' => $fournisseurs,

            'materiels' => $materiels,

            'users' => $users,
        ]);        
    }
}
