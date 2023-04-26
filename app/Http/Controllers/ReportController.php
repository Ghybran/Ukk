<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function show()
    {
        $report = Report::all();
        return view('laporan',compact('report'));
    }
    public function create()
    {
        $report = new Report ([
            'id'=>request('id'),
            'pelapor'=>request('pelapor'),
            'laporan'=>request('laporan'),
            'tanggal_melapor'=>request('tanggal_melapor'),

        ]);
        $report->save();
        return redirect('laporan');
    }
    public function update(Request $request)
    {
        $report=Report::find(request('id'));
        $report->pelapor =request('pelapor');
        $report->laporan =request('laporan');
        $report->tanggal_melapor =request('tanggal_melapor');
        $report->save();
        return redirect('laporan');

    }
    public function delete()
    {
       $report =Report::find(request('id'));
       $report->delete();
       return redirect('laporan');
    }
}
