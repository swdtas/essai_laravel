<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    protected $table = 'etudiant'; // Nom de la table "etudiants"

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'mot_pass',
    ];

    // Définir d'autres propriétés et relations du modèle ici

    // Exemple de relation avec un autre modèle
    public function cours()
    {
        return $this->belongsToMany(Cours::class);
    }
}
