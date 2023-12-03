<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fournisseur;

class PagesController extends Controller
{
    public function accueil (){
    return view('accueil');
    }
   public function inscription (){
    return view('inscription');
   }
   public function affichage (){
    return view('affichage');
   }
   /* public function suppresion(){
        return view('suppression');
    }
    public function mise_a_jour(){
        return view('mise_a_jour');
    }*/
    public function inscription_fournisseur_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'bp' => 'required',
        ]);
        $fournisseur= new fournisseur();

        $fournisseur -> Nom = $request->nom;
        $fournisseur -> Telephone = $request->telephone;
        $fournisseur -> Email = $request->email;
        $fournisseur -> BP = $request->bp;
        $fournisseur ->save();
        return redirect('/inscription')->with('status','L\' fournisseur ajouter avec succes');
    }
}
