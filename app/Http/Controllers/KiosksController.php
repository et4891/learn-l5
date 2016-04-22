<?php

namespace App\Http\Controllers;

use App\Kiosk;
use Illuminate\Http\Request;

use App\Http\Requests;

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
}
