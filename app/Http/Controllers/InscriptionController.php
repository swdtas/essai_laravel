<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class InscriptionController extends Controller
{
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'mot_pass' => 'required',
        ]);
        dd($request->all());

        // Créer un nouvel objet du modèle et attribuer les valeurs des champs
        $etudiant = new Etudiant;
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->email = $request->input('email');
        $etudiant->mot_pass = bcrypt($request->input('mot_pass'));
        $etudiant->save();
     

        // Rediriger l'utilisateur vers une autre page ou afficher un message de succès
        return redirect()->back()->with('success', 'Inscription réussie !');
    }
}
