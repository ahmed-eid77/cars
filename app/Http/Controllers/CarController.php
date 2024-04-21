<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        // Check if there is an image uploaded
        if ($request->hasFile('image')) {
            // Get the uploaded image
            $image = $request->file('image');

            // Define the directory to save the image
            $directory = 'assets/images/cars/';

            // Generate a unique file name for the image
            $filename = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();

            // Store the image in the public directory
            $image->move(public_path($directory), $filename);

            // Add the image path to the request data
            $requestData = array_merge($request->validated(), [
                'image' => $directory . $filename,
                'agency_id' => Auth::user()->agency->id
            ]);
        } else {
            // If no image uploaded, set image path to null or any default value you prefer
            $requestData = array_merge($request->validated(), [
                'image' => null,
                'agency_id' => $request->input('agency_id') // Set the agency_id from the form
            ]);
        }

        dd(Auth::user()->agency->id);

        // Create the car with validated data including the image path
        Car::create($requestData);
        return back()->with('success', 'تم اضافة السيارة بنجاح.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('site.agency.add-cars');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
