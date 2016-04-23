<?php

namespace App\Http\Controllers;

use App\Pet;
//use Illuminate\Http\Request;

use App\Http\Requests;
use Request;

class PetsController extends Controller {
    /**
     * @return mixed
     * Shows list of the Pets in database
     */
    public function index() {
        $pets = Pet::all();

        return view('pets.index', compact('pets'));
    }

    /**
     * @param $id
     * @return mixed
     * Using the id passed in to query through the db and get pet's info
     */
    public function show($id) {
        $pet = Pet::findOrFail($id)->toArray();
        return view('pets.show', compact('pet'));
    }

    /**
     * @return mixed
     * View to create info of a new pet
     */
    public function create() {
        return view('pets.create');
    }

    /**
     * @return mixed
     * If pet doesn't exist, create else update
     */
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

    /**
     * @param $id
     * @return mixed
     * Use the id to query db, find the row and delete the pet
     */
    public function delete($id) {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect('pets');
    }
    
    /**
     * @param $id
     * @return mixed
     * Update the pet's info
     */
    public function update($id) {
        $pet = Pet::findOrFail($id);
        return view('pets.update', compact('pet'));
    }
}
