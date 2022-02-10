<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            The Wall
        </h2>
    </x-slot>

    @if (session('status'))
        <div style="color: green; font-weight: bold;text-align: center;font-size:30px">
            {{ session('status') }}
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Détail du film {{ $film->id_film }} ({{ $film->annee_production }} - durée: {{ $film->duree_minutes }})<br><br>
                    <br><br>
                    <h3>titre : {{ $film->titre }} </h3>
                    <p>En salle du {{ $film->date_debut_affiche }} à {{ $film->date_fin_affiche }}</p>
                    <p>genre: {{$film->id_genre}}</p>
                    <p>Distributeur: {{ ($film->id_distributeur==null) ? "None" : ($film->id_distributeur) }}</p>
                    <p>resumé: {{ $film->resum }}</p>

                    <br>
                    <a style="padding:10px; background-color:gray; color:white; border-radius:5px; margin-bottom:10px;" href="{{route('films_reservation',$film->id_film, '/reservation')}}">Reserver</a> <br>
                   
                    <a style="position:relative; top:10px;" href="{{ route('films')}}">Revenir à la liste</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
