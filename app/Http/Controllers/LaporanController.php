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

        if(($data1->wajah != '') || ($data1->posisi_tubuh != '') || ($data1->aktivitas1 != '') || ($data1->visiologi1 != '') || ($data1->visiologi2 != '')){
            
            if($data1->wajah == 'Tidak ada ekspresi atau senyum'){
                $wajah = 0;
            }else if($data1->wajah == 'sesekali meringis, mengeluarkan airmata, mengerutkan dahi'){
                $wajah = 1;
            }else{
                $wajah = 2;
            }

            if($data1->posisi_tubuh == 'Berbaring tenang, tidak ada posisi tangan diatas tubuh'){
                $posisi_tubuh = 0;
            }else if($data1->posisi_tubuh == 'Gerakan mengeliat, ketegangan pada tubuh'){
                $posisi_tubuh = 1;
            }else{
                $posisi_tubuh = 2;
            }

            if($data1->aktivitas1 == 'Berbaring tenang, posisi normal'){
                $aktivitas1 = 0;
            }else if($data1->aktivitas1 == 'Mencari perhatian dengan gerakan hati-hati'){
                $aktivitas1 = 1;
            }else{
                $aktivitas1 = 2;
            }

            if($data1->visiologi1 == 'Vital sign stabil tidak ada perubahan'){
                $visiologi1 = 0;
            }else if($data1->visiologi1 == 'perubahan dari salah satu'){
                $visiologi1 = 1;
            }else{
                $visiologi1 = 2;
            }

            if($data1->visiologi2 == 'Kulit hangat dan kerin'){
                $visiologi2 = 0;
            }else if($data1->visiologi2 == 'Dilatasi pupil, berkeringat, memerah'){
                $visiologi2 = 1;
            }else{
                $visiologi2 = 2;
            }

            $jmlnvps = $wajah + $posisi_tubuh + $aktivitas1 + $visiologi1 + $visiologi2;

            if($jmlnvps == 0){
                $hasilnvps = "Tidak Nyeri";
            }else if(($jmlnvps >= 1) && ($jmlnvps <= 3)){
                $hasilnvps = "Nyeri Ringan";
            }else if(($jmlnvps >=4) && ($jmlnvps <= 6)){
                $hasilnvps = "Nyeri Sedang";
            }else{
                $hasilnvps = "Nyeri Berat";
            }

            return view('resume.laporan', compact('data1','hasilnvps','jmlnvps'));
        }else{
            return view('resume.laporan', compact('data1'));
        }
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
