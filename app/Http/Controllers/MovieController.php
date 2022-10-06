<?php
//creo il controller con php artisan make:controller NomeController -r
//in modo da avere lo scaffolding di tutte le rotte

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();//richiamo Model che passerà tutti i dati che popolano la tabella Movie
        return view('movie.index', compact('movies'));//ritorno la vista insieme al metodo compact
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.create');//ritorno la vista, serve per creare un form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(//validiamo la richiesta del form per creare un nuovo fumetto
            [
                'thumb' => 'required|max:255|url',
                'title' => 'required|min:5|max:255',
                'price' => 'required|numeric|min:0|max:99.99',
                'series' => 'required|min:5|max:50',
                'sale_date' => 'required|date',
                'type' => ['required', Rule::in(['comic-book', 'graphic-novel'])],
                'description' => 'required|max:65535'
            ],
            [
                'thumb.url' => 'Formato URL non valido!',
                'thumb.required' => 'Il campo Images deve essere necessariamente compilato!'
            ]
        );

        $data = $request->all();//prende la richiesta del form

        $newMovie = new Movie();//crea una nuova istanza Movie

        $newMovie->fill($data);//riempe la variabile dell'istanza con i dati ricevuti dal form

        $newMovie->save();//salviamo il tutto

        return redirect()->route('movies.index')->with('status', 'Fumetto creato con successo');//ritorniamo la vista index, che ci mostrerà il nostro nuovo fumetto
        //la redirect() indica dove deve essere reindirizzato come rotta
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//con id recupero in modo dinamico il valore della rotta
    {
        //variabile che richiama il Model e con metodo findOrFail gli diciamo che se
        //esiste qualche valore, lo ritorna, altrimenti darà la pagina di errore
        $movie = Movie::find($id);

        //ritorno vista e metodo compact che richiama la variabile $movie
        return view('movie.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)//chiamiamo direttamente l'istanza con il parametro $movie
    {   
        return view('movie.edit', ['movie' => $movie]);//ritorna la vista edit 
        //difatto molto simile al metodo create(), ma passeremo il metodo in modo PUT
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {

        $request->validate(//validiamo la richiesta del form per modificare un nuovo fumetto
            [
                'thumb' => 'required|max:255|url',
                'title' => 'required|min:5|max:255',
                'price' => 'required|min:3|max:6',
                'series' => 'required|min:5|max:50',
                'sale_date' => 'required|max:10',
                'type' => ['required', Rule::in(['comic-book', 'graphic-novel'])],
                'description' => 'required|max:65535'
            ],
            [
                'thumb.url' => 'Formato URL non valido!',
                'thumb.required' => 'Il campo Images deve essere necessariamente compilato!'
            ]
        );
        $data = $request->all();//allora predni la richiesta del form di edit
        $movie->update($data);//modifica i dati secondo la richiesta del form
        $movie->save();//salva il tutto nel DB
        return redirect()->route('movies.edit', ['movie' => $movie])->with('status', 'Fumetto aggiornato con successo');//ritorna alla pagina con la rotta..
        //in questo caso resterà nella stessa pagina del edit, ma con le modifiche apportate
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        if($movie){
            $movie->delete();//soft-delete
            return redirect()->route('movies.index')->with('status', 'Fumetto eliminato con successo');
        }else{
            abort(404);
        }
    }
}
