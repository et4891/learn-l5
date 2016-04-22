<?php

namespace App\Http\Controllers;

use App\Kiosk;
//use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use Request;

class KiosksController extends Controller
{
    public function index()
    {
        $kiosks = Kiosk::all();
        $title = "All Kiosks";
        return view('kiosks.index', compact('title', 'kiosks'));
    }

    public function show($id)
    {
        $kiosk = Kiosk::find($id)->toArray();
        $title = $kiosk['name'];
        return view('kiosks.show', compact('title', 'kiosk'));
    }

    public function create()
    {
        return view('kiosks.create');
    }

    public function store()
    {
        $input = Request::all();
        $input['installed_date'] = Carbon::now();
        
        Kiosk::create($input);

        return redirect('kiosks');

    }
}
