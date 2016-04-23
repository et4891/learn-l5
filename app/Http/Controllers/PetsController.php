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

        $id = Request::get('id');
        $exist = Pet::find($id);
        if($exist == null){
            Pet::create($input);
        }else{
            $exist->type = $input['type'];
            $exist->name = $input['name'];
            $exist->owner = $input['owner'];
            $exist->notes = $input['notes'];
            $exist->status = $input['status'];
            $exist->adopted = $input['adopted'];
            $exist->save();
        }
        return redirect('pets');
    }

    public function delete($id) {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect('pets');
    }

    public function update($id) {
        $pet = Pet::findOrFail($id);
        return view('pets.update', compact('pet'));
    }
}
