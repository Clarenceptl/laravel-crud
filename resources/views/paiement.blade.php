<x-app-layout>
    <!-- Initialisation du total général à 0 -->
    @php $total = 0;$film=[] @endphp
    <div class="container">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        @if (session()->has('message'))
                        <div class="alert alert-info">{{ session('message') }}</div>
                        @endif

                        @if (session()->has("film")&&!empty(session('film')))
                        <h1>Paiement</h1>
                        <h2>Récapitulatif de paiement :</h2>
                        <ul>
                        @foreach (session('film') as $item=>$value)

                            <li>Nom :{{$value['name']}} </li>
                            @php $total += $value['price'] @endphp
                            @php array_push($film,$item) @endphp
                        @endforeach
                        </ul>
                        Total : {{$total}}
                        {!! Form::open(['route' => 'paiement']) !!}
                        {!! Form::hidden('id_films',json_encode($film)) !!}
                        {!! Form::hidden('total',$total) !!}
                        {!! Form::submit('Payer') !!}
                        {!! Form::close() !!}
                        {{-- <form action="{{ route('paiement') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{$total}}" name='total'>
                            <input type="hidden" value="$" name='id_films'>
                            <button type="submit" dusk="pay" class="btn btn-primary">Payer</button>
                        </form> --}}
                        @else
                        <div class="alert alert-info">Aucun produit à payer</div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
