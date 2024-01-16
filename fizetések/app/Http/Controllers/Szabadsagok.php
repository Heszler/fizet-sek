<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;

class Szabadsagok extends Controller
{
    public function index()
    {
        $adatok = category::all();
        return view('szabadsagok')->with('adatok',$adatok);
    }

    public function create()
    {
    return view('ujadat');
    }

    public function store(Request $request)
    {
        $input= new category();
        $input->id=$request->id;
        $input->kiveheto=$request->kiveheto;
        $input->kivett=$request->kivett;
        $input->save();

        return redirect('szabadsagok')->with('flash_message','Új adat felvéve');
    }

    public function drop()
    {

        
        return view('szabadsagok');
    }
}