<?php

// namespace App\Http\Controllers;

// use App\Models\Student;
// use Illuminate\Http\Request;

// class StudentController extends Controller
// {
//  #################### SHOW ##################
//    public function ruang()
//     {
//         $rpl=rpl::all();
//         return view('ruangan/rpl')->with('rpl',$rpl);
//     }
    // ################# CREATE ################
    // public function createitem()
    // {
    //     $absen = new rpl([
    //         'id'=>request('id'),
    //         'nama'=>request('nama'),
    //         'tanggal'=>request('tanggal'),
    //         'kelas'=>request('kelas'),
    //         'who'=>Auth::user()->id
    //     ]);
    //     $absen->save();
    //     return redirect('ruangan/rpl');
    // }
    // ################ UPDATE ################
    public function updateItem(Request $request)
    {
        $rpl = rpl::find(request('id'));
        $rpl->nama = request('nama');
        $rpl->tanggal = request('tanggal');
        $rpl->kelas = request('kelas');
        $rpl->who = Auth::user()->id;
        $rpl->save();
        return redirect('ruangan/rpl');
    }
    // ################## DELETE ###############
    public function deleteItem()
    {
        $people = rpl::find(request('id'));
        $people->delete();
        return redirect('ruangan/rpl');
    }
// }
