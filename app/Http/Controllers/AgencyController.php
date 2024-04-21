<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgencyRequest;
use App\Models\Agency;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgencyController extends Controller
{
    public function index(){

        if(!Auth::user()->agency){
            return view('site.agency.create');
        }

        $cars = Car::where('agency_id', Auth::user()->agency->id)->get();

        return view('site.agency.index', compact('cars'));
    }


    public function store(AgencyRequest $request){

        Agency::create(array_merge($request->validated(), [
            'user_id' => Auth::user()->id
        ]));
        return redirect()->route('agency.index')->with('success', 'تم إنشاء المعرض بنجاح.');
    }

    
}
