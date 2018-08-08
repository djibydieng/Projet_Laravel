<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //
    /**
     * Permet au model de ne pas se planter lors d'une creation parexemple et de prendre que les donnees qui l'interesse
     * Etudiant::create($request->all())
     * ou on lui envoie toutes les donnees du requete genre le token qui ne fait pas partie du  requete
     */
    protected $guarded=array();
    //indique que la table mappee par la classe etudiant n'a pas de champs create_at et update_at
    public $timestamps = false;
}
