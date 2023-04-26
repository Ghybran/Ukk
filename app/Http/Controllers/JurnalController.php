<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function show()
    {
        $jurnal = Jurnal::all();
        return view('jadwal',compact('jurnal'));
    }
    public function insert()
    {
        $jurnal = new Jurnal([
            'id'=>request('id'),
            'kegiatan'=>request('kegiatan')
        ]);
        $jurnal->save();
        return redirect('jadwal');
    }
}
