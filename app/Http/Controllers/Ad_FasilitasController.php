<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class Ad_FasilitasController extends Controller
{
    public function fasilitas_ad()
    {
        $fasilitas_admin = Fasilitas::all();
        return view('ad_fasilitas',compact('fasilitas_admin'));
    }
    public function insert_fasilitas_ad()
    {
        $fasilitas_admin = new Fasilitas([
            'id'=>request('id'),
            'bg_umum'=>request('bg_umum'),
            'bg_vip'=>request('bg_vip'),
            'bg_reguler'=>request('bg_reguler'),
            'bg_standart'=>request('bg_standart'),
        ]);
        $fasilitas_admin->save();
        return redirect('fasilitas_ad');
    }
    public function update_fasilitas_ad(Request $request)
    {
        $fasilitas_admin = Fasilitas::find(request('id'));
        $fasilitas_admin->bg_umum = request('bg_umum');
        $fasilitas_admin->bg_vip = request('bg_vip');
        $fasilitas_admin->bg_reguler = request('bg_reguler');
        $fasilitas_admin->bg_standart = request('bg_standart');
        $fasilitas_admin->save();
        return redirect('fasilitas_ad');
    }
}
