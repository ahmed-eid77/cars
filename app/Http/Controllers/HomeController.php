<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Car;
use App\Models\Place;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $places = Place::all();
        return view('site.index', get_defined_vars());
    }

    public function getNearestPlaces(Request $request)
    {
        $userLat = $request->input('latitude');
        $userLng = $request->input('longitude');
        $excludePlaceId = $request->input('exclude_place_id'); // Assuming you pass the ID of the place you want to exclude

        // Assuming Place model has latitude and longitude columns
        $nearestPlaces = Place::select('id', 'name', 'latitude', 'longitude')
            ->where('id', '!=', $excludePlaceId) // Exclude the specific place
            ->selectRaw('( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance', [$userLat, $userLng, $userLat])
            ->orderBy('distance')
            ->get();

        return response()->json([
            'status' => 'success',
            'places' => $nearestPlaces
        ]);
    }

    public function getNearestAgencys(Request $request){
        $userLat = $request->input('latitude');
        $userLng = $request->input('longitude');
    

        // Assuming Place model has latitude and longitude columns
        $nearestPlaces = Agency::select('id', 'name', 'latitude', 'longitude')
            ->selectRaw('( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance', [$userLat, $userLng, $userLat])
            ->orderBy('distance')
            ->get();

        return response()->json([
            'status' => 'success',
            'places' => $nearestPlaces
        ]);
    }

    public function getAvailableCars(Request $request){
        
        $cars = Car::where('agency_id', $request->input('dropId'))->get();

        return response()->json([
            'status' => 'success',
            'cars' => $cars
        ]);
        
    }
}
