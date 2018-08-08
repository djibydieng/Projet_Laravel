<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etudiant;
use Validator;


class EtudiantController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Ajouter un etudiant
     * 
     * @return sur la vue precedente
     */
    public function add( Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'bail|required|between:5,20',
            'prenom' => 'bail|required',
            
        ]);
 
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        Etudiant::create($request->all());
       
        return back()->with('status', trans('etudiant.msgenregistrementok'));
    }

    /**
     * Afficher les informations d'un etudiant.
     * 
     * @params int $id : id de l'etudiant
     * @return view show
     */

     public function show($id)
     {
         $etudiant = Etudiant::findorfail($id); // Si l'id n'existe pas il retourne une erreur 404
         return view('etudiant.show', compact('etudiant'));
     }
    
      /**
     * Modifier les informations d'un etudiant.
     * 
     * @params int $id : id de l'etudiant
     * @return view edit
     */

    public function edit($id)
    {
        $etudiant = Etudiant::findorfail($id); // Si l'id n'existe pas il retourne une erreur 404
        return view('etudiant.edit', compact('etudiant'));
    }

      /**
     * Supprimer les informations d'un etudiant.
     * 
     * @params int $id : id de l'etudiant
     * @return view home
     */

    public function delete($id)
    {
        Etudiant::destroy($id); 
        return redirect('home');
        
    }

    /** Retour a la page home */

    public function goback()
    {
        return redirect('home');
    }
     /**
      * Valider les informations sur  le formulaire
      *
      * @param int $id (id de l'etudiant), request ce qui a ete poste les inputs
      * @return sur la vue precedente
      */

      public function update(Request $request,$id)
      {
        $etudiant = Etudiant::findorfail($id); // Si l'id n'existe pas il retourne une erreur 404
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->save();
        return back()->with('status',trans('etudiant.msgmiseajourok'));

      }
}
