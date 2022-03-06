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
                <div dusk="film-list" class="p-6 bg-white border-b border-gray-200" >
                    Liste des films !<br><br>
                    <br><br>
                    <ul>
                        @foreach ($films as $film)
                            <li>
                                [<a href="film/{{$film->id_film}}">{{$film->titre}}</a>]
                            </li>

                            <br>
                            {{-- [<a href="{{route('post_delete',$post->id)}}">delete</a>] --}}
                        @endforeach

                        {{$films->links()}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
