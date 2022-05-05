{{-- ---------------------------- nyeri akut ------------------------------------ --}}
@if (
        (
            ($data1->vas != "") ||
            ($data1->wajah != "") ||
            ($data1->aktivitas != "") ||
            ($data1->posisi_tubuh != "") ||
            ($data1->visiologi1 != "") ||
            ($data1->visiologi2 != "")
        ) &&
        (
            // 8
            (str_contains($data1->tambahanlain, 'Gelisah')) ||
            (str_contains($data1->tambahanlain, 'Tampak Meringis')) ||
            (str_contains($data1->tambahanlain, 'Bersikap Protektif'))
        ) &&
        (
            // 3 meningkat
            ($data1->nadi >100)
        ) &&
        (
            (str_contains($data1->polaistirahat, 'Mengeluh sulit tidur'))
        )
    )
    <div class="row">
        <div class="col-lg-12">

            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#nyeriakut">Nyeri Akut</a>
                        </h4>
                    </div>
                    <div id="nyeriakut" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.nyeriakut')
                            @include('resume.sop.aromaterapi')
                            @include('resume.sop.pemberiankompreshangat')
                            @include('resume.sop.teknikrelaksasinafasdalam')
                            @include('resume.sop.pemberianteknikimajinasiterpimpin')
                            @include('resume.sop.terapiakupuntur')
                            @include('resume.sop.akupressure')
                            @include('resume.sop.prosedurepijatrefleksi')
                            @include('resume.sop.terapimusik')
                            @include('resume.sop.terapihealingtouch')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- nyeri kronis ------------------------------------ --}}
@if (
        (
            // 6
            ($data1->vas != "") ||
            ($data1->wajah != "") ||
            ($data1->aktivitas != "") ||
            ($data1->posisi_tubuh != "") ||
            ($data1->visiologi1 != "") ||
            ($data1->visiologi2 != "")
        ) &&
        (
            (
            // 7
                (str_contains($data1->tambahanlain, 'Pasien Merasa Depresi (Tertekan)')) ||
                (str_contains($data1->tambahanlain, 'Tidak mampu menuntaskan aktivitas'))
            )&&
            (
                // 8
                (str_contains($data1->tambahanlain, 'Gelisah')) ||
                (str_contains($data1->tambahanlain, 'Tampak Meringis')) ||
                (str_contains($data1->tambahanlain, 'Bersikap Protektif'))
            )
        )

    )
    <div class="row">
        <div class="col-lg-12">

            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#nyerikronis">Nyeri Kronis</a>
                        </h4>
                    </div>
                    <div id="nyerikronis" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.nyerikronis')
                            @include('resume.sop.aromaterapi')
                            @include('resume.sop.pemberiankompreshangat')
                            @include('resume.sop.teknikrelaksasinafasdalam')
                            @include('resume.sop.pemberianteknikimajinasiterpimpin')
                            @include('resume.sop.terapiakupuntur')
                            @include('resume.sop.akupressure')
                            @include('resume.sop.prosedurepijatrefleksi')
                            @include('resume.sop.terapimusik')
                            @include('resume.sop.terapihealingtouch')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- nausea ------------------------------------ --}}
@if (
        (
            // 29
            (str_contains($data1->keluhan, 'Mual'))
        ) &&
        (
            // 30
            (str_contains($data1->keluhan, 'Muntah'))
        ) &&
        (
            // 31
            (str_contains($data1->keluhan, 'Tidak berniat makan'))
        )
    )
    <div class="row">
        <div class="col-lg-12">

            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#nausea">Nausea</a>
                        </h4>
                    </div>
                    <div id="nausea" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.nausea')
                            @include('resume.sop.aromaterapi')
                            @include('resume.sop.terapiakupuntur')
                            @include('resume.sop.akupressure')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endif
    {{-- ------------------------------------------------------------------------------------- --}}

    {{-- ---------------------------- defisit nutrisi ------------------------------------ --}}
@if (
        (
            // 34
            ($data1->interpretasi == "BB KURANG/KURUS")
        )
    )
    <div class="row">
        <div class="col-lg-12">

            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#defisitnutrisi">Defisit Nutrisi</a>
                        </h4>
                    </div>
                    <div id="defisitnutrisi" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.defisitnutrisi')
                            @include('resume.sop.edukasidietpasien')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endif
    {{-- ------------------------------------------------------------------------------------- --}}

    {{-- ---------------------------- risiko defisit nutrisi ------------------------------------ --}}
