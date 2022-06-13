<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Films;
use App\Models\Salles;
use App\Models\réalisateurs;

class FilmsController extends Controller
{
    public function getAll() {
    
        $films = films::with('salles', 'réalisateurs')->get();
        $réalisateurs = réalisateurs::all();
        $salles = salles::all();
        return view('crudfilms', [
            'films' => $films,
            'réalisateur' => $réalisateurs,
            'salle' => $salles,
        ]);
    }
}
