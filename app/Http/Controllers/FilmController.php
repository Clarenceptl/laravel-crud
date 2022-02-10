<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilmController extends Controller
{
    public function __construct()
    {
        if(Film::all()->first()->price === 0){
            $films = Film::all();
            foreach($films as $film) {
                $test = $film->price = random_int(5,20);
                $film->save();
            }
        }


    }
    public function index()
    {


        //affiche la liste des films
        $films = Film::paginate(12);


        return view('films',['films'=>$films]);
    }

    // function show(Request $request)
    // {
    //     //affiche un film spécifique
    //     $film = Film::find($request->id_film);
    //     return view('film',['film'=>$film]);
    // }
    public function showFreeToken()
    {
        $user = Auth::user()->name;
        $data=[
            'username'=>$user
        ];
        // dans blade {{ $username }}
        return view('freetoken',$data);
    }
    // //update post
    // function update(Request $request)
    // {
    //     $post=User::find($request->id_post);

    //     return view('updatePost',['post'=>$post]);
    // }

    //  // met a jour le post
    //  function save(Request $request)
    //  {
    //     $post=Post::find($request->id);
    //     $post->content=$request->content;
    //     $post->save();
    //     return redirect('wall')->with('status','Post updated');
    //  }
    public function postFreeToken()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        if($user){
            $user->jeton += 50;
            $user->save();
            return redirect('getfreetoken')->with('status','+ 50 balles pour monsieur');
        }
    }

    public function reservation(Request $request) {
        $film = Film::find($request->id_film);

        return view('reservation',['film'=>$film]);
    }
    public function home()
    {
        $films = Film::paginate(21);
        return view('home', ['films' => $films]);
    }

    public function show_film($id) {
        $films = Film::findOrFail($id);
        return view('/show', ['films' => $films]);
    }
    public function latest() {
        $films = Film::orderBy('annee_production', 'desc')->paginate(21);
        return view('/latest', ['films' => $films]);
    }
    public function short_movie() {
        $films = Film::orderBy('duree_minutes', 'asc')->paginate(21);
        return view('/short-movie', ['films' => $films]);
    }
    public function delete_movie(Request $request,$id) {
        $film = Film::find($request->titre);
        $films = Film::find($id)->delete();
        return redirect('films')->with('alert', 'Le film a bien été supprimé.');
    }

    public function create_movie() {
        return view('/create_movie');
    }

    function search() {
        $search = $_GET['name'];
        $film = Film::where('titre','LIKE','%'.$search.'%')->get();
        return view('/search', ['films' => $film]);
    }



    
    public function store(Request $request) {

        $request->validate([
            'title' =>'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
            
        ]);

        $newImageName = time() . '-' . $request->title . '.' . $request->image->extension();
        
        $request->image->move(public_path('images'), $newImageName);



        $film = new Film();
        $film->titre = request('title');
        $film->resum = request('description');
        $film->date_debut_affiche = request('display_date');
        $film->date_fin_affiche = request('end_display_date');
        $film->duree_minutes = request('duration');
        $film->annee_production = request('production_date');
        $film->price = request('price');
        $film->image_path = $newImageName;
        $film->save();
        return redirect('films')->with('alert', 'Le film a bien été créé.');
    }
    // function show_film($id) {
    //     $films = Film::findOrFail($id);
    //     return view('/show', ['films' => $films]);
    // }

    function rate_movie(Request $request, $id) {
        $film = Film::find($id);
        $film->Rate = $request->id;
        $film->save();
        return redirect('films')->with('alert','Vôtre note a bien été envoyé !');
        
    } 
}
