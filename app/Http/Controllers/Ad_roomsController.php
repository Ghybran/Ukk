<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;

class Ad_roomsController extends Controller
{
    public function show()
    {
        $room = Rooms::all();
        return view('ad_kamar',compact('room'));
    }
    public function create_ad()
    {
        $room = new Rooms([
            'id'=>request('id'),
            'nomor_kamar'=>request('nomor_kamar'),
            'type_kamar'=>request('type_kamar'),
        ]);
        $room->save();
        return redirect('ad_kamar');
    }
    public function update_ad(Request $request)
    {
        $room = Rooms::find(request('id'));
        $room->nomor_kamar=request('nomor_kamar');
        $room->type_kamar=request('type_kamar');
        $room->save();
        return redirect('ad_kamar');
    }
}
