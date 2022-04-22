<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengkajian;
use App\Models\User;
use Illuminate\Pagination\Paginator;

class PengkajianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pengkajian(){
        // alert()->success('Selamat Datang','Tekan OK untuk melanjutkan');
        return view('admin.pengkajian');
    }

    public function pengkajian_index(){
        alert()->success('Selamat Datang','Tekan OK untuk melanjutkan');
        return view('admin.index');
    }

    public function pengkajian_add(Request $request){

        $pengkajian = new Pengkajian;
        $requestArray = $request->all();
        $pengkajian->namapasien         = $request->nama;
        $pengkajian->usia               = $request->usia;
        $pengkajian->tgl_lahir           = $request->tanggal;
        $pengkajian->rr                  = $request->rr;
        $pengkajian->jenis_kelamin       = $request->jk;
        $pengkajian->ruang_rawat         = $request->ruang;
        $pengkajian->tgl_pengkajian      = date('Y-m-d');
        $pengkajian->sistole             = $request->sistole;
        $pengkajian->diastole            = $request->diastole;
        $pengkajian->nadi                = $request->nadi;
        $pengkajian->kesadaran           = $request->kesadaran;
        $pengkajian->suhu                = $request->suhu;
        $pengkajian->pps                 = $request->pps_level;
        $pengkajian->ecog                = $request->ecog;
        $pengkajian->vas                 = $request->vas;
        $pengkajian->lok_nyeri           = $request->lokasi_nyeri;
        $pengkajian->kualitas_nyeri     = $request->kualitasnyeri;
        $pengkajian->frekuensi_nyeri     = $request->frekuensinyeri;
        $pengkajian->durasi_nyeri        = $request->durasinyeri;
        $pengkajian->periode_waktu       = $request->periodenyeri;
        $pengkajian->wajah               = $request->wajah;
        $pengkajian->posisi_tubuh        = $request->Posisi;
        $pengkajian->visiologi1          = $request->fisiologi1;
        $pengkajian->visiologi2          = $request->fisiologi2;
        if(isset($request->aktivitas)){
            $pengkajian->aktivitas           = implode(',' , $request->aktivitas);
        }
        if(isset($request->tambahan_nyeri)){
            $pengkajian->tambahanlain        = implode(',' , $request->tambahan_nyeri);
        }

        $pengkajian->lokasi_nyeri        = $request->lokasi_nyeri;
        $pengkajian->aktivitas1          = $request->aktivitas1;
        if(isset($request->gejalalain)){
            $pengkajian->gejalalain          = implode(',' , $request->gejalalain);
        }
        if(isset($request->polaistirahat)){
            $pengkajian->polaistirahat       = implode(',' , $request->polaistirahat);
        }
        if(isset($request->keluhan)){
            $pengkajian->keluhan             = implode(',' , $request->keluhan);
        }
        if(isset($request->polanafas)){
            $pengkajian->polanafas             = implode(',' , $request->polanafas);
        }
        $pengkajian->tb                  = $request->tb;
        $pengkajian->bb                  = $request->bb;
        $pengkajian->imt                 = $request->imt;
        $pengkajian->interpretasi        = $request->interpretasi;
        $pengkajian->membranmukosa       = $request->membranmukosa;
        $pengkajian->edema               = $request->edema;
        $pengkajian->dehidrasi           = $request->dehidrasi;
        $pengkajian->urin                = $request->urin;
        $pengkajian->terapi              = $request->terapicairan;
        if(isset($request->tandagejala)){
            $pengkajian->tandagejala         = implode(',' , $request->tandagejala);
        }
        $pengkajian->batuk               = $request->batuk;
        $pengkajian->sputum              = $request->sputum;
        $pengkajian->obn                 = $request->obn;
        $pengkajian->jantung             = $request->jantung;
        $pengkajian->suaranafas          = $request->suaranafas;
        $pengkajian->akral               = $request->akral;
        $pengkajian->warnakulit          = $request->warnakulit;
        $pengkajian->crt                 = $request->crt;
        $pengkajian->hepatojuglar        = $request->hepatojuglar;
        $pengkajian->po2                 = $request->po2;
        $pengkajian->nilaipo2            = $request->nilaipo2;
        $pengkajian->ph                  = $request->ph;
        $pengkajian->nilaiph             = $request->nilaiph;
        $pengkajian->sato2               = $request->sato2;
        $pengkajian->nilaisato2          = $request->nilaisato2;
        $pengkajian->jvp                 = $request->jvp;
        $pengkajian->cvp                 = $request->cvp;
        $pengkajian->vtidal              = $request->vtidal;
        $pengkajian->hematokrit          = $request->hematokrit;
        $pengkajian->fration             = $request->fration;
        if(isset($request->gejalalain95)){
            $pengkajian->gejalalain95        = implode(',' , $request->gejalalain95);
        }
        if(isset($request->keluhanberkemih)){
            $pengkajian->keluhanberkemih     = implode(',' , $request->keluhanberkemih);
        }
        $pengkajian->volurine            = $request->volurine;
        $pengkajian->bab                 = $request->bab;
        $pengkajian->konsistensi         = $request->konsistensi;
        $pengkajian->kelbab              = $request->kelbab;

        if(isset($request->bablain)){
            $pengkajian->bablain             = implode(',' , $request->bablain);
        }
        if(isset($request->neurosensor)){
            $pengkajian->neurosensor         = implode(',' , $request->neurosensor);
        }
        if(isset($request->reproduksi)){
            $pengkajian->reproduksi          = implode(',' , $request->reproduksi);
        }
        if(isset($request->reproduksilain)){
            $pengkajian->reproduksilain      = implode(',' , $request->reproduksilain);
        }
        $pengkajian->mandi               = $request->mandi;
        $pengkajian->berpakaian          = $request->berpakaian;
        $pengkajian->bababak             = $request->bababak;
        $pengkajian->berhias             = $request->berhias;
        $pengkajian->makanminum          = $request->makanminum;
        if(isset($request->kebersihandiri)){
            $pengkajian->kebersihandiri      = implode(',' , $request->kebersihandiri);
        }
        if(isset($request->riwayat)){
            $pengkajian->riwayat             = implode(',' , $request->riwayat);
        }
        $pengkajian->apapunyapenyakit    = $request->apapunyapenyakit;
        $pengkajian->alatjalan           = $request->alatjalan;
        $pengkajian->gayajalan           = $request->gayajalan;
        if(isset($request->berpindahlain)){
            $pengkajian->berpindahlain       = implode(',' , $request->berpindahlain);
        }

        $pengkajian->tinggalbersama      = $request->tinggalbersama;
        // $pengkajian->adakahtergantung    = $request->adakahtergantung;

        // if(isset($request->masalahkeluarga)){
        //     $pengkajian->masalahkeluarga     = $request->masalahkeluarga;
        // }
        $pengkajian->dukunganlain        = $request->dukunganlain;
        $pengkajian->butuhdukungan       = $request->butuhdukungan;
        if(isset($request->masalahdukungan)){
            $pengkajian->masalahdukungan     = implode(',' , $request->masalahdukungan);
        }
        if(isset($request->pikiranmengganggu)){
            $pengkajian->pikiranmengganggu   = implode(',' , $request->pikiranmengganggu);
        }
        if(isset($request->harapanpasien)){
            $pengkajian->harapanpasien       = implode(',' , $request->harapanpasien);
        }
        if(isset($request->pendapatpasien)){
            $pengkajian->pendapatpasien      = implode(',' , $request->pendapatpasien);
        }
        if(isset($request->kopingpasien)){
            $pengkajian->kopingpasien        = implode(',' , $request->kopingpasien);
        }
        if(isset($request->kondisiverbal)){
            $pengkajian->kondisiverbal       = implode(',' , $request->kondisiverbal);
        }
        if(isset($request->lainnyapasien)){
            $pengkajian->lainnyapasien       = implode(',' , $request->lainnyapasien);
        }
        // $checkbox = implode(',' ,$request ->aktivitas);

        // $pengkajian[$request->aktivitas] = $checkbox;

        $pengkajian->save();
        alert()->success('DATA TERSIMPAN','Tekan OK untuk melanjutkan');
        return view('admin.pengkajian');
    }

    public function pengkajian_hapus($id){
        $pengkajian = Pengkajian::find($id);

        $pengkajian->delete();
        alert()->warning('Data Dihapus','Tekan OK untuk melanjutkan');
        return redirect('/resume');
    }

    public function pengkajian_resume(){
        Paginator::useBootstrap();
        $batas      = 10;
        $jmldata    = Pengkajian::count();
        $resume     = Pengkajian::orderBy('id','desc')
                        ->paginate($batas);
        $no         = $batas*($resume->currentPage() -1);
        // alert()->success('Data Resume','Tekan OK untuk melanjutkan');
        return view('admin.resume', compact('jmldata', 'resume', 'no'));
    }

    public function index_akun(){
        return view('admin.akun');
    }

    public function update_akun(Request $request, $id){
        $user = User::find($id);

        $user->name = $request->nama;
        $user->update();
        alert()->success('Data Diperbaharui','Tekan OK untuk melanjutkan');
        return redirect('/akun');
    }
}
