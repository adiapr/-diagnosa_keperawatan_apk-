@extends('admin.pages.main2')


@section('content')
@include('sweetalert::alert')
<div class="container-fluid">
    
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header" align="center">Profile</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p align="center">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9OIEewQ6injKiEC0aDlOt3r7Q8Wf7bEeyK_bYtE4wSjcw1QmyHY-dLNM7Vk46Dp82l_o&usqp=CAU" width="100" class="img-circle">
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p align="center">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-pagelines"></i> Klarifikasi Istilah <i class="fa fa-pagelines"></i>
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Klarifikasi Istilah</h3>
                      </div>
                      <div class="modal-body">
                        <b>1. ASA : </b>American in Sensation Anesthesiologist<br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tr>
                                    <th>ASA</th>
                                    <th style="width:100px;">Definisi</th>
                                    <th style="width:100px;">Keterangan</th>
                                </tr>
                                <tr>
                                    <td>1. </td>
                                    <td>Seorang pasien sehat <br>yang normal</td>
                                    <td>Sehat, tidak merokok, tidak ada atau penggunaan alkohol minimal</td>
                                </tr>
                                <tr>
                                    <td>2. </td>
                                    <td>Seorang pasien<br>
                                        dengan penyakit sistemik<br>
                                        ringan</td>
                                    <td>Hanya penyakit ringan tanpa keterbatasan fungsional. Contohnya termasuk perokok, social alcohol<br>
                                        drinker, kehamilan, obesitas (BMI 30 – 40 kg/m2), DM / HT yang terkendali dengan baik, penyakit<br>
                                        paru-paru ringan</td>
                                </tr>
                                <tr>
                                    <td>3. </td>
                                    <td>Seorang pasien<br>
                                        dengan penyakit<br>
                                        sistemik berat</td>
                                    <td>Mengidap satu atau lebih penyakit moderat hingga berat dengan keterbatasan fungsional. Contohnya<br>
                                        termasuk DM/HT tidak terkontrol atau, PPOK, obesitas berat (BMI ≥40), hepatitis aktif, ketergantungan<br>
                                        alkohol, menggunakan alat pacu jantung, penurunan sedang dari fraksi ejeksi, ESRD yang menjalani cuci<br>
                                        darah secara rutin, bayi prematur dengan PCA < 60 minggu, riwayat MI, CVA, TIA, atau CAD (> 3 bulan).</td>
                                </tr>
                                <tr>
                                    <td>4. </td>
                                    <td>Seorang pasien<br>
                                        dengan penyakit sistemik<br>
                                        berat yang mengancam<br>
                                        nyawa</td>
                                    <td>Riwayat baru (< 3 bulan) MI, CVA, TIA, atau CAD / stent, iskemia jantung atau disfungsi katup berat yang<br>
                                        sedang berlangsung, penurunan berat fraksi ejeksi, sepsis, DIC, AKI<br>
                                        atau ESRD yang tidak menjalani dialisi secara terjadwal.</td>
                                </tr>
                                <tr>
                                    <td>5. </td>
                                    <td>Seorang pasien sekarat yang<br>
                                        tidak dapat bertahan hidup<br>
                                        tanpa tindakan operasi</td>
                                    <td>Ruptur aneurisma thorakal/abdominal, trauma besar, perdarahan intrakranial dengan efek massa, iskemik<br>
                                        usus dengan kelainan jantung yang signifikan atau disfungsi multiorgan.</td>
                                </tr>
                                <tr>
                                    <td>6. </td>
                                    <td>Seorang pasien mati<br>
                                        batang otak yang organ<br>
                                        tubuhnya akan didonorkan</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                            <br>
                            <b>2. RAPS :</b> Risk Assessment Pressure Score alat yang dikembangkan untuk membantu profesional kesehatan, terutama perawat, menilai risiko pasien ulkus dekubitus<br>
                            Penilaian menggunakan Skala Braden<br>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th></th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                    </tr>
                                    <tr>
                                        <th>Persepsi sensorik</th>
                                        <td>Sepenuhnya Terbatas</td>
                                        <td>Terbatas</td>
                                        <td>Sangat Terbatas</td>
                                        <td>Tidak Ada Penurunan</td>
                                    </tr>
                                    <tr>
                                        <th>Kelembaban</th>
                                        <td>Selalu Lembab</td>
                                        <td>Sangat Lembab</td>
                                        <td>Kadang Lembab</td>
                                        <td>Jarang Lembab</td>
                                    </tr>
                                    <tr>
                                        <th>Aktivitas</th>
                                        <td>Tempat tidur</td>
                                        <td>Kursi</td>
                                        <td>Jalan Sesekali</td>
                                        <td>Jalan Sering</td>
                                    </tr>
                                    <tr>
                                        <th>Mobilitas</th>
                                        <td>Sepenuhnya tidak bergerak</td>
                                        <td>Sangat Terbatas</td>
                                        <td>Ringan Terbatas</td>
                                        <td>Tidak Ada Batasan</td>
                                    </tr>
                                    <tr>
                                        <th>Nutrisi</th>
                                        <td>Sangat buruk</td>
                                        <td>Mungkin Tidak Memadai</td>
                                        <td>Cukup</td>
                                        <td>Sangat cukup</td>
                                    </tr>
                                    <tr>
                                        <th>Gesekan</th>
                                        <td>Masalah</td>
                                        <td>Potensi Masalah</td>
                                        <td>Tidak Ada Masalah</td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        Menghitung Skor :
                        <ul>
                            <li>9 poin-sangat berisiko tinggi untuk tekanan ulkus pengembangan</li>
                            <li>10-12 poin-tinggi risiko untuk tekanan ulkus pengembangan</li>
                            <li>13-14 poin sedang risiko untuk tekanan ulkus pengembangan</li>
                            <li>15-18 poin rendah risiko pengembangan ulkus tekanan</li>
                        </ul>
                        <br>
                        <b>3. NYHA : </b>New York Heart Association adalah kriteria yang dibuat untuk menilai seberapa berat gangguan jantung yang diderita seseorang.<br>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tr>
                                    <th>Kelas NYH</th>
                                    <th>Gejala</th>
                                </tr>
                                <tr>
                                    <td>I</td>
                                    <td>Tidak ada batasan aktivitas fisik. <br>
                                        Aktivitas fisik biasa tidak menyebabkan kelelahan<br>
                                         yang tidak semestinya, <br>
                                        palpitasi , dispnea (sesaknapas).</td>
                                </tr>
                                <tr>
                                    <td>II</td>
                                    <td>Sedikit pembatasan aktivitas fisik. Nyaman saat istirahat.<br>
                                         Aktivitas fisik biasa menyebabkan <br>
                                         kelelahan, palpitasi, dispnea.</td>
                                </tr>
                                <tr>
                                    <td>III</td>
                                    <td>Keterbatasan aktivitas fisik yang nyata. Nyaman saat istirahat.<br>
                                        Aktivitas yang kurang dari biasanya menyebabkan kelelahan,<br>
                                        palpitasi, atau dispnea.</td>
                                </tr>
                                <tr>
                                    <td>IV</td>
                                    <td>Tidak dapat melakukan aktivitas fisik apa pun tanpa ketidaknyamanan.<br>
                                         Gejala gagal jantung saat istirahat. Jika ada aktivitas fisik<br>
                                        yang dilakukan, ketidaknyamanan meningkat.</td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <br>
                        <b>4. Penyakit Refluks Gastroesofageal</b> adalah penyakit gangguan pencernaan kronis. Terjadi apabila asam dari perut mengalir kembali (refluks) ke dalam
