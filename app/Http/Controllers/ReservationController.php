<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(ReservationRequest $request)
    {
        Reservation::create($request->validated());
        return back()->with('success', 'تم الحجز بنجاح.');
    }
}
