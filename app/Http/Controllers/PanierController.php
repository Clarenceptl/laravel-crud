<?php

namespace App\Http\Controllers;

use App\Models\Film;

use App\Models\User;
use App\Http\Controllers\EmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\FilmInterfaceRepository;


class PanierController extends Controller
{
    public function paiement(Request $request){
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $films = json_decode($request->id_films);

        if($user && !empty($_POST)){

            foreach ($films as $value) {
                $film = Film::find($value);
                if(!is_null($film)){
                    $film->reserved = 1;

                }else{
                    die('erreur');
                }


            }
            //on vérifie s'il l'utilisateur a assez de jeton
            if($user->jeton < ($request->total)){
                return redirect(route('panier.show'))->with('message','Pas assez de jeton');
            }else{
                $user->jeton = $user->jeton - ($request->total);

                $user->save();
                $film->save();
                $email = new EmailController;
                $email->testMail();
            }

            return redirect(route('panier.empty'))->with('status','Paiement accepté');
        }
    }

	protected $filmRepository; // L'instance filmSessionRepository

    public function __construct (FilmInterfaceRepository $filmRepository) {
    	$this->filmRepository = $filmRepository;

    }
    public function showPaiement(){
        return view("paiement");
    }
    # Affichage du panier
    public function show () {
    	return view("panier"); // resources\views\film\panier.blade.php
    }

    # Ajout d'un produit au panier
    public function add (Film $product) {
    	// Validation de la requête
    	// $this->validate($request, [
    	// 	"quantity" => "numeric|min:1"
    	// ]);

    	// Ajout/Mise à jour du produit au panier avec sa quantité
        $this->filmRepository->add($product);

    	// Redirection vers le panier avec un message
    	return redirect()->route("panier.show")->withMessage("Produit ajouté au panier");
    }

    // Suppression d'un produit du panier
    public function remove (Film $product) {

    	// Suppression du produit du panier par son identifiant
    	$this->filmRepository->remove($product);

    	// Redirection vers le panier
    	return back()->withMessage("Produit retiré du panier");
    }

    // Vider la panier
    public function empty () {

    	// Suppression des informations du panier en session
    	$this->filmRepository->empty();

    	// Redirection vers le panier
    	return back()->withMessage("Panier vidé");

    }

}
