<?php

namespace App\Http\Controllers;

use App\Pet;
use Illuminate\Http\Request;

use App\Http\Requests;

class PetsController extends Controller
{
    public function index()
    {
        $pets = Pet::all();
        
        return view('pets.index', compact('pets'));
    }

    public function show($id)
    {
        $pet = Pet::findOrFail($id)->toArray();
        return view('pets.show', compact('pet'));
    }
}
