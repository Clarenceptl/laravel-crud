<?php

namespace App\Repositories;

use App\Models\Film;

interface FilmInterfaceRepository {

	// Afficher le panier
	public function show();

	// Ajouter un produit au panier
	public function add(Film $product);

	// Retirer un produit du panier
	public function remove(Film $product);

	// Vider le panier
	public function empty();

}

?>
