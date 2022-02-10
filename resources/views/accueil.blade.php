<x-app-layout>
    <x-slot name="header">
    <h1 class="fromCenter">Expand from center</h1><br/>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Bienvenue sur la page d'accueil<br>
                    Vous pouvez voir la liste des films à louer <a class="btn btn-primary" href="{{ route('films')}}">ici</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
