<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Accueil
        </h2>
    </x-slot>

    <div class="container mt-8">
        <div class="row">
                <div class="col-md-6">
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <!-- <a class="btn btn-danger">Les plus connus</a> -->
                        <a class="btn btn-warning" href="/latest">Films récents</a>
                        <a class="btn btn-success" href="/short-movie">Films courts</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <form method="GET" action="/search" class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputPassword2" class="sr-only"></label>
                            <input type="text" class="form-control" id="inputPassword2" name="name" placeholder="Recherche..">

                        </div>
                    </form>
                </div>
        </div>
        
        <div class="row mt-5">
        @foreach($films as $film)
                <div class="col-sm-4 mb-8">
                    <div class="card" style="width: 18rem;">
                        @if(!$film->image_path)
                            <img src="https://via.placeholder.com/350" class="card-img-top" alt="...">
                        @else
                            <img src="{{ asset('images/' . $film->image_path) }}"  class="card-img-top" alt="...">
                        @endif
                        
                        <div class="card-body">
                            <h5 class="card-title">{{ $film->titre }}</h5>
                            <!-- <p class="card-text">{{ $film->resum}}</p> -->
                            <a href="film/{{ $film->id_film }}" class="btn btn-primary">Détail</a>
                            @if (Auth::user()->utype === "admin")
                            <a href="delete/{{ $film->id_film }}" class="btn btn-danger">Supprimer</a>
                            @endif
                        </div>
                    </div>
                </div>
        @endforeach
        {{ $films->links() }}
        </div>
    </div>

</x-app-layout>
