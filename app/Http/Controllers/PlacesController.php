<?php

namespace App\Http\Controllers;

//use Laravel\Scout\Searchable;

use Illuminate\Http\Request;
use App\Place;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //use Searchable;

    public function index(Request $request)
    {   
        /*
            Užpildo paieškos pasirinkimą
        */
        $rajonai=Place::select('rajonas')->distinct()->orderBy('rajonas')->get();
        $parkai=Place::select('parkas')->where('parkas', 'NOT LIKE', 'ne')->where('parkas', 'NOT LIKE', '')->distinct()->orderBy('parkas')->get();
        $tipai=Place::select('tipas')->distinct()->orderBy('tipas')->get();
        
        /*
            Perduoda paieškos pasirinkimą Scope funkcijai
        */
        $r = $request ->input('r'); 
        $p = $request ->input('p');  
        $t = $request ->input('t');
        $s = $request ->input('s');

        /*
            Rastą pasirinkimą gražina į ekraną 
        */
        $places = Place::search($s)->Rajonas($r)->Parkas($p)->Tipas($t)->orderBy('id', 'decs')->paginate(9);
            
        return view('places.places', compact('places', 's', 'rajonai', 'parkai', 'tipai', 'r', 'p', 't'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('places.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        /*
            Užpildo paieškos pasirinkimą
        */
        $rajonai=Place::select('rajonas')->distinct()->orderBy('rajonas')->get();
        $parkai=Place::select('parkas')->where('parkas', 'NOT LIKE', 'ne')->where('parkas', 'NOT LIKE', '')->distinct()->orderBy('parkas')->get();
        $tipai=Place::select('tipas')->distinct()->orderBy('tipas')->get();
        
        /*
            Perduoda paieškos pasirinkimą Scope funkcijai
        */
        $r = $request ->input('r'); 
        $p = $request ->input('p');  
        $t = $request ->input('t');
        $s = $request ->input('s');

        /*
            Rastą pasirinkimą gražina į ekraną 
        */
        $places = Place::search($s)->Rajonas($r)->Parkas($p)->Tipas($t)->orderBy('id', 'decs')->paginate(9);


        /*
            Suranda vietą
        */

        $place = Place::findOrFail($id);    
        
        return view('places.places', compact('places', 's', 'rajonai', 'parkai', 'tipai', 'r', 'p', 't'))->with('place', $place);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
