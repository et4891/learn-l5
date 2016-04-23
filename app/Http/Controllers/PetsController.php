<?php

namespace App\Http\Controllers;

use App\Pet;
//use Illuminate\Http\Request;

use App\Http\Requests;
use Request;

class PetsController extends Controller {
    public function index() {
        $pets = Pet::all();

        return view('pets.index', compact('pets'));
    }

    public function show($id) {
        $pet = Pet::findOrFail($id)->toArray();
        return view('pets.show', compact('pet'));
    }

    public function create() {
        return view('pets.create');
    }

    public function store() {
        $input = Request::all();

        Pet::create($input);

        return redirect('pets');
    }

    public function delete($id) {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect('pets');
    }
}