esofagus (saluran makanan). Refluks ini mengiritasi, dan kadang dapat merusak lapisan esofagus.
                        <br>
                        <br>

                        <b>5. Systemic inflammatory response syndrome (SIRS)</b> adalah sindroma yang ditandai dengan 2 atau lebih dari tanda-tanda sebagai berikut:
                        <ul>
                            <li>Suhu >38 oC atau < 36oC,</li>
                            <li>Denyut jantung >90x/menit, </li>
                            <li>Frekuensi nafas >20 x/menit atau PaCO2 < 32mmHg,</li>
                            <li>4. Jumlah angka leukosit >12000cell/mm3 atau presentasi neutrofil meningkat lebih dari 10% dari nilai normal (Muckard,1997)</li>
                        </ul>
                        <br>
                        <br>
                        <b>6. Obstruksi intestinal atau penyumbatan usus</b> adalah Sebuah kondisi pencernaan ketika bahan yang dicerna tidak dapat masuk secara normal melalui
                            usus. Kondisi ini dapat disebabkan oleh jaringan fibrosa yang memampatkan usus, yang dapat berkembang bertahun-tahun setelah operasi perut.
                            Kondisi ini juga dapat disebabkan oleh obat-obatan tertentu.
                        <br>
                        <br>
                        <b>7. Ejection Fraction atau Fraksi ejeksi </b>adalah pengukuran darah yang dipompa keluar dari ventrikel, normalnya 50 persen atau lebih.
                        <br>
                        <br>
                        <b>8. Fluktuasi </b>adalah kata yang menunjukkan keadaan atau kondisi yang tidak tetap atau berubah ubah. Sedangkan Konfusi adalah mengganggu orientasi
dalam hal waktu, tempat, atau orang kadang-kadang disertai oleh gangguan kesadaran
                        <br>
                        <br>
                        <b>9. Aneurisma :</b> Suatu area yang membengkak dan lemah di dalam arteri. Aneurisma sering terjadi di aorta, otak, belakang lutut, usus, atau limpa. Aneurisma jika pecah
                        dapat mengakibatkan pendarahan internal, stroke, dan terkadang bisa berakibat fatal.
                        <br>
                        <br>

                        <b>10. Refleks Hepatojugular </b>adalah peningkatan tekanan vena jugularis dengan kompresi hipokondrium kanan selama 10 hingga 30 detik, dibuktikan dengan
pembengkakan vena jugularis lebih dari 3-4 cm yang akan turun saat manuver dihentikan. Tanda Refleks Hepatojugular positif ditentukan dengan
adanya peningkatan tekanan vena jugularis (JVP) 3 cm, bertahan selama lebih dari 15 detik, dan menandakan. bahwa ventrikel kanan tidak
dapat mengakomodasi aliran balik vera yang bertambah.
                    </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                      </div>
                    </div>
                  </div>
                </div>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Data Petugas Paker
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-user"></i> Profile</a>
                        </li>
                        <li><a href="#profile" data-toggle="tab"> <i class="fa fa-cog"></i> Pengaturan</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home">
                            <h4>Profile</h4>
                            <table width="100%">
                                <tr>
                                    <td>Nama</td>
                                    <td> : {{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td> : {{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td> : ********</td>
                                </tr>
                                
                            </table>
                            <hr>
                            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-primary btn-sm"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <br><br><br>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <h4>Pengaturan</h4>
                            <div class="row">
                                <form action="/updateUser/{{ Auth::user()->id }}" method="post">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Nama lengkap</label>
                                            <input type="text" name="nama" value="{{ Auth::user()->name }}" id="" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" disabled value="{{ Auth::user()->email }}" id="" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="Password" name="password" required placeholder="Ketikkan ulang password" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-sm btn-primary" type="submit">Perbarui Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <br><br><br>
                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>
</div>
@endsection


