<?php

namespace App\Http\Controllers;

//use Laravel\Scout\Searchable;

use Illuminate\Http\Request;
use FarhanWazir\GoogleMaps\GMaps;
use App\Place;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //use Searchable;

    protected $gmap;
    public function __construct(GMaps $gmap){
        $this->gmap = $gmap;
    }

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

        /*
            Google maps 
        */

        /******** Custom Map Controls ********
        $leftTopControls = ['document.getElementById("leftTopControl")']; // values must be html or javascript element
        $this->gmap->injectControlsInLeftTop = $leftTopControls; // inject into map
        $leftCenterControls = ['document.getElementById("leftCenterControl")'];
        $this->gmap->injectControlsInLeftCenter = $leftCenterControls;
        $leftBottomControls = ['document.getElementById("leftBottomControl")'];
        $this->gmap->injectControlsInLeftBottom = $leftBottomControls;
        $bottomLeftControls = ['document.getElementById("bottomLeftControl")'];
        $this->gmap->injectControlsInBottomLeft = $bottomLeftControls;
        $bottomCenterControls = ['document.getElementById("bottomCenterControl")'];
        $this->gmap->injectControlsInBottomCenter = $bottomCenterControls;
        $bottomRightControls = ['document.getElementById("bottomRightControl")'];
        $this->gmap->injectControlsInBottomRight = $bottomRightControls;
        $rightTopControls = ['document.getElementById("rightTopControl")'];
        $this->gmap->injectControlsInRightTop = $rightTopControls;
        $rightCenterControls = ['document.getElementById("rightCenterControl")'];
        $this->gmap->injectControlsInRightCenter = $rightCenterControls;
        $rightBottomControls = ['document.getElementById("rightBottomControl")'];
        $this->gmap->injectControlsInRightBottom = $rightBottomControls;
        $topLeftControls = ['document.getElementById("topLeftControl")'];
        $this->gmap->injectControlsInTopLeft = $topLeftControls;
        $topCenterControls = ['document.getElementById("topCenterControl")'];
        $this->gmap->injectControlsInTopCenter = $topCenterControls;
        $topRightControls = ['document.getElementById("topRightControl")'];
        $this->gmap->injectControlsInTopRight = $topRightControls;
        /******** End Controls ********

        $config = array();
        $config['map_height'] = "100%";
        $config['center'] = 'Clifton, Karachi';
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
            });
        }
        centreGot = true;';
        $this->gmap->initialize($config); // Initialize Map with custom configuration
        // set up the marker ready for positioning
        $marker = array();
        $marker['draggable'] = true;
        $marker['ondragend'] = '
        iw_'. $this->gmap->map_name .'.close();
        reverseGeocode(event.latLng, function(status, result, mark){
            if(status == 200){
                iw_'. $this->gmap->map_name .'.setContent(result);
                iw_'. $this->gmap->map_name .'.open('. $this->gmap->map_name .', mark);
            }
        }, this);
        ';
        $this->gmap->add_marker($marker);
        $map = $this->gmap->create_map(); // This object will render javascript files and map view; you can call JS by $map['js'] and map view by $map['html']
*/

        return view('places.places', compact('places', 'map', 's', 'rajonai', 'parkai', 'tipai', 'r', 'p', 't'));
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
        
        
        $place = Place::findOrFail($id);

        /*
            Padidina perziuros reiksme 1 
        */
        $place->increment('perziuros');


        return view('places.place', compact('places', 's', 'rajonai', 'parkai', 'tipai', 'r', 'p', 't'))->with('place', $place);
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
