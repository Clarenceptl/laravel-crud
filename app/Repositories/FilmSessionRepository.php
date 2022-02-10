<?php

namespace App\Repositories;

use App\Models\Film;

class FilmSessionRepository implements FilmInterfaceRepository  {

	# Afficher le panier
	public function show () {
		return view("panier"); // resources\views\film\show.blade.php
	}

	# Ajouter/Mettre à jour un produit du panier
	public function add (Film $product) {
		$film = session()->get("film"); // On récupère le panier en session

		// Les informations du produit à ajouter
		$product_details = [
			'name' => $product->titre,
			'price' => $product->price
		];

		$film[$product->id_film] = $product_details; // On ajoute ou on met à jour le produit au panier
		session()->put("film", $film); // On enregistre le panier
	}
    public function remove (Film $product) {
		$film = session()->get("film");
         // On récupère le panier en session
		unset($film[$product->id_film]); // On supprime le produit du tableau $film
		session()->put("film", $film); // On enregistre le panier
	}

	# Vider le panier
	public function empty () {
		session()->forget("film"); // On supprime le panier en session
	}

}

?>
