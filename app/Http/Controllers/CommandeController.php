<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommandeRequest;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index(){

        return view("index");
    }

    public function command_index(){
        $commandes = Commande::where('is_ok', 0)->get();
        return view("commande",compact("commandes"));
    }

    public function make_commande(CommandeRequest $request){

        Commande::create([
            "nom" => $request->input("name"),
            "salle" => $request->input("salle"),
            "quantite" => $request->input("quantity"),
            "is_ok" => 0,
        ]);

        return redirect()->back()->with('success', 'Commande enregistrée avec succès!');
    }

    public function valide_commande($id)
    {
        $commande = Commande::findOrFail($id);

        $commande->update(['is_ok' => 1]);

        return redirect()->back();
    }
}
