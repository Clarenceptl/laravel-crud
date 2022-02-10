<x-app-layout>
    <div class="container">

        @if (session()->has('message'))
        <div class="alert alert-info">{{ session('message') }}</div>
        @endif

        @if (session()->has("film"))
        <h1>Mon panier</h1>
        <div class="table-responsive shadow mb-3">
            <table class="table table-bordered table-hover bg-white mb-0">
                <thead class="thead-dark" >
                    <tr>
                        <th>#</th>
                        <th>Produit</th>
                        <th>Prix</th>
                        <th>Total</th>
                        <th>Opérations</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Initialisation du total général à 0 -->
                    @php $total = 0 @endphp

                    <!-- On parcourt les produits du panier en session : session('basket') -->
                    @foreach (session("film") as $key => $item)

                        <!-- On incrémente le total général par le total de chaque produit du panier -->
                        @php $total += $item['price'] @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <strong><a href="{{ route('films_reservation', $key) }}" title="Afficher le produit" >{{ $item['name'] }}</a></strong>
                            </td>
                            <td>{{ $item['price'] }} Jetons</td>
                            {{-- <td>
                                <!-- Le total du produit = prix * quantité -->
                                {{ $item['price']  }} $
                            </td> --}}
                            <td>
                                <!-- Le Lien pour retirer un produit du panier -->
                                <a href="{{ route('panier.remove', $key) }}" class="btn btn-outline-danger" title="Retirer le produit du panier" >Retirer</a>
                            </td>
                        </tr>
                    @endforeach
                    <tr colspan="2" >
                        <td colspan="4" >Total général</td>
                        <td colspan="2">
                            <!-- On affiche total général -->
                            <strong>{{ $total }} Jetons</strong>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

        <!-- Lien pour vider le panier -->
        <a class="btn btn-danger" href="{{ route('panier.empty') }}" title="Retirer tous les produits du panier" >Vider le panier</a>
        <a class="btn btn-primary" href="{{ route('panier.paiement')}}">Paiement</a>

        @else
        <div class="alert alert-info">Aucun produit au panier</div>
        @endif

    </div>
</x-app-layout>
