<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function show_p()
    {
        $orders = Orders::all();
        return view('order',compact('orders'));
    }
    public function insert_kamar()
    {
        $orders= new Orders([
            'id'=>request('id'),
            'nama_pemesan'=>request('nama_pemesan'),
            'chek_in'=>request('chek_in'),
            'chek_out'=>request('chek_out'),
            'jumlah'=>request('jumlah'),
            'email'=>request('email'),
            'no_hp'=>request('no_hp'),
            'nama_tamu'=>request('nama_tamu'),
            'tipe'=>request('tipe'),
        ]);
        $orders->save();
        return redirect('cek');
    }
}
