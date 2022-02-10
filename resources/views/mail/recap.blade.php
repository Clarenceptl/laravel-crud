<!-- Initialisation du total général à 0 -->
@php $total = 0;$film=[] @endphp
<h2>Récapitulatif de paiement :</h2>
<ul>
    @foreach (session('film') as $item=>$value)

    <li> Nom : {{$value['name']}}, Prix : {{$value['price']}} € </li>
    @php $total += $value['price'] @endphp
    @php array_push($film,$item) @endphp
    @endforeach
</ul>
Total : {{$total}} €
