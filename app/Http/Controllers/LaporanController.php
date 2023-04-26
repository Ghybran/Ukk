<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function tampilkan()
    {
        $lap = Laporan::all();
        return view('laporan',compact('lap'));
    }
    public function tambah()
    {
        $lap = new Laporan([
            'id'=>request('id'),
            'nama_pelapor'=>request('nama_pelapor'),
            'isi'=>request('isi')

        ]);
        $lap->save();
        return redirect('laporan');
    }
}
