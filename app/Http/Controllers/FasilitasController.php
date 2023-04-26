<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function fasilitas()
    {
        $fa = Fasilitas::all();
        return view('fasilitas',compact('fa'));
    }
}
