<?php

namespace App\Http\Controllers;

use App\Mail\MyEmail;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function rezervare(Request $request)
    {
        $date = $request->validate([
            'nume' => ['required', 'min:3', 'max:20'],
            'prenume' => ['required', 'min:3', 'max:20'],
            'telefon' => ['required', 'regex:/^(07)[0-9]{8}$/'],
            'email' => ['required', 'email'],
            'data' => ['required'],
            'ora' => ['required'],
            'numar_persoane' => ['required', 'min:1', 'max:6'],
        ]);
        $date = Reservation::create($date);
        Mail::to($date->email)->send(new MyEmail($date->nume, $date->prenume, $date->data, $date->ora, $date->numar_persoane));
        return back();
    }
    
}
