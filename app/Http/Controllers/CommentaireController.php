<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Film;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    function show(Request $request)
    {
        //recupère les post (5 max)
        $commentaires=Commentaire::paginate(5);
        $film = Film::find($request->id_film);
        $data=[
            'coms'=>$commentaires,
            'film'=>$film
        ];
        //recupère tous les commentaires
        //$com=Post::all();
        //ddd($data);
        return view('film',$data);
    }
}
