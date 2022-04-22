<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Pengkajian;

class LaporanController extends Controller
{
    public function index($id){
        $data1 = Pengkajian::find($id);
        //menampilkan halaman laporan
        return view('resume.laporan', compact('data1'));
    }

    public function export($id){
        $data1 = Pengkajian::find($id);
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        $data = PDF::loadview('resume.laporan_pdf', compact('data1'))->setPaper('a4','portrait');
        //mendownload laporan.pdf
    	return  $data->download($data1->namapasien.'_paker.pdf');
    }
}
