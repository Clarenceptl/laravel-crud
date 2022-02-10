<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>

.rate {
    float: left;
    /* padding: 0 10px; */
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

#title_film {
    margin-top:15px;
}

.bg_rate {
    display: flex;
    flex-direction: column;
    align-content: flex-start;
    flex-wrap: wrap;
    padding:1em;
}

.btn-send {
    background: #deb217;
    color: white;
    padding: 5px;
    border-radius: 5px;
}

  </style>
</head>
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
                    Réserver le film {{ $film->titre }}<br><br>
                    {{-- <input class="date form-control" type="text" placeholder="DATE" > --}}
                    <br>
                    <p>{{ $film->resum }}...</p>
                    <br>
                    <ul>
                        <li>Durée du film : {{ $film->duree_minutes }} min</li>
                        <li>Distributeur: {{ ($film->id_distributeur==null) ? "None" : ($film->id_distributeur) }}</li>
                        <li>Année de production : {{ $film->annee_production }} </li>
                        <li>Prix : {{ $film->price }} pièces </li>

                    </ul>
                    <div class="d-flex flex-column">

                        <form method="POST" action="{{route('panier.add', $film)}}" class="form-inline d-inline-block mt-3" >
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-success" >+ Ajouter au panier</button>
                        </form>
                        {{-- <a class="btn btn-success mb-4 mt-2" href="{{route('films_reservation',$film->id_film)}}">Reserver</a> --}}

                        <div class="d-flex">
                            <a class="btn btn-primary btn-lg" href="{{route('films')}}">Revenir à la liste</a>
                        </div>
                    </div>
                </div>
                <div class="bg_rate">
                    <div class="rate">
                        <h1 id="title_film">Noter le film :</h1>
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5"  title="text">5 stars</label> 
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                    
                    <button type="submit" class="btn-send" onclick="test()">Envoyer</button>
                    
                </div>
            </div>
        </div>
    </div>
    <script>
       function test() {
        // console.log(window.location.pathname);

        var myMainSite = window.location.pathname;
        var splitUrl = myMainSite.split('/')
        console.log(splitUrl[2]);

        var rateStars = document.querySelector(
                'input[name="rate"]:checked');
              
            if(rateStars != null) {
                rateStars = rateStars.value
                
            } else {
                rateStars = 0;
            }
            console.log(rateStars);
            location.replace("http://127.0.0.1:8000/film/"+ splitUrl[2] + "/" + rateStars);
       }

       
    </script>
</x-app-layout>
