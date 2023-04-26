<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class CekController extends Controller
{
    public function cek()
    {
        $orders = Orders::all();
        return view('cek',compact('orders'));
    }
}