@if (
        (
            // 32
            (str_contains($data1->keluhan, 'Sulit Menelan'))||
            (str_contains($data1->keluhan, 'Tidak berniat makan'))
        ) &&
        (
            (str_contains($data1->tandagejala, 'Ketidakmampuan mengabsorbsi nutrien')) ||
            (str_contains($data1->tandagejala, 'Financial tidak mencukupi')) ||
            (str_contains($data1->tandagejala, 'Stress')) ||
            (str_contains($data1->tandagejala, 'Peningkatan kebutuhan metabolisme'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikodefisitnutrisi">Risiko Defisit Nutrisi</a>
                        </h4>
                    </div>
                    <div id="risikodefisitnutrisi" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikodefisitnutrisi')
                            @include('resume.sop.edukasidietpasien')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko Ketidakseimbangan Elektrolit ------------------------------------ --}}
@if (
        (
            // 54
            (str_contains($data1->tandagejala, 'Kegagalan mekanisme regasi'))||
            (str_contains($data1->tandagejala, 'Efek prosedur pembedahan'))||
            (str_contains($data1->tandagejala, 'Difusi Ginjal'))
        ) &&
        (
            // 65
            (str_contains($data1->keluhan, 'Muntah'))||
            (str_contains($data1->urin, 'Meningkat')) ||
            // 116
            ($data1->bab != "")
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikoketidakseimbanganelektrolit">Risiko Ketidakseimbangan Elektrolit</a>
                        </h4>
                    </div>
                    <div id="risikoketidakseimbanganelektrolit" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikoketidakseimbanganelektrolit')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Disfungsi Motilitas Gastrointestinal------------------------------------ --}}
@if (
        (
            // 37
            ($data1->peristaltik != "") &&
            (str_contains($data1->tambahanlain, 'Mengeluh Nyeri')) &&
            (str_contains($data1->tandagejala, 'Mengungkapkan flatus tidak ada'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#disfungsimotilitasgastrointestinal">Disfungsi Motilitas Gastrointestinal</a>
                        </h4>
                    </div>
                    <div id="disfungsimotilitasgastrointestinal" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.disfungsimotilitasgastrointestinal')
                            @include('resume.sop.edukasidietpasien')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko Disfungsi Motilitas Gastrointestinal ------------------------------------ --}}
@if (
        (
            // 52
            (str_contains($data1->tandagejala, 'Penurunan sirkulasi gastroiintestinal')) ||
            (str_contains($data1->tandagejala, 'Efek prosedur pembedahan')) ||
            (str_contains($data1->tandagejala, 'Refulks Gastroiintestinal')) ||
            (str_contains($data1->tandagejala, 'Infeksi Gastroiintestinal')) ||
            (str_contains($data1->tandagejala, 'Efek agen farmakologis')) ||
            (str_contains($data1->tandagejala, 'Kurangnya sanitasi pada persiapan makanan'))
        ) &&
        (
            // 60
            (str_contains($data1->keluhan, 'Tidak berniat makan'))||
            (str_contains($data1->keluhan, 'Sulit Menelan'))||
            (str_contains($data1->keluhan, 'Mual'))||
            (str_contains($data1->keluhan, 'Muntah'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikodisfungsimotilitasgastrointestinal">Risiko Disfungsi Motilitas Gastrointestinal</a>
                        </h4>
                    </div>
                    <div id="risikodisfungsimotilitasgastrointestinal" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikodisfungsimotilitasgastrointestinal')
                            @include('resume.sop.edukasidietpasien')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Hipovolemia------------------------------------ --}}
@if (
        (
            // 3 meningkat
            ($data1->nadi >100)
        ) &&
        (
            // 1 menurun
            ($data1->diastole <70)
        ) &&
        (
            (str_contains($data1->tandagejala, 'Nadi teraba lemah')) &&
            (str_contains($data1->tandagejala, 'Tekanan nadi menyempit')) &&
            (str_contains($data1->crt, '> 3 Detik')) &&
            (str_contains($data1->membranmukosa, 'Kering')) &&
            (str_contains($data1->urin, 'Menurun')) &&
            (str_contains($data1->hematokrit, 'Meningkat'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#hipovolemia">Hipovolemia</a>
                        </h4>
                    </div>
                    <div id="hipovolemia" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.hipovolemia')
                            @include('resume.sop.edukasidietpasien')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}


{{-- ---------------------------- Risiko Hipovolemia------------------------------------ --}}
@if (
        (
            // 3 meningkat
            ($data1->nadi >100)
        ) &&
        (
            // 1 menurun
            (($data1->sistole/$data1->diastole) <1.5) &&
            (
                ($data1->usia < 20) ||
                ($data1->usia >60)
            )
        ) &&
        (
            (str_contains($data1->tandagejala, 'Kehilangan cairan secara aktif')) &&
            (str_contains($data1->tandagejala, 'Kekurangan intake cairan')) &&
            (str_contains($data1->tandagejala, 'Kegagalan mekanisme regasi')) &&
            (str_contains($data1->tandagejala, 'Efek agen farmakologis')) &&
            (str_contains($data1->tandagejala, 'Gangguan absorbsi cairan'))
        ) &&
        (
            (str_contains($data1->tandagejala, 'Nadi teraba lemah'))&&
            (str_contains($data1->tandagejala, 'Tekanan nadi menyempit'))&&
            (str_contains($data1->membranmukosa, 'Kering'))&&
            (str_contains($data1->urin, 'Menurun'))&&
            (str_contains($data1->crt, '> 3 Detik'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikohipovolemia">Risiko Hipovolemia</a>
                        </h4>
                    </div>
                    <div id="risikohipovolemia" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikohipovolemia')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Hipervolemia ------------------------------------ --}}
@if (
        (
            (str_contains($data1->polanafas, 'Dypsnea atau Sesak nafas')) &&
            (str_contains($data1->polanafas, 'Ortopnea atau sulit bernafas saat berbaring')) &&
            (str_contains($data1->polanafas, 'Paroxymal nocturnal dyspnea(PND) atau Sesak pada malam hari')) &&

            ($data1->hepatojuglar == 'Positif') &&
            ($data1->cvp == 'Meningkat') &&
            ($data1->vtidal == 'Meningkat')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#hipervolemia">Hipervolemia</a>
                        </h4>
                    </div>
                    <div id="hipervolemia" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.hipervolemia')
                            @include('resume.sop.edukasidietpasien')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko ketidakseimbangan carian ------------------------------------ --}}
@if (
        (
            (str_contains($data1->tandagejala, 'Efek prosedur pembedahan')) ||
            (str_contains($data1->tandagejala, 'Obstruksi intestinal'))
        ) &&
        (
            ($data1->urin == 'Menurun')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikoketidakseimbangancarian">Risiko ketidakseimbangan Carian</a>
                        </h4>
                    </div>
                    <div id="risikoketidakseimbangancarian" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikoketidakseimbangancarian')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Kesiapan peningkatan keseimbangan cairan ------------------------------------ --}}
@if (
        (
            (str_contains($data1->tandagejala, 'Mengekspresikan keinginan untuk meningkatkan keseimbangan cairan,Asupan makanan dan cairan adekuat untuk kebutuhan harian')) &&
            ($data1->membranmukosa == 'Lembab') &&
            ($data1->dehidrasi == 'Tidak') &&
            ($data1->crt == '< 3 Detik') &&
            (str_contains($data1->tandagejala, 'Asupan makanan dan cairan adekuat untuk kebutuhan harian'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#kesiapanpeningkatankeseimbangancairan">Kesiapan peningkatan keseimbangan cairan</a>
                        </h4>
                    </div>
                    <div id="kesiapanpeningkatankeseimbangancairan" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.kesiapanpeningkatankeseimbangancairan')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Gangguan menelan ------------------------------------ --}}
@if (
        (
            (str_contains($data1->tandagejala, 'Batuk sebelum menelan')) &&
            (str_contains($data1->tandagejala, 'Batuk setelah makan dan minum')) &&
            (str_contains($data1->tandagejala, 'Makan tertinggal di rongga mulut')) &&
            (str_contains($data1->tandagejala, 'Tersedak')) &&
            ($data1->keluhan == 'Sulit Menelan')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#gangguanmenelan">Gangguan menelan</a>
                        </h4>
                    </div>
                    <div id="gangguanmenelan" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.gangguanmenelan')
                            @include('resume.sop.progressivemusclerelaxation')
                            @include('resume.sop.terapiseni')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Gangguan eliminasi urin ------------------------------------ --}}
@if (
        (
            ($data1->urin == 'Meningkat') &&
            (str_contains($data1->keluhanberkemih, 'Dribling(urin menetes)')) &&
            (str_contains($data1->keluhanberkemih, 'Nokturia (sering BAK malam hari)')) &&
            (str_contains($data1->keluhanberkemih, 'Mengompol')) &&
            (str_contains($data1->keluhanberkemih, 'Enuresis (hilang kontrol BAK)')) &&
            (str_contains($data1->keluhanberkemih, 'Hesitancy (kesulitan berkemih)')) &&
            (str_contains($data1->keluhanberkemih, 'Urgensi(desakan)')) &&
            (str_contains($data1->keluhanberkemih, 'Sering buang air kecil')) &&
            (str_contains($data1->keluhanberkemih, 'Distensi kandung kemih'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#gangguaneliminasiurin">Gangguan eliminasi urin</a>
                        </h4>
                    </div>
                    <div id="gangguaneliminasiurin" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.gangguaneliminasiurin')
                            @include('resume.sop.pengambilanspesimenurin')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Diare ------------------------------------ --}}
@if (
        (
            ($data1->bab == '>3x/hari')
        ) &&
        (
            ($data1->konsistensi == 'Lunak')||
            ($data1->konsistensi == 'Cair')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#diare">Diare</a>
                        </h4>
                    </div>
                    <div id="diare" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.diare')
                            @include('resume.sop.boweltraining')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Inkontinensia Urin Reflek ------------------------------------ --}}
@if (
        (
            (str_contains($data1->keluhanberkemih, 'Tidak mengalami sensasi berkemih')) &&
            (str_contains($data1->keluhanberkemih, 'Dribling(urin menetes)')) &&
            (str_contains($data1->keluhanberkemih, 'Sering buang air kecil')) &&
            (str_contains($data1->keluhanberkemih, 'Mengompol')) &&
            (str_contains($data1->keluhanberkemih, 'Nokturia (sering BAK malam hari)')) &&
            (str_contains($data1->keluhanberkemih, 'Enuresis (hilang kontrol BAK)')) &&
            (str_contains($data1->keluhanberkemih, 'Enuresis (hilang kontrol BAK)')) &&
            ($data1->urin == 'Meningkat')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#inkontinensiaurinrefleks">Inkontinensia Urin Reflek</a>
                        </h4>
                    </div>
                    <div id="inkontinensiaurinrefleks" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.inkontinensiaurinrefleks')
                            @include('resume.sop.bladdertraining')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Inkontinensia fekal ------------------------------------ --}}
@if (
        (
            ($data1->kelbab == 'Tak mampu tunda')||
            ($data1->kelbab == 'Tak Terkontrol')||
            ($data1->kelbab == 'Dikit & Sering')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#inkontinensiafekal">Inkontinensia fekal</a>
                        </h4>
                    </div>
                    <div id="inkontinensiafekal" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.inkontinensiafekal')
                            @include('resume.sop.boweltraining')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Inkontinensia urin urgensi ------------------------------------ --}}
@if (
        (
            (str_contains($data1->keluhanberkemih, 'Keinginan berkemih disertai inkontinensia'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#inkontinensiaurinurgensi">Inkontinensia urin urgensi</a>
                        </h4>
                    </div>
                    <div id="inkontinensiaurinurgensi" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.inkontinensiaurinurgensi')
                            @include('resume.sop.bladdertraining')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Inkontinensia urin fungsional ------------------------------------ --}}
@if (
        (
            (str_contains($data1->keluhanberkemih, 'Mengompol'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#inkontinensiaurinfungsional">Inkontinensia urin fungsional</a>
                        </h4>
                    </div>
                    <div id="inkontinensiaurinfungsional" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.inkontinensiaurinfungsional')
                            @include('resume.sop.bladdertraining')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}


{{-- ---------------------------- Retensi urin ------------------------------------ --}}
@if (
        (
            (str_contains($data1->keluhanberkemih, 'Sensasi penuh kandung kemih')) &&
            (str_contains($data1->keluhanberkemih, 'Disuria/anuria')) &&
            (str_contains($data1->keluhanberkemih, 'Distensi kandung kemih'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#retensiurin">Retensi urin</a>
                        </h4>
                    </div>
                    <div id="retensiurin" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.retensiurin')
                            @include('resume.sop.prosedurepijatrefleksi')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Konsitipasi ------------------------------------ --}}
@if (
        (
            ($data1->bab == '1-2x/minggu')
        ) &&
        (
            ($data1->konsistensi == 'Keras') ||
            ($data1->konsistensi == 'Normal')
        ) &&
        (
            ($data1->peristaltik == 'Hipoaktif')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#konsitipasi">Konstipasi</a>
                        </h4>
                    </div>
                    <div id="konsitipasi" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.konsitipasi')
                            @include('resume.sop.boweltraining')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko konstipasi ------------------------------------ --}}
@if (
        (
            ($data1->konsistensi == 'Keras') ||
            ($data1->bab == '1-2x/hari') ||
            ($data1->bab == '2-3x/hari') ||
            ($data1->bab == '>3x/hari') ||
            ($data1->kelbab == '>Lama/Sulit') ||
            ($data1->peristaltik != '')
        ) &&
        (
            (str_contains($data1->bablain, 'Konfusi')) ||
            (str_contains($data1->bablain, 'depresi')) ||
            (str_contains($data1->bablain, 'gangguan emosional')) ||
            (str_contains($data1->bablain, 'Ketidakcukupan asupan serat')) ||
            (str_contains($data1->bablain, 'Ketidakcukupan diet')) ||
            (str_contains($data1->bablain, 'Perubahan kebiasaan makan')) ||
            (str_contains($data1->bablain, 'perubahan lingkungan')) ||
            (str_contains($data1->bablain, 'Ketidakadekuatan toileting')) ||
            (str_contains($data1->bablain, 'ketidakteraturan kebiasaan defekasi')) ||
            (str_contains($data1->bablain, 'Aktivitas harian kurang dari yang dianjurkan')) ||
            (str_contains($data1->bablain, 'Penyalahgunaan laksatif'))||
            (str_contains($data1->tandagejala, 'Efek agen farmakologis'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikokonstipasi">Risiko konstipasi</a>
                        </h4>
                    </div>
                    <div id="risikokonstipasi" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikokonstipasi')
                            @include('resume.sop.edukasidietpasien')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}


{{-- ---------------------------- Disfungsi seksual ------------------------------------ --}}
@if (
        (
            ($data1->reproduksi == 'Mengungkapkan aktivitas seksual berubah,mengungkapkan eksitasi seksual berubah,Merasa hubungan seksual tidak memuaskan,Mengungkapkan peran dan fungsi seksual berubah,Mengeluhkan hasrat seksual menurun,Mengeluh nyeri saat berhubungan seksual (dispareunia)')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#disfungsiseksual">Disfungsi seksual</a>
                        </h4>
                    </div>
                    <div id="disfungsiseksual" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.disfungsiseksual')
                            @include('resume.sop.menejemenstres')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko Disfungsi seksual ------------------------------------ --}}
@if (
        (
            (str_contains($data1->reproduksi, 'Mengungkapkan aktivitas seksual berubah')) ||
            (str_contains($data1->reproduksi, 'mengungkapkan eksitasi seksual berubah')) ||
            (str_contains($data1->reproduksi, 'Merasa hubungan seksual tidak memuaskan')) ||
            (str_contains($data1->reproduksi, 'Mengungkapkan peran dan fungsi seksual berubah')) ||
            (str_contains($data1->reproduksi, 'Mengeluhkan hasrat seksual menurun')) ||
            (str_contains($data1->reproduksi, 'Mengeluh nyeri saat berhubungan seksual (dispareunia)')) ||
            (str_contains($data1->reproduksi, 'Mengeluh sulit melakukan aktivitas seksual'))
        )&&
        (
            (str_contains($data1->tandagejala, 'Efek agen farmakologis')) ||
            (str_contains($data1->reproduksilain, 'Gangguan urologi'))||
            (str_contains($data1->reproduksilain, 'Gangguan endokri'))||
            (str_contains($data1->reproduksilain, 'Keganasan/faktor ginekologi (mis.kehamilan,pasca persalinan)'))||
            (str_contains($data1->reproduksilain, 'Depresi/kecemasan/penganiayaan psikologis"'))||
            (str_contains($data1->reproduksilain, 'Penyalahgunaan obat/zat'))||
            (str_contains($data1->reproduksilain, 'Konflik hubungan/nilai personal dalam keluarga, budaya, agama'))||
            (str_contains($data1->reproduksilain, 'Pola seksual pasangan menyimpang'))||
            (str_contains($data1->reproduksilain, 'Kurangnya privasi'))||
            (str_contains($data1->reproduksilain, 'ketidakadekuatan edukasi'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikodisfungsiseksual">Risiko Disfungsi seksual</a>
                        </h4>
                    </div>
                    <div id="risikodisfungsiseksual" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikodisfungsiseksual')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Pola Seksual Tidak Efektif ------------------------------------ --}}
@if (
        (
            ($data1->reproduksi == 'Mengungkapkan aktivitas seksual berubah,Mengeluh sulit melakukan aktivitas seksual,Mengungkapkan perilaku seksual berubah,Orientasi seksual berubah')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#polaseksualtidakefektif">Pola Seksual Tidak Efektif</a>
                        </h4>
                    </div>
                    <div id="polaseksualtidakefektif" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.polaseksualtidakefektif')
                            @include('resume.sop.menejemenstres')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Bersihan jalan nafas tidak efektif ------------------------------------ --}}
@if (
        (
            ($data1->batuk == 'Tidak Efektif') ||
            ($data1->batuk == 'Tidak mampu batuk')
        ) &&
        (
            ($data1->sputum == 'Berlebih')
         ) &&
        (
            ($data1->suaranafas == 'Wheezing') ||
            ($data1->suaranafas == 'Ronki')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#bersihanjalannafastidakefektif">Bersihan jalan nafas tidak efektif</a>
                        </h4>
                    </div>
                    <div id="bersihanjalannafastidakefektif" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.bersihanjalannafastidakefektif')
                            @include('resume.sop.suction')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Gangguan pertukaran gas ------------------------------------ --}}
@if (
        (
            ($data1->polanafas == 'Dypsnea atau Sesak nafas') &&
            (($data1->pco2 == 'Menurun') || ($data1->pco2 == 'Meningkat')) &&
            ($data1->po2 == 'Menurun') &&
            ($data1->nadi >100)
        ) &&
        (
            ($data1->ph == 'Meningkat') ||
            ($data1->ph == 'Menurun')
        ) &&
        (
            ($data1->suaranafas == 'Tracheal') ||
            ($data1->suaranafas == 'Crakles') ||
            ($data1->suaranafas == 'Bronko Vesikuler') ||
            ($data1->suaranafas == 'Tracheal') ||
            ($data1->suaranafas == 'Bronkhial')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#gangguanpertukarangas">Gangguan pertukaran gas</a>
                        </h4>
                    </div>
                    <div id="gangguanpertukarangas" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.gangguanpertukarangas')
                            @include('resume.sop.pemasanganoksigen')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko aspirasi ------------------------------------ --}}
@if (
        (
            ($data1->kesadaran == 'Apatis') ||
            ($data1->kesadaran == 'Somnolen') ||
            ($data1->kesadaran == 'Stupor') ||
            ($data1->kesadaran == 'Koma')
        ) &&
        (
            ($data1->batuk == 'Tidak mampu batuk')
         ) &&
        (
            (str_contains($data1->keluhan, 'Sulit Menelan')) ||
            (str_contains($data1->keluhan, 'Tidak berniat makan'))
         ) &&
        (
            ($data1->aktivitas == 'Mengeluh sulit menggerakkan ekstremitas')||
            ($data1->tandagejala == 'Penurunan sirkulasi gastroiintestinal')||
            ($data1->tandagejala == 'Efek agen farmakologis')||
            ($data1->gejalalain95 == 'Peningkatan tekanan intragastrik')||
            ($data1->gejalalain95 == 'Perlambatan pengosongan lambung')||
            ($data1->gejalalain95 == 'Peningkatan residu lambung')||
            ($data1->gejalalain95 == 'Terpasang nasogastrik')||
            ($data1->gejalalain95 == 'Terpasang Trakeostomi') ||
            ($data1->gejalalain95 == 'Terpasang endotracheal tube')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikoaspirasi">Risiko aspirasi</a>
                        </h4>
                    </div>
                    <div id="risikoaspirasi" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikoaspirasi')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}


{{-- ---------------------------- Risiko perfusi perifer tidak efektif ------------------------------------ --}}
@if (
        (
            ($data1->crt == '"> 3 Detik') ||
            ($data1->tandagejala == 'Nadi teraba lemah') ||
            ($data1->akral == 'Dingin') ||
            ($data1->warnakulit == 'Pucat')
        ) &&
        (
            ($data1->gejalalain95 == 'Hiperglikemia')||
            ($data1->gejalalain95 == 'Hipertensi')||
            ($data1->gejalalain95 == 'gaya hidup kurang gerak')||
            ($data1->gejalalain95 == 'prosedur endovaskular')
         )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikoperfusiperifertidakefektif">Risiko perfusi perifer tidak efektif</a>
                        </h4>
                    </div>
                    <div id="risikoperfusiperifertidakefektif" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikoperfusiperifertidakefektif')
                            @include('resume.sop.edukasidietpasien')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}


{{-- ---------------------------- Perfusi Perifer Tidak Efektif ------------------------------------ --}}
@if (
        (
            ($data1->crt == '> 3 Detik') &&
            ($data1->tandagejala == 'Nadi teraba lemah') &&
            ($data1->akral == 'Dingin') &&
            ($data1->warnakulit == 'Pucat')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#perfusiperifertidakefektif">Risiko perfusi perifer tidak efektif</a>
                        </h4>
                    </div>
                    <div id="perfusiperifertidakefektif" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.perfusiperifertidakefektif')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Ganguan ventilasi spontan ------------------------------------ --}}
@if (
        (
            ($data1->polanafas == 'Dypsnea atau Sesak nafas') &&
            ($data1->obn != '') &&
            ($data1->vtidal == 'Menurun') &&
            ($data1->po2 == 'Menurun') &&
            ($data1->sato2 == 'Menurun') &&
            ($data1->pco2 == 'Meningkat')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#ganguanventilasispontan">Ganguan ventilasi spontan</a>
                        </h4>
                    </div>
                    <div id="ganguanventilasispontan" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.ganguanventilasispontan')
                            @include('resume.sop.pemasanganoksigen')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Pola nafas tidak efektif ------------------------------------ --}}
@if (
        (
            ($data1->rr <16) ||
            ($data1->rr >24)
        )&&
        (
            (str_contains($data1->polanafas, 'Dypsnea atau Sesak nafas')) &&
            ($data1->obn != '') &&
            (str_contains($data1->polanafas, 'Kussmaul atau peningkatan laju dan kedalaman pernafasan')) &&
            (str_contains($data1->polanafas, 'Biot atau pernafasan dalam dan dangkal disertai apnea')) 
            
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#polanafastidakefektif">Pola nafas tidak efektif</a>
                        </h4>
                    </div>
                    <div id="polanafastidakefektif" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.polanafastidakefektif')
                            @include('resume.sop.progressivemusclerelaxation')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Penurunan curah jantung ------------------------------------ --}}
@if (
        (
            ($data1->jantung == 'Irreguler')
        ) &&
        (
            ($data1->nadi >100) ||
            ($data1->nadi <60)
        )&&
        (
            ($data1->edema == 'Ya') &&
            ($data1->aktivitas == 'Mengeluh Lelah')&&
            ($data1->jvp == 'Meningkat')
        )&&
        (
            ($data1->cvp == 'Meningkat') ||
            ($data1->cvp == 'Menurun')
        )&&
        (
            ($data1->polanafas == 'Dypsnea atau Sesak nafas')
        )&&
        (
            ($data1->tandagejala == 'Nadi teraba lemah')||
            ($data1->crt == '> 3 Detik')||
            ($data1->warnakulit == 'Pucat')||
            ($data1->polanafas == 'Ortopnea atau sulit bernafas saat berbaring')||
            ($data1->batuk == 'Efektif')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikopenurunancurahjantung"> Rsiko Penurunan curah jantung</a>
                        </h4>
                    </div>
                    <div id="risikopenurunancurahjantung" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikopenurunancurahjantung')
                            @include('resume.sop.edukasidietpasien')
                            @include('resume.sop.teknikrelaksasinafasdalam')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}



{{-- ---------------------------- penurunan curah jantung ------------------------------------ --}}
@if (
        (
            ($data1->jantung == 'Irreguler')
        ) &&
        (
            ($data1->nadi >100) ||
            ($data1->nadi <60)
        )&&
        (
            ($data1->edema == 'Ya')&&
            ($data1->aktivitas == 'Mengeluh Lelah')&&
            ($data1->jvp == 'Meningkat')
        )&&
        (
            ($data1->cvp == 'Meningkat') ||
            ($data1->cvp == 'Menurun')
        )&&
        (
            (str_contains($data1->polanafas, 'Dypsnea atau Sesak nafas'))
        )&&
        (
            (($data1->sistole/$data1->diastole) <1.5) && (($data1->usia < 20) || ($data1->usia >60)) &&
            ($data1->tandagejala == 'Nadi teraba lemah')&&
            ($data1->crt == '> 3 Detik')&&
            ($data1->warnakulit == 'Pucat')&&
            (str_contains($data1->polanafas, 'Ortopnea atau sulit bernafas saat berbaring')) ||
            ($data1->batuk == 'Efektif')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#penurunancurahjantung">Penurunan curah jantung</a>
                        </h4>
                    </div>
                    <div id="penurunancurahjantung" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.penurunancurahjantung')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko pendarahan ------------------------------------ --}}
@if (
        (
            (str_contains($data1->tandagejala, 'Penurunan sirkulasi gastroiintestinal')) &&
            (str_contains($data1->tandagejala, 'Efek agen farmakologis')) &&
            (str_contains($data1->tandagejala, 'Efek prosedur pembedahan')) &&
            (str_contains($data1->berpindahlain, 'kurang terpapar informasi tentang pecegahan pendarahan')) &&
            ((str_contains($data1->berpindahlain, 'aneurisma/proses keganasan')) || ((str_contains($data1->berpindahlain, 'traumayang mengancam nyawa')))) 
            

        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikopendarahan">Risiko pendarahan</a>
                        </h4>
                    </div>
                    <div id="risikopendarahan" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikopendarahan')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Gangguan memori ------------------------------------ --}}
@if (
        (
            (str_contains($data1->neurosensor, 'Melaporkan pernah mengalami pengalaman lupa')) &&
            (str_contains($data1->neurosensor, 'Tidak mampu mempelajari keterampilan baru')) &&
            (str_contains($data1->neurosensor, 'Tidak mampu mengingat informasi faktual')) &&
            (str_contains($data1->neurosensor, 'Tidak mampu mengingat perilaku tertentu yang pernah dilakukan')) &&
            (str_contains($data1->neurosensor, 'Tidak mampu mengingat peristiwa')) &&
            (str_contains($data1->neurosensor, 'Tidak mampu melakukan kemampuan yang dipelajari sebelumnya'))

        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#gangguanmemori">Gangguan memori</a>
                        </h4>
                    </div>
                    <div id="gangguanmemori" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.gangguanmemori')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}


{{-- ---------------------------- Konfusi akut ------------------------------------ --}}
@if (
        (
            (str_contains($data1->neurosensor, 'Kurang motivasi untuk memulai/menyelesaikan perilaku berorientasi tujuan')) &&
            (str_contains($data1->neurosensor, 'Kurang motivasi untuk memulai/menyelesaikan perilaku terarah')) &&
            (str_contains($data1->neurosensor, 'Fluktuasi fungsi kognitif dan Fluktuasi tingkat kesadaran')) &&
            (str_contains($data1->neurosensor, 'Fluktuasi aktivitas psikomotorik'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#konfusiakut">Konfusi akut</a>
                        </h4>
                    </div>
                    <div id="konfusiakut" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.konfusiakut')
                            @include('resume.sop.terapihealingtouch')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}


{{-- ---------------------------- Konfusi kronis ------------------------------------ --}}
@if (
        (
            (str_contains($data1->neurosensor, 'Kurang motivasi untuk memulai/menyelesaikan perilaku berorientasi tujuan')) &&
            (str_contains($data1->neurosensor, 'Kurang motivasi untuk memulai/menyelesaikan perilaku terarah')) &&
            (str_contains($data1->neurosensor, 'Fungsi kognitif berubah progresif')) &&
            (str_contains($data1->neurosensor, 'Memori jangka pendek dan/atau panjang berubah'))&&
            (str_contains($data1->neurosensor, 'Interpretasi berubah'))&&
            (str_contains($data1->neurosensor, 'Fungsi sosial terganggu'))&&
            (str_contains($data1->neurosensor, 'Respon terhadap stimulus berubah'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#konfusikronis">Konfusi Kronis</a>
                        </h4>
                    </div>
                    <div id="konfusikronis" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.konfusikronis')
                            @include('resume.sop.terapimusik')
                            @include('resume.sop.terapiseni')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Defisit perawatan diri ------------------------------------ --}}
@if (
        (
            (str_contains($data1->kebersihandiri, 'Menolak melakukan perawatan diri')) &&
            (str_contains($data1->kebersihandiri, 'Minat melakukan perawatan diri kurang')) &&
            (str_contains($data1->kebersihandiri, 'Tidak mampu mandi/mengenakan pakaian/makan/ketoilet/berhias secara permanen'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#defisitperawatandiri">Defisit perawatan diri</a>
                        </h4>
                    </div>
                    <div id="defisitperawatandiri" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.defisitperawatandiri')
                            @include('resume.sop.terapiseni')
                            @include('resume.sop.defisitperawatandiri')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Intoleransi aktivitas ------------------------------------ --}}
@if (
        (
            ($data1->aktivitas == 'Mengeluh Lelah') &&
            ($data1->nadi >100)
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#intoleransiaktivitas">Intoleransi aktivitas</a>
                        </h4>
                    </div>
                    <div id="intoleransiaktivitas" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.intoleransiaktivitas')
                            @include('resume.sop.terapimusik')
                            @include('resume.sop.progressivemusclerelaxation')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko intoleransi aktivitas ------------------------------------ --}}
@if (
        (
            ($data1->aktivitas == 'Mengeluh Lelah') ||
            ($data1->nadi >100)
        ) &&
        (
            ($data1->gejalalain == 'Gangguan Sirkulasi') ||
            ($data1->gejalalain == 'Gangguan Pernapasan') ||
            ($data1->gejalalain == 'Ketidakbugaran Fisik') ||
            ($data1->gejalalain == 'Riwayat Intoleransi Sebelumnya') ||
            ($data1->gejalalain == 'Tidak Berpengalaman Dengan Suatu Aktivitas')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikointoleransiaktivitas">Risiko intoleransi aktivitas</a>
                        </h4>
                    </div>
                    <div id="risikointoleransiaktivitas" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikointoleransiaktivitas')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Keletihan ------------------------------------ --}}
@if (
        (
            (str_contains($data1->aktivitas, 'Mengeluh Lelah')) &&
            (str_contains($data1->aktivitas, 'Tampak Lesu')) &&
            (str_contains($data1->aktivitas, 'Merasa energi tidak pulih walaupun lelah')) &&
            (str_contains($data1->aktivitas, 'Tidak mampu mempertahankan aktivitas rutin')) &&
            (str_contains($data1->aktivitas, 'Merasa kurang tenaga'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#keletihan">Keletihan</a>
                        </h4>
                    </div>
                    <div id="keletihan" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.keletihan')
                            @include('resume.sop.rom')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Gangguan mobilitas fisik ------------------------------------ --}}
@if (
        (
            (str_contains($data1->aktivitas, 'Mengeluh sulit menggerakkan ekstremitas')) &&
            (str_contains($data1->aktivitas, 'Kekuatan otot menurun')) &&
            (str_contains($data1->aktivitas, 'Rentang gerak(rom) menurun'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#gangguanmobilitasfisik">Gangguan mobilitas fisik</a>
                        </h4>
                    </div>
                    <div id="gangguanmobilitasfisik" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.gangguanmobilitasfisik')
                            @include('resume.sop.progressivemusclerelaxation')
                            @include('resume.sop.prosedurepijatrefleksi')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Gangguan pola tidur ------------------------------------ --}}
@if (
        (
            (str_contains($data1->polaistirahat, 'Mengeluh sulit tidur')) &&
            (str_contains($data1->polaistirahat, 'Mengeluh sering terjaga')) &&
            (str_contains($data1->polaistirahat, 'Mengeluh tidak puas tidur')) &&
            (str_contains($data1->polaistirahat, 'Mengeluh pola tidur berubah')) &&
            (str_contains($data1->polaistirahat, 'Mengeluh istirahat tidak cukup'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#gangguanpolatidur">Gangguan pola tidur</a>
                        </h4>
                    </div>
                    <div id="gangguanpolatidur" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.gangguanpolatidur')
                            @include('resume.sop.terapimusik')
                            @include('resume.sop.progressivemusclerelaxation')
                            @include('resume.sop.prosedurepijatrefleksi')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Gangguan integritas kulit/jaringan ------------------------------------ --}}
@if (
        (
            (str_contains($data1->berpindahlain, 'Kerusakan jaringan dan/lapisan kulit'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#gangguanintegritaskulit">Gangguan integritas kulit/jaringan </a>
                        </h4>
                    </div>
                    <div id="gangguanintegritaskulit" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.gangguanintegritaskulit')
                            @include('resume.sop.perawatankulit')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko infeksi ------------------------------------ --}}
@if (
        (
            (str_contains($data1->berpindahlain, 'Peningkatan paparan organisme patogen lingkungan'))&&
            (str_contains($data1->berpindahlain, 'Ketidakadekuatan pertahanan tubuh primer/sekunder'))&&
            (str_contains($data1->tandagejala, 'Efek prosedur pembedahan'))&&
            (str_contains($data1->tandagejala, 'Ketidakmampuan mengabsorbsi nutrien')) 
        ) &&
        (
            ($data1->ph == 'Meningkat') ||
            ($data1->ph == 'Menurun')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikoinfeksi">Risiko infeksi </a>
                        </h4>
                    </div>
                    <div id="risikoinfeksi" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikoinfeksi')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko jatuh ------------------------------------ --}}
@if (
        (
            ($data1->alatjalan == 'bed rest/dibantu perawat') ||
            ($data1->alatjalan == 'Berpegangan pada benda disekitar') ||
            ($data1->alatjalan == 'kruk/tongkat/walker')
        )&&
        (
            ($data1->riwayat == 'Jatuh')
        )&&
        (
            ($data1->kesadaran == 'Apatis')||
            ($data1->kesadaran == 'Somnolen')||
            ($data1->kesadaran == 'Stupor')||
            ($data1->kesadaran == 'Koma')
        )&&
        (
            (str_contains($data1->tandagejala, 'Efek agen farmakologis')) ||
            (str_contains($data1->tandagejala, 'Efek prosedur pembedahan'))
        )&&
        (
            ($data1->neurosensor == 'Fungsi kognitif berubah progresif')
        )&&
        (
            ($data1->aktivitas == 'Kekuatan otot menurun')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikojatuh">Risiko jatuh </a>
                        </h4>
                    </div>
                    <div id="risikojatuh" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikojatuh')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko cedera ------------------------------------ --}}
@if (
        (
            (str_contains($data1->berpindahlain, 'Terpapar patogen/zat kimia toksik/agen nosokomial'))&&
            (str_contains($data1->berpindahlain, 'Ketidakamanan transportasi'))&&
            (str_contains($data1->berpindahlain, 'Disfungsi autoimun/biokimia'))&&
            (str_contains($data1->berpindahlain, 'Perubahan orientasi afektif'))&&
            (str_contains($data1->berpindahlain, 'Perubahan sensasi'))&&
            (str_contains($data1->berpindahlain, 'Perubahan fungsi psikomotor'))&&
            (str_contains($data1->berpindahlain, 'Perubahan fungsi kognitif'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikocedera">Risiko cedera</a>
                        </h4>
                    </div>
                    <div id="risikocedera" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikocedera')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko luka tekan ------------------------------------ --}}
@if (
        (
            (str_contains($data1->berpindahlain, 'Skor skala Braden Q ≤16 (anak) atau skor skala Braden ≤18 (dewasa)'))&&
            (str_contains($data1->berpindahlain, 'Skor ASA (American in Sensation Anethesiologist) ≥2'))&&
            (str_contains($data1->berpindahlain, 'Periode imobilisasi yang lama diatas permukaan yang keras (mis. prosedur operasi ≥2 jam)'))&&
            (str_contains($data1->berpindahlain, 'Skor RAPS (Risk Assesment Pressure Score) rendah'))&&
            (str_contains($data1->berpindahlain, 'Klasifikasi fungsional NYHA (New York Heart Association) ≥2'))&&
            (str_contains($data1->berpindahlain, 'Dehidrasi/Kulit kering/Kulit bersisik/Peningkatan suhu kulit 1- 2 °C'))&&
            (str_contains($data1->riwayat, 'Luka Tekan'))&&
            (str_contains($data1->riwayat, 'Trauma'))&&
            (str_contains($data1->riwayat, 'Stroke'))&&
            (str_contains($data1->riwayat, 'Prosedur Invasif'))&&
            (str_contains($data1->tandagejala, 'Ketidakmampuan mengabsorbsi nutrien'))&&
            (str_contains($data1->tandagejala, 'Efek agen farmakologis'))&&
            (str_contains($data1->aktivitas, 'Mengeluh sulit menggerakkan ekstremitas'))&&
            (str_contains($data1->aktivitas, 'Kekuatan otot menurun'))&&
            ($data1->neurosensor == 'Fungsi kognitif berubah progresif')&&
            (str_contains($data1->aktivitas, 'Rentang gerak(rom) menurun'))&&
            ($data1->interpretasi != '')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikolukatekan">Risiko luka tekan</a>
                        </h4>
                    </div>
                    <div id="risikolukatekan" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikolukatekan')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Ketidakmampuan koping keluarga ------------------------------------ --}}
@if (
        (
            (str_contains($data1->masalahkeluarga, 'pasien merasa diabaikan/tidak toleran'))&&
            (str_contains($data1->masalahkeluarga, 'keluargaTidak memenuhi kebutuhan anggota keluarga'))&&
            (str_contains($data1->masalahkeluarga, 'Pasien mengabaikan angota keluarga'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#ketidakmampuankopingkeluarga">Ketidakmampuan koping keluarga</a>
                        </h4>
                    </div>
                    <div id="ketidakmampuankopingkeluarga" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.ketidakmampuankopingkeluarga')
                            @include('resume.sop.terapikeluarga')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}


{{-- ---------------------------- Penurunan koping keluarga ------------------------------------ --}}
@if (
        (
            (str_contains($data1->masalahkeluarga, 'Pasien mengeluh/khawatir tentang respon orang terdekat pada masalah kesehatan'))&&
            (str_contains($data1->masalahkeluarga, 'Orang terdekat menarik diri dari klien'))&&
            (str_contains($data1->masalahkeluarga, 'Terbatasnya komunikasi orang terdekat dengan pasien'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#penurunankopingkeluarga">Penurunan koping keluarga</a>
                        </h4>
                    </div>
                    <div id="penurunankopingkeluarga" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.penurunankopingkeluarga')
                            @include('resume.sop.terapikeluarga')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Ketidakberdayaan ------------------------------------ --}}
@if (
        (
            (str_contains($data1->masalahdukungan, 'Menyatakan frustasi atau tidak mampu melaksanakan aktifitas sebelumnya'))&&
            (str_contains($data1->masalahdukungan, 'Bergantung pada orang lain'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#ketidakberdayaan">Ketidakberdayaan</a>
                        </h4>
                    </div>
                    <div id="ketidakberdayaan" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.ketidakberdayaan')
                            @include('resume.sop.terapikognitif')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- HDR kronis ------------------------------------ --}}
@if (
        (
            (str_contains($data1->masalahdukungan, 'Menilai diri negatif (misal tidak berguna, tidak tertolong)'))&&
            (str_contains($data1->masalahdukungan, 'Merasa malu/bersalah'))&&
            (str_contains($data1->masalahdukungan, 'Merasa tidak mampu melakukan apapun'))&&
            (str_contains($data1->masalahdukungan, 'Meremehkan kemampuan mengatasi masalah'))&&
            (str_contains($data1->masalahdukungan, 'Merasa tidak memiliki kelebihan'))&&
            (str_contains($data1->masalahdukungan, 'Melebih-lebihkan penilaian negatif tentang diri sendiri'))&&
            (str_contains($data1->masalahdukungan, 'Menolak penilaian positif tentang diri sendiri'))&&
            (str_contains($data1->masalahdukungan, 'Enggan mencoba hal baru'))&&
            (str_contains($data1->masalahdukungan, 'Berjalan menunduk/Postur tubuh menunduk'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#hdrkronis">HDR kronis</a>
                        </h4>
                    </div>
                    <div id="hdrkronis" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.hdrkronis')
                            @include('resume.sop.terapimusik')
                            @include('resume.sop.terapiseni')
                            @include('resume.sop.terapikognitif')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}
{{-- ---------------------------- HDR Situasional ------------------------------------ --}}
@if (
        (
            (str_contains($data1->masalahdukungan, 'Menilai diri negatif (misal tidak berguna, tidak tertolong)'))&&
            (str_contains($data1->masalahdukungan, 'Merasa malu/bersalah'))&&
            (str_contains($data1->masalahdukungan, 'Melebih-lebihkan penilaian negatif tentang diri sendiri'))&&
            (str_contains($data1->masalahdukungan, 'Menolak penilaian positif tentang diri sendiri'))&&
            (str_contains($data1->masalahdukungan, 'Enggan mencoba hal baru'))&&
            (str_contains($data1->masalahdukungan, 'Berjalan menunduk/Postur tubuh menunduk'))&&
            (str_contains($data1->masalahdukungan, 'Berbicara pelan dan lirih'))&&
            (str_contains($data1->masalahdukungan, 'Menolak berinteraksi dengan orang lain'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#hdrsituasional">HDR Situasional</a>
                        </h4>
                    </div>
                    <div id="hdrsituasional" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.hdrsituasional')
                            @include('resume.sop.terapiseni')
                            @include('resume.sop.terapikognitif')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Keputusasaan ------------------------------------ --}}
@if (
        (
            ($data1->pikiranmengganggu == 'Mengungkapkan keputusasaan,Berperilaku pasif')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#keputusasaan">Keputusasaan</a>
                        </h4>
                    </div>
                    <div id="keputusasaan" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.keputusasaan')
                            @include('resume.sop.terapikognitif')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Gangguan proses keluarga ------------------------------------ --}}
@if (
        (
            (str_contains($data1->pikiranmengganggu, 'Keluarga tidak mampu beradaptasi terhadap situasi'))&&
            (str_contains($data1->pikiranmengganggu, 'Tidak mampu berkomunikasi secara terbuka diantara anggota keluarga'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#gangguanproseskeluarga">Gangguan proses keluarga</a>
                        </h4>
                    </div>
                    <div id="gangguanproseskeluarga" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.gangguanproseskeluarga')
                            @include('resume.sop.terapikeluarga')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Koping defensif ------------------------------------ --}}
@if (
        (
            (str_contains($data1->pikiranmengganggu, 'Menyalahkan orang lain'))&&
            (str_contains($data1->pikiranmengganggu, 'Menyangkal adanya masalah dan kelemahan diri'))&&
            (str_contains($data1->pikiranmengganggu, 'Merasionalkan kegagalan'))&&
            (str_contains($data1->pikiranmengganggu, 'Hipersensitif terhadap kritik'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#kopingdefensif">Koping defensif</a>
                        </h4>
                    </div>
                    <div id="kopingdefensif" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.kopingdefensif')
                            @include('resume.sop.terapireminiscence')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Penampilan peran tidak efektif ------------------------------------ --}}
@if (
        (
            (str_contains($data1->pikiranmengganggu, 'Merasa bingung menjalankan peran'))&&
            (str_contains($data1->pikiranmengganggu, 'Merasa harapan tidak terpenuhi'))&&
            (str_contains($data1->pikiranmengganggu, 'Merasa tidak puas dalam menjalankan peran'))&&
            (str_contains($data1->pikiranmengganggu, 'Konflik peran'))&&
            (str_contains($data1->pikiranmengganggu, 'Adaptasi tidak adekuat'))&&
            (str_contains($data1->pikiranmengganggu, 'Strategi koping tidak efektif'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#penampilanperantidakefektif">Penampilan peran tidak efektif</a>
                        </h4>
                    </div>
                    <div id="penampilanperantidakefektif" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.penampilanperantidakefektif')
                            @include('resume.sop.terapikeluarga')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Kesiapan peningkatan proses keluarga ------------------------------------ --}}
@if (
        (
            (str_contains($data1->harapanpasien, 'Mengekspresikan keinginan untuk meningkatkan dinamika keluarga'))&&
            (str_contains($data1->harapanpasien, 'Menunjukkan fungsi keluarga dalam memenuhi kebutuhan fisik, sosial dan psikologi anggota keluarga'))&&
            (str_contains($data1->harapanpasien, 'Menunjukkan aktivitas untuk mendukung keselamatan dan pertumbuhan anggota keluarga'))&&
            (str_contains($data1->harapanpasien, 'Peran keluarga fleksibel dan tepat dengan tahap perkembangan Terlihat adanya respek dengan anggota keluarga'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#kesiapanpeningkatanproseskeluarga">Kesiapan peningkatan proses keluarga</a>
                        </h4>
                    </div>
                    <div id="kesiapanpeningkatanproseskeluarga" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.kesiapanpeningkatanproseskeluarga')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Gangguan komunikasi verbal ------------------------------------ --}}
@if (
        (
            ($data1->harapanpasien != '')
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#gangguankomunikasiverbal">Gangguan komunikasi verbal</a>
                        </h4>
                    </div>
                    <div id="gangguankomunikasiverbal" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.gangguankomunikasiverbal')
                            @include('resume.sop.terapihealingtouch')
                            @include('resume.sop.terapiseni')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Gangguan interaksi sosial ------------------------------------ --}}
@if (
        (
            (str_contains($data1->pendapatpasien, 'Merasa tidak nyaman dengan situasi sosial'))&&
            (str_contains($data1->pendapatpasien, 'Merasa sulit menerima atau mengkomunikasikan perasaan'))&&
            (str_contains($data1->pendapatpasien, 'Kurang responsif atau tertarik pada orang lain'))&&
            (str_contains($data1->pendapatpasien, 'Tidak berminat melakukan kontak emosi dan fisik'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#gangguaninteraksisosial">Gangguan interaksi sosial</a>
                        </h4>
                    </div>
                    <div id="gangguaninteraksisosial" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.gangguaninteraksisosial')
                            @include('resume.sop.terapiseni')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Isolasi sosial ------------------------------------ --}}
@if (
        (
            (str_contains($data1->pendapatpasien, 'Tidak berminat melakukan kontak emosi dan fisik'))&&
            (str_contains($data1->pendapatpasien, 'Merasa ingin sendiri/ Menarik diri'))&&
            (str_contains($data1->pendapatpasien, 'Merasa tidak aman ditempat umum'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#isolasisosial">Isolasi sosial</a>
                        </h4>
                    </div>
                    <div id="isolasisosial" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.isolasisosial')
                            @include('resume.sop.terapiseni')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Koping tidak efektif ------------------------------------ --}}
@if (
        (
            (str_contains($data1->kopingpasien, 'Mengungkapkan tidak mampu mengatasi masalah'))&&
            (str_contains($data1->kopingpasien, 'Tidak memenuhi peran yang diharapkan (sesuai usia)'))&&
            (str_contains($data1->kopingpasien, 'Menggunakan mekanisme koping yang tidak sesuai'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#kopingtidakefektif">Koping tidak efektif</a>
                        </h4>
                    </div>
                    <div id="kopingtidakefektif" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.kopingtidakefektif')
                            @include('resume.sop.hipnoterapi')
                            @include('resume.sop.progressivemusclerelaxation')
                            @include('resume.sop.terapiseni')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko ketidakberdayaan ------------------------------------ --}}
@if (
        (
            (str_contains($data1->masalahdukungan, 'Menyatakan frustasi atau tidak mampu melaksanakan aktifitas sebelumnya'))||
            (str_contains($data1->masalahdukungan, 'Bergantung pada orang lain'))
        )&&
        (
            (str_contains($data1->lainnyapasien, 'Perjalanan penyakit yang berlangsung lama atau tidak dapat di prediksi'))||
            (str_contains($data1->lainnyapasien, 'Harga diri rendah yang berlangsung lama'))||
            (str_contains($data1->lainnyapasien, 'Ketidakmampuan mengatasi masalah'))||
            (str_contains($data1->lainnyapasien, 'Kurang dukungan sosial'))||
            (str_contains($data1->lainnyapasien, 'Penyakit yang melemahkan secara progresif'))||
            (str_contains($data1->lainnyapasien, 'Marginalisasi sosial /Kondisi terstigma'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikoketidakberdayaan">Risiko ketidakberdayaan</a>
                        </h4>
                    </div>
                    <div id="risikoketidakberdayaan" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikoketidakberdayaan')
                            @include('resume.sop.terapiseni')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Risiko HDR Kronis ------------------------------------ --}}
@if (
        (
            (str_contains($data1->masalahdukungan, 'Menilai diri negatif (misal tidak berguna, tidak tertolong)')) ||
            (str_contains($data1->masalahdukungan, 'Merasa malu/bersalah'))||
            (str_contains($data1->masalahdukungan, 'Merasa tidak mampu melakukan apapun'))||
            (str_contains($data1->masalahdukungan, 'Meremehkan kemampuan mengatasi masalah'))||
            (str_contains($data1->masalahdukungan, 'Merasa tidak memiliki kelebihan'))||
            (str_contains($data1->masalahdukungan, 'Melebih-lebihkan penilaian negatif tentang diri sendiri'))||
            (str_contains($data1->masalahdukungan, 'Menolak penilaian positif tentang diri sendiri'))||
            (str_contains($data1->masalahdukungan, 'Enggan mencoba hal baru'))||
            (str_contains($data1->masalahdukungan, 'Berjalan menunduk/Postur tubuh menunduk'))
        )&&
        (
            (str_contains($data1->lainnyapasien, 'Kurang mendapat kasih sayang/ penghargaan dari orang lain'))||
            (str_contains($data1->lainnyapasien, 'Kurang keterlibatan dalam kelompok/masyarakat'))||
            (str_contains($data1->lainnyapasien, 'Perasaaan kurang didukung orang lain'))||
            (str_contains($data1->lainnyapasien, 'Ketidakmampuan menunjukkan perasaan'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikohdrkronis">Risiko HDR Kronis</a>
                        </h4>
                    </div>
                    <div id="risikohdrkronis" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikohdrkronis')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}


{{-- ---------------------------- Risiko HDR Situasional ------------------------------------ --}}
@if (
        (
            (str_contains($data1->masalahdukungan, 'Menilai diri negatif (misal tidak berguna, tidak tertolong)'))||
            (str_contains($data1->masalahdukungan, 'Merasa malu/bersalah'))||
            (str_contains($data1->masalahdukungan, 'Melebih-lebihkan penilaian negatif tentang diri sendiri'))||
            (str_contains($data1->masalahdukungan, 'Menolak penilaian positif tentang diri sendiri'))||
            (str_contains($data1->masalahdukungan, 'Enggan mencoba hal baru'))||
            (str_contains($data1->masalahdukungan, 'Berjalan menunduk/Postur tubuh menunduk'))||
            (str_contains($data1->masalahdukungan, 'Berbicara pelan dan lirih '))||
            (str_contains($data1->masalahdukungan, 'Menolak berinteraksi dengan orang lain'))
        )&&
        (
            (str_contains($data1->lainnyapasien, 'Harapan tidak realistis'))||
            (str_contains($data1->lainnyapasien, 'Kurang pemahaman terhadap situasi'))||
            (str_contains($data1->lainnyapasien, 'Penurunan kontrol terhadap lingkungan'))||
            (str_contains($data1->lainnyapasien, 'Perilaku tidak sesuai dengan nilai setempat'))||
            (str_contains($data1->lainnyapasien, 'Perasaan tidak berdaya'))||
            (str_contains($data1->lainnyapasien, 'Riwayat pengabaian'))||
            (str_contains($data1->lainnyapasien, 'Riwayat Penganiayaan'))||
            (str_contains($data1->lainnyapasien, 'Riwayat penolakan'))||
            (str_contains($data1->lainnyapasien, 'Riwayat kehilangan'))||
            (str_contains($data1->lainnyapasien, 'Riwayat pengabaian'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#risikohdrsituasional">Risiko HDR Situasional</a>
                        </h4>
                    </div>
                    <div id="risikohdrsituasional" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.risikohdrsituasional')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}

{{-- ---------------------------- Berduka ------------------------------------ --}}
@if (
        (
            (str_contains($data1->lainnyapasien, 'Merasa sedih/menangis'))||
            (str_contains($data1->lainnyapasien, 'Merasa bersalah atau menyalahkan orang lain'))||
            (str_contains($data1->lainnyapasien, 'Tidak menerima kehilangan'))||
            (str_contains($data1->lainnyapasien, 'Merasa tidak ada harapan'))||
            (str_contains($data1->lainnyapasien, 'Pola tidur berubah dan tidak dapat berkonsentrasi'))
        )
    )
    <div class="row">
        <div class="col-lg-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#berduka">Berduka</a>
                        </h4>
                    </div>
                    <div id="berduka" class="panel-collapse collapse">
                        <div class="panel-body">
                            @include('resume.diagnosa.berduka')
                            @include('resume.sop.terapihealingtouch')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
{{-- ------------------------------------------------------------------------------------- --}}
