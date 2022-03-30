<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppreciateModel extends Model
{
    /**
     * Fonction qui créer la relation entre la table t_appreciate et la table t_user
     * Une appréciation appartient à un utilisateur
     * @return
     */
    public function user(){
        return $this->belongsTo(UserModel::class);
    }

    /**
     * Fonction qui créer la relation entre la table t_appreciate et la table t_book
     * Une appréciation appartient à un livre
     * @return
     */
    public function book(){
        return $this->belongsTo(UserModel::class);
    }

    // Tableau pour les colonnes de la table qui sont remplissables
    protected $fillable = [
        'idBook',
        'idUser',
        'appNote'
    ];

    use HasFactory;
}