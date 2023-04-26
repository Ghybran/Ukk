<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function show()
    {
        $rooms = Rooms::all();
        return view('informan',compact('rooms'));
        return redirect('order');
    }
}
