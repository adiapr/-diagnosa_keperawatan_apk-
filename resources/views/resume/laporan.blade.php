@extends('admin.pages.main2')


@section('content')
<div class="container-fluid mt-4">
    <div class="row mt-6">
        <div class="col-md-12">
            <br><br>
            <a href="/resume" class="btn btn-warning btn-sm"> <i class="fa fa-reply-all"></i> Kembali</a>
            <a href="/exportlaporan/{{ $data1->id }}" class="btn btn-success btn-sm"> <i class="fa fa-file-pdf-o"></i> Download</a><br><br>
        </div>
    </div>
    <div class="row"  style="border:solid 2px grey;">
        <div class="col-md-12">

            <h3 align="center"><img src="http://diagnosa.mangroveleather.id/img/logo.webp"  alt="" width="300"><br>
                Resume Asuhan keperawatan</h3>
            <hr>
        </div>
        <div class="col-md-12">
            <table width="100%">
                <tr>
                    <td width="30%">Nama Pasien</td>
                    <td width="2%">:</td>
                    <td width="68%">{{  $data1->namapasien  }}</td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <td> : </td>
                    <td>{{ $data1->usia }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td> : </td>
                    <td>{{  $data1->tgl_lahir  }}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td> : </td>
                    <td>{{ $data1->jenis_kelamin }}</td>
                </tr>
                <tr>
                    <td>Ruang Rawat</td>
                    <td> : </td>
                    <td>{{ $data1->ruang_rawat }}</td>
                </tr>
                <tr>
                    <td>Tanggal Pengkajian</td>
                    <td> : </td>
                    <td>{{ $data1->tgl_pengkajian }}</td>
                </tr>
            </table>

            <table>
                <tr>
                    <td>TD</td>
                    <td> : </td>
                    <td>
                        @if((($data1->sistole/$data1->diastole) <1.5) && (($data1->usia < 20) || ($data1->usia >60)))
                        {{ $data1->sistole }}/{{ $data1->diastole }} mmHg <b>(TD Menurun)</b>
                        @elseif((($data1->sistole/$data1->diastole) >1.5) && (($data1->usia < 20) || ($data1->usia >60)))
                        {{ $data1->sistole }}/{{ $data1->diastole }} mmHg <b>(TD Meningkat)</b>
                        @elseif((($data1->sistole/$data1->diastole) == 1.5) && (($data1->usia < 20) || ($data1->usia >60)))
                        {{ $data1->sistole }}/{{ $data1->diastole }} mmHg <b>(TD Normal)</b>
                        @else
                        {{ $data1->sistole }}/{{ $data1->diastole }} mmHg <b>(TD Normal)</b>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>RR</td>
                    <td> : </td>
                    <td>
                        @if($data1->rr >24)
                        {{ $data1->rr }} x/mnt <b>(Takipnea)</b>
                        @elseif($data1->rr <16)
                        {{ $data1->rr }} x/mnt <b>(Bradipnea)</b>
                        @else
                        {{ $data1->rr }} x/mnt <b>(Normal)</b>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Nadi</td>
                    <td> : </td>
                    <td>
                        @if($data1->nadi <60)
                        {{ $data1->nadi }} x/mnt <b>(Nadi Menurun)</b>
                        @elseif($data1->nadi >100)
                        {{ $data1->nadi }} x/mnt <b>(Nadi Meningkat)</b>
                        @else
                        {{ $data1->nadi }} x/mnt <b>(Normal)</b>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Suhu</td>
                    <td> : </td>
                    <td>
                        @if($data1->suhu <36)
                        {{ $data1->suhu }} <sup>0</sup>C <b>(Suhu Rendah)</b>
                        @elseif($data1->suhu >37)
                        {{ $data1->suhu }} <sup>0</sup>C <b>(Suhu Tinggi)</b>
                        @else
                        {{ $data1->suhu }} <sup>0</sup>C <b>(Normal)</b>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Kesadaran</td>
                    <td> : </td>
                    <td>{{ $data1->kesadaran }}</td>
                </tr>
                <tr>
                    <td>PPS</td>
                    <td> : </td>
                    <td>
                        @if($data1->pps <= 50)
                        {{ $data1->pps }}% <b>(Pasien Paliatif)</b>
                        @else
                        {{ $data1->pps }}% <b>(Tidak Termasuk Pasien Paliatif)</b>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>ECOG</td>
                    <td> : </td>
                    <td>
                        @if(($data1->ecog == 0 ) || ($data1->ecog == 1 ) || ($data1->ecog == 5))
                        <b>TIDAK TERMASUK PASIEN PALIATIF</b>
                        @endif

                        @if(($data1->ecog == 2 ) || ($data1->ecog == 3 ))
                        <b>TERMASUK PASIEN PALIATIF</b>
                        @endif
                    </td>
                </tr>
                <tr valign="top">
                    <td>Lokasi Nyeri</td>
                    <td> : </td>
                    <td>
                        <b>No. {{$data1->lok_nyeri}}</b><br>
                        <img src="https://diagnosa.mangroveleather.id/img/anatomi.jpg" alt="" width="95%">
                    </td>
                </tr>
                <tr valign="top">
                    <td>Kualitas Nyeri</td>
                    <td> : </td>
                    <td>
                        {{$data1->kualitas_nyeri}}
                    </td>
                </tr>
                <tr valign="top">
                    <td>Frekuensi Nyeri</td>
                    <td> : </td>
                    <td>
                        {{$data1->frekuensi_nyeri}}
                    </td>
                </tr>
                <tr valign="top">
                    <td>Lokasi Nyeri</td>
                    <td> : </td>
                    <td>
                        {{$data1->kualitas_nyeri}}
                    </td>
                </tr>
                <tr valign="top">
                    <td>Durasi Nyeri</td>
                    <td> : </td>
                    <td>
                        {{$data1->durasi_nyeri}}
                    </td>
                </tr>
                <tr valign="top">
                    <td>Periode Waktu</td>
                    <td> : </td>
                    <td>
                        {{$data1->periode_waktu}}
                    </td>
                </tr>
            </table>
            <hr>
            @if ($data1->aktivitas != "")
                <b>Aktivitas :</b><br>
                {{ $data1->aktivitas }}
                <br>
            @endif

            @if ($data1->tambahanlain != "")
                <b>Data Tambahan Nyeri :</b><br>
                {{ $data1->tambahanlain }}
                <br>
                <br>
            @endif

            @if ($data1->polaistirahat != "")
                <b>Pola Istirahat dan Tidur :</b><br>
                {{ $data1->polaistirahat }}
                <br>
                <br>
            @endif

            @if ($data1->keluhan != "")
                <b>Nutrisi dan cairan :</b><br>
                {{ $data1->keluhan }}
                <br>
                <br>
            @endif

            @if ($data1->tb != "")
                <b>Tinggi Badan :</b>
                {{ $data1->tb }} cm
                <br>
                <br>
            @endif

            @if ($data1->bb != "")
                <b>Berat Badan :</b>
                {{ $data1->bb }} Kg
                <br>
                <br>
            @endif

            @if ($data1->imt != "")
                <b>IMT :</b>
                {{ $data1->imt }}
                <br>
                <br>
            @endif

            @if ($data1->interpretasi != "")
                <b>Interpretasi :</b><br>
                {{ $data1->interpretasi }}
                <br>
                <br>
            @endif

            @if ($data1->peristaltik != "")
                <b>Peristaltik Usus :</b><br>
                {{ $data1->peristaltik }}
                <br>
                <br>
            @endif

            @if ($data1->membranmukosa != "")
                <b> Membran Mukosa :</b><br>
                {{ $data1->membranmukosa }}
                <br>
                <br>
            @endif

            @if ($data1->sputum != "")
                <b>Sputum :</b><br>
                {{ $data1->sputum }}
                <br>
                <br>
            @endif

            @if ($data1->edema != "")
                <b>Edema :</b><br>
                {{ $data1->edema }}
                <br>
                <br>
            @endif

            @if ($data1->dehidrasi != "")
                <b>Edema :</b><br>
                {{ $data1->dehidrasi }}
                <br>
            @endif

            {{-- <br>
            @if ($data1->terapicairan != "")
                <b>Terapi Cairan :</b><br>
                {{ $data1->terapicairan }} CC
            @endif
            <br> --}}

            @if ($data1->tandagejala != "")
                <br>
                <b>Tanda gejalanya :</b><br>
                {{ $data1->tandagejala }}
                <br>
            @endif

            {{-- <br>
            @if ($data1->polanafas != "")
                <b>Pola nafas:</b><br>
                {{ $data1->polanafas }}
            @endif
            <br> --}}
            <br>
            @if ($data1->batuk != "")
                <b>Batuk :</b><br>
                {{ $data1->batuk }}
                <br>
                <br>
            @endif

            @if ($data1->obn != "")
                <b>Penggunaan Otot Bantu Nafas :</b><br>
                {{ $data1->obn }}
                <br>
                <br>
            @endif

            @if ($data1->jantung != "")
                <b>Akral :</b><br>
                {{ $data1->jantung }}
                <br>
                <br>
            @endif

            @if ($data1->akral != "")
                <b>Irama Jantung :</b><br>
                {{ $data1->akral }}
                <br>
                <br>
            @endif

            @if ($data1->warnakulit != "")
                <b>Warna Kulit :</b><br>
                {{ $data1->warnakulit }}
                <br>
                <br>
            @endif

            @if ($data1->crt != "")
                <b>CRT :</b><br>
                {{ $data1->crt }}
                <br>
                <br>
            @endif

            @if ($data1->hepatojuglar != "")
                <b>Reflek Hepatojuglar :</b><br>
                {{ $data1->hepatojuglar }}
                <br>
            @endif

            <table width="100%">
                @if ($data1->po2 != "")
                <tr valign="top">
                    <td>PO2</td>
                    <td> : {{ $data1->po2 }}</td>
                    <td>Nilai : <br>
                        {{ $data1->nilaipo2 }} mmhg
                    </td>
                </tr>
                @endif
                @if ($data1->ph != "")
                <tr valign="top">
                    <td>PH</td>
                    <td> : {{ $data1->ph}}</td>
                    <td>Nilai : <br>
                        {{ $data1->nilaiph }} mmhg
                    </td>
                </tr>
                @endif
                @if ($data1->sato2 != "")
                <tr valign="top">
                    <td>PH</td>
                    <td> : {{ $data1->sato2}}</td>
                    <td>Nilai : <br>
                        {{ $data1->nilaisato2 }} mmhg
                    </td>
                </tr>
                @endif
                @if ($data1->jvp != "")
                <tr valign="top">
                    <td>JVP  </td>
                    <td colspan="2"> : {{ $data1->jvp }}</td>
                </tr>
                @endif
                @if ($data1->cvp != "")
                <tr valign="top">
                    <td>CVP</td>
                    <td colspan="2"> : {{ $data1->cvp }}</td>
                </tr>
                @endif
                @if ($data1->vtidal != "")
                <tr valign="top">
                    <td>93. Volume Tidal</td>
                    <td colspan="2"> : {{ $data1->vtidal }}</td>
                </tr>
                @endif
                @if ($data1->hematokrit != "")
                <tr valign="top">
                    <td>Hematokrit</td>
                    <td colspan="2"> : {{ $data1->hematokrit }}</td>
                </tr>
                @endif
                @if ($data1->fration != "")
                <tr valign="top">
                    <td>Ejection Fration</td>
                    <td colspan="2"> : {{ $data1->fration }}</td>
                </tr>
                @endif
            </table>

            @if ($data1->gejalalain95 != "")
                <br>
                <br>
                <b>Tanda gejalanya :</b><br>
                {{ $data1->gejalalain95 }}
                <br>
                <br>
            @endif

            @if ($data1->keluhanberkemih != "")
                <b>Keluhan berkemih :</b><br>
                {{ $data1->keluhanberkemih }}
                <br>
                <br>
            @endif

            @if ($data1->urin != "")
                <b>Volume Urin :</b><br>
                {{ $data1->urin }}
                <br>
                <br>
            @endif

            @if ($data1->bab != "")
                <b>BAB :</b><br>
                {{ $data1->bab }}
                <br>
                <br>
            @endif

            @if ($data1->konsistensi != "")
                <b>Konsistensi :</b><br>
                {{ $data1->konsistensi }}
                <br>
                <br>
            @endif

            @if ($data1->kelbab != "")
                <b>Keluhan BAB :</b><br>
                {{ $data1->kelbab }}
                <br>
                <br>
            @endif

            @if ($data1->bablain != "")
                <b>Tanda dan gejala lainnya :</b><br>
                {{ $data1->bablain }}
                <br>
                <br>
            @endif

            @if ($data1->neurosensor != "")
                <b>Neurosensor :</b><br>
                {{ $data1->neurosensor }}
                <br>
                <br>
            @endif

            @if ($data1->reproduksi != "")
                <b>Reproduksi dan seksualitas :</b><br>
                {{ $data1->reproduksi }}
                <br>
                <br>
            @endif

            @if ($data1->reproduksilain != "")
                <b>Tanda dan Gejala Lainnya :</b><br>
                {{ $data1->reproduksilain }}
                <br>
                <br>
            @endif

           
            <table width="100%" class="table">
                <tr>
                    <td>Mandi</td>
                    <td> : </td>
                    <td>{{ $data1->mandi }}</td>
                </tr>
                <tr>
                    <td>Berpakaian</td>
                    <td> : </td>
                    <td>{{ $data1->berpakaian }}</td>
                </tr>
                <tr>
                    <td>BAB/BAK</td>
                    <td> : </td>
                    <td>{{ $data1->bababak }}</td>
                </tr>
                <tr>
                    <td>Berhias</td>
                    <td> : </td>
                    <td>{{ $data1->berhias }}</td>
                </tr>
                <tr>
                    <td>Makan/Minum</td>
                    <td> : </td>
                    <td>{{ $data1->makanminum }}</td>
                </tr>
            </table>
            <br>
            @if ($data1->kebersihandiri != "")
                <b>Masalah Kebersihan Diri :</b><br>
                {{ $data1->kebersihandiri }}
                <br>
                <br>
            @endif

            @if ($data1->riwayat != "")
                <b>Riwayat dan Proteksi :</b><br>
                {{ $data1->riwayat }}
                <br>
                <br>
            @endif

            @if ($data1->apapunyapenyakit != "")
                <b>Apakah pasien memiliki lebih dari 1 penyakit ?  :</b><br>
                {{ $data1->apapunyapenyakit }}
                <br>
                <br>
            @endif

            @if ($data1->alatjalan != "")
                <b>Alat bantu jalan :</b><br>
                {{ $data1->alatjalan }}
                <br>
                <br>
            @endif

            @if ($data1->gayajalan != "")
                <b>Gaya berjalan/Cara berpindah :</b><br>
                {{ $data1->gayajalan }}
                <br>
                <br>
            @endif

            @if ($data1->berpindahlain != "")
                <b>Gejala Lainny :</b><br>
                {{ $data1->berpindahlain }}
                <br>
            @endif

            {{-- <br>
            @if ($data1->reproduksilain != "")
                <b> :</b><br>
                {{ $data1->reproduksilain }}
            @endif
            <br> --}}
            <hr>
            <h3>Kondisi kesehatan sosial</h3>
            <br>
            @if ($data1->tinggalbersama != "")
                <b>Tinggal Bersama :</b><br>
                {{ $data1->tinggalbersama }}
                <br>
                <br>
            @endif

            @if ($data1->adakahtergantung != "")
                <b>Adakah anggota keluarga yang masih tergantung pada pasien? :</b><br>
                {{ $data1->adakahtergantung }}
                <br>
                <br>
            @endif

            @if ($data1->masalahkeluarga != "")
                <b>Adakah masalah mengenai hubungan dalam keluarga? :</b><br>
                {{ $data1->masalahkeluarga }}
                <br>
                <br>
            @endif


            @if ($data1->dukunganlain != "")
                <b>Apakah pasien memiliki dukungan dari pihak lain? :</b><br>
                {{ $data1->dukunganlain }}
                <br>
                <br>
            @endif

            @if ($data1->masalahdukungan != "")
                <b>Masalah Lainnya :</b><br>
                {{ $data1->masalahdukungan }}
                <br>
                <br>
            @endif

            @if ($data1->pikiranmengganggu != "")
                <b>Apakah ada pikiran lain yang mengganggu pasien? :</b><br>
                {{ $data1->pikiranmengganggu }}
                <br>
                <br>
            @endif

            @if ($data1->harapanpasien != "")
                <b> Apa harapan pasien? :</b><br>
                {{ $data1->harapanpasien }}
                <br>
                <br>
            @endif

            @if ($data1->pendapatpasien != "")
                <b>Bagaimana pendapat pasien tentang kehidupan sosial? :</b><br>
                {{ $data1->pendapatpasien }}
                <br>
                <br>
            @endif

            @if ($data1->kopingpasien != "")
                <b>Bagaimana mekanisme koping pasien? :</b><br>
                {{ $data1->kopingpasien }}
                <br>
                <br>
            @endif

            @if ($data1->kondisiverbal != "")
                <b>Bagaimana komunikasi verbal pasien? :</b><br>
                {{ $data1->kondisiverbal }}
                <br>
                <br>
            @endif

            @if ($data1->butuhdukungan != "")
                <b>Apakah pasien membutuhkan dukungan :</b><br>
                {{ $data1->butuhdukungan }}
                <br>
                <br>
            @endif

            @if ($data1->lainnyapasien != "")
                <b>Masalah Lainnya :</b><br>
                {{ $data1->lainnyapasien }}
                <br>
            @endif

        </div>
        <br>
    </div>
    <hr>
            <div class="row">
                <div class="col-md-12">

                <h3><b>Diagnosis :</b></h3>

                @include('resume.diagnosa')
                </div>
            </div>
            <hr>
    <br>
    <br>

    <br>
</div>
@endsection


