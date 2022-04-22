@extends('admin.pages.main2')


@section('content')
@include('sweetalert::alert')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Pengkajian Paliatif</h3>
        </div>
    </div>
    <form action="/addPengkajian" method="post" name="form1">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <b>A. Identitas Pasien</b><br>
                <table border="0" width="100%">
                    <tr>
                        <td>Nama Pasien</td>
                        <td> : </td>
                        <td> <input type="text" required style="margin:1px 0px" name="nama" placeholder="Masukkan nama pasien" class="form-control input-sm"></td>
                    </tr>
                    <tr>
                        <td>Usia</td>
                        <td> : </td>
                        <td> <input type="number" required name="usia" style="margin:1px 0px" placeholder="Dalam tahun" class="form-control input-sm"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td> : </td>
                        <td> <input type="date" required name="tanggal" style="margin:1px 0px" placeholder="Dalam tahun" class="form-control input-sm"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td> : </td>
                        <td> <input type="radio" required name="jk" style="margin:10px 0px" value="Laki-Laki"> Laki - Laki <input type="radio" name="jk" style="margin:1px 0px" value="Perempuan"> Perempuan  </td>
                    </tr>
                    <tr>
                        <td>Ruang Rawat</td>
                        <td> : </td>
                        <td> <input type="text" required name="ruang" style="margin:1px 0px" placeholder="Masukkan nama ruang" class="form-control input-sm"></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row" style="margin-top: 30px">
            <div class="col-md-12">
                <b>B. Kondisi Kesehatan Fisik</b>
                <br>
                <!--------------------------------------------------->
                Tanda-tanda vital<br>
                <table width="100%" border="0">
                    <tr valign="center">
                        <td valign="top"><b>1 TD</b></td>
                        <td valign="top">&nbsp;:&nbsp;</td>
                        <td>
                            <div style="margin-top:2px" class="form-group input-group">
                                <span class="input-group-addon">Sistole</span>
                                {{-- <input type="number" name="sistole" class="form-control input-sm"> --}}
                                <select name="sistole" required  class="form-control input-sm" >
                                    <option value="">- Pilih -</option>
                                    <?php
                                        for( $i=110;$i<=190;$i++){
                                            echo"<option value='$i'>$i</option>";
                                        }
                                    ?>
                                </select>
                                <span class="input-group-addon">MMHG</span>
                            </div>
                            <div style="margin-top:-10px" class="form-group input-group">
                                <span class="input-group-addon">Diastole</span>
                                {{-- <input type="number" name="diastole" class="form-control input-sm"> --}}
                                <select name="diastole" required class="form-control input-sm" >
                                    <option value="">- Pilih -</option>
                                    <?php
                                        for( $i=60;$i<=100;$i++){
                                            echo"<option value='$i'>$i</option>";
                                        }
                                    ?>
                                </select>
                                <span class="input-group-addon">MMHG</span>
                            </div>
                        </td>
                    </tr>
                    <tr valign="center">
                        <td valign="top"><b>2 RR</b></td>
                        <td valign="top">&nbsp;:&nbsp;</td>
                        <td>
                            <div class="form-group input-group">
                                <!--{{-- <input type="number" name="rr" class="form-control input-sm"> --}}-->
                                <select name="rr" required class="form-control input-sm" >
                                    <option value="">- Pilih -</option>
                                    <?php
                                        for( $i=14;$i<=35;$i++){
                                            echo"<option value='$i'>$i</option>";
                                        }
                                    ?>
                                </select>
                                <span class="input-group-addon">X/MNT</span>
                            </div>
                        </td>
                    </tr>
                    <tr valign="center">
                        <td valign="top"><b>3 Nadi</b></td>
                        <td valign="top">&nbsp;:&nbsp;</td>
                        <td>
                            <div class="form-group input-group">
                                <!--<input type="number" name="nadi" class="form-control input-sm">-->
                                <select name="nadi" required class="form-control input-sm" >
                                    <option value="">- Pilih -</option>
                                    <?php
                                        for( $i=50;$i<=130;$i++){
                                            echo"<option value='$i'>$i</option>";
                                        }
                                    ?>
                                </select>
                                <span class="input-group-addon">X/MNT</span>
                            </div>
                        </td>
                    </tr>
                    <tr valign="center">
                        <td valign="top"><b>4 Suhu</b></td>
                        <td valign="top">&nbsp;:&nbsp;</td>
                        <td>
                            <div class="form-group input-group">
                                <select name="suhu" required class="form-control input-sm" >
                                    <option value=""></option>
                                    <option value="36.0">36.0</option>
                                    <option value="36.1">36.1</option>
                                    <option value="36.2">36.2</option>
                                    <option value="36.3">36.3</option>
                                    <option value="36.4">36.4</option>
                                    <option value="36.5">36.5</option>
                                    <option value="36.6">36.6</option>
                                    <option value="36.7">36.7</option>
                                    <option value="36.8">36.8</option>
                                    <option value="36.9">36.9</option>
                                    <option value="37.0">37.0</option>
                                    <option value="37.1">37.1</option>
                                    <option value="37.2">37.2</option>
                                    <option value="37.3">37.3</option>
                                    <option value="37.4">37.4</option>
                                    <option value="37.5">37.5</option>
                                    <option value="37.6">37.6</option>
                                    <option value="37.7">37.7</option>
                                    <option value="37.8">37.8</option>
                                    <option value="37.9">37.9</option>
                                    <option value="38.0">38.0</option>
                                    <option value="38.1">38.1</option>
                                    <option value="38.2">38.2</option>
                                    <option value="38.3">38.3</option>
                                    <option value="38.4">38.4</option>
                                    <option value="38.5">38.5</option>
                                    <option value="38.6">38.6</option>
                                    <option value="38.7">38.7</option>
                                    <option value="38.8">38.8</option>
                                    <option value="38.9">38.9</option>
                                    <option value="39.0">39.0</option>
                                    <option value="39.1">39.1</option>
                                    <option value="39.2">39.2</option>
                                    <option value="39.3">39.3</option>
                                    <option value="39.4">39.4</option>
                                    <option value="39.5">39.5</option>
                                    <option value="39.6">39.6</option>
                                    <option value="39.7">39.7</option>
                                    <option value="39.8">39.8</option>
                                    <option value="39.9">39.9</option>
                                    <option value="40.0">40.0</option>
                                    <option value="40.1">40.1</option>
                                    <option value="40.2">40.2</option>
                                    <option value="40.3">40.3</option>
                                    <option value="40.4">40.4</option>
                                    <option value="40.5">40.5</option>
                                    <option value="40.6">40.6</option>
                                    <option value="40.7">40.7</option>
                                    <option value="40.8">40.8</option>
                                    <option value="40.9">40.9</option>
                                </select>
                                <span class="input-group-addon"><sup>0</sup>C</span>
                            </div>
                        </td>
                    </tr>
                    <tr valign="center">
                        <td valign="top"><b>5 Kesadaran</b></td>
                        <td valign="top">   &nbsp;:&nbsp;</td>
                        <td>
                            <input type="radio" required name="kesadaran" value="Composmentis"> Composmentis<br>
                            <input type="radio" required name="kesadaran" value="Apatis"> Apatis<br>
                            <input type="radio" required name="kesadaran" value="Somnolen"> Somnolen<br>
                            <input type="radio" required name="kesadaran" value="Stupor"> Stupor<br>
                            <input type="radio" required name="kesadaran" value="Koma"> Koma<br>
                        </td>
                    </tr>
                </table><hr>
                <!--iki-------------------------------------------------------------------------------->
                <p align="center"><b>Kualitas Hidup Pasien PPS</b></p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>PPS<br> Level</th>
                            <th>Ambulansi</th>
                            <th>Status <br>Fungsional</th>
                            <th>Kemampuan <br>Merawat Diri</th>
                            <th><i>Intake</i></th>
                            <th>Tingkat Kesadaran</th>
                        </tr>
                        <tr>
                            <td><input type="radio" name="pps_level" value="100"> 100</td>
                            <td>Normal</td>
                            <td>Dapat melakukan aktivitas normal, <br>tidak memerlukan pelayanan khusus<br> (tidak ada gejala)</td>
                            <td>Normal</td>
                            <td>Normal</td>
                            <td>Composmentis</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="pps_level" value="90"> 90</td>
                            <td>Normal</td>
                            <td>Aktivitas normal <br>dengan<br>gejala minimal</td>
                            <td>Normal</td>
                            <td>Normal</td>
                            <td>Composmentis</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="pps_level" value="80"> 80</td>
                            <td>Normal</td>
                            <td>Aktivitas<br>
                                normal dengan<br>
                                usaha ekstra,<br>
                                ada gejala<br>
                                penyakit</td>
                            <td>Normal</td>
                            <td>Normal/<br>Pe
                                nurunan</td>
                            <td>Composmentis</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="pps_level" value="70"> 70</td>
                            <td>Sedikit<br>
                                penurunan</td>
                            <td>Tidak dapat
                                bekerja,<br> dapat
                                dirawat di
                                rumah, <br>perlu
                                bantuan untuk
                                beberapa
                                aktivitas</td>
                            <td>Normal</td>
                            <td>Normal/<br>Pe
                                nurunan</td>
                            <td>Composmentis</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="pps_level" value="60"> 60</td>
                            <td>Sedikit<br>
                                penurunan</td>
                            <td>Kadang-kadang<br>
                                perlu bantuan</td>
                            <td>Bantuan
                                sesekali<br>
                                diperlukan</td>
                            <td>Normal/<br>Pe
                                nurunan</td>
                            <td>Composmentis/<br>
                                Apatis</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="pps_level" value="50"> 50</td>
                            <td>Sering duduk<br>
                                berbaring</td>
                            <td>Perlu bantuan
                                dan<br> seringkali
                                pelayanan
                                medis</td>
                            <td>Bantuan
                                sesekali<br>
                                diperlukan</td>
                            <td>Normal/<br>Pe
                                nurunan</td>
                            <td>Composmentis/<br>
                                Apatis</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="pps_level" value="40"> 40</td>
                            <td>Sering Berbaring<br>
                                di tempat tidur</td>
                            <td>Tidak dapat
                                merawat diri <br>
                                sendiri,
                                memerlukan
                                pelayanan di <br>
                                rumah sakit,
                                perjalanan
                                penyakit <br>dapat
                                dengan cepat</td>
                            <td>Bantuan
                                sesekali<br>
                                diperlukan</td>
                            <td>Normal/<br>Pe
                                nurunan</td>
                            <td>Composmentis/+/<br>
                                Apatis/<Br>Letargi</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="pps_level" value="30"> 30</td>
                            <td>Aktivitas
                                total di
                                atas<br>
                                tempat
                                tidur</td>
                            <td>Tidak dapat
                                beraktifitas<br>
                                sama sekali,<br>
                                indikasi dirawat
                                di rumah sakit</td>
                            <td>Total Care</td>
                            <td>Normal/<br>Pe
                                nurunan</td>
                            <td>Composmentis/+/-<br>
                                Apatis/<Br>Letargi</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="pps_level" value="20"> 20</td>
                            <td>Aktivitas
                                total di
                                atas<br>
                                tempat
                                tidur</td>
                            <td>Sangat sakit,
                                perlu dirawat<br>
                                di RS untuk
                                pengobatan<br>
                                suportif</td>
                            <td>Total Care</td>
                            <td>Minimal</td>
                            <td>Composmentis/+/-<br>
                                Apatis/<Br>Letargi</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="pps_level" value="10"> 10</td>
                            <td>Aktivitas
                                total di
                                atas<br>
                                tempat
                                tidur</td>
                            <td>Sekarat</td>
                            <td>Total Care</td>
                            <td>Sangat Minimal</td>
                            <td>+/- /
                                Apatis/<Br>Letargi</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="pps_level" value="0"> 0</td>
                            <td>Meninggal</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </table>
                </div>
                <hr>
                <!----------------------------------------------------------------------------------------------------------------------->
                <p align="center">

                    <b>ECOG</b><br>
                    <i>(Eastern Cooperative Oncology Group)</i>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>Kriteria</th>
                            <th>Skor</th>
                            <th>Deskripsi</th>
                        </tr>
                        <tr>
                            <td><input type="radio" name="ecog" value="0"> Asimtomatik</td>
                            <td>0</td>
                            <td>Sepenuhnya aktif, mampu melakukan<br>
                                semua aktivitas tanpa batasan.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="ecog" value="1"> Simptomatik tapi sepenuhnya <br>
                                rawat jalan</td>
                            <td>1</td>
                            <td>Terbatas dalam aktivitas fisik yang berat tetapi dapat<br>
                                berjalan dan dapat melakukan pekerjaan yang ringan atau<br>
                                tidak bergerak. Misalnya, pekerjaan rumah ringan, pekerjaan<br>
                                kantor.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="ecog" value="2"> Symptomatic, < 50% dalam 24 jam<br>
                                berada di tempat tidur.</td>
                            <td>2</td>
                            <td>Rawat jalan dan mampu melakukan semua perawatan diri<br>
                                tetapi tidak mampu melakukan aktivitas kerja apa pun.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="ecog" value="3"> Symptomatic, > 50% dalam 24 jam<br>
                                berada di tempat tidur, tapi masih<br>
                                belum sepenuhnya berada di tempat<br>
                                tidur.</td>
                            <td>3</td>
                            <td>Perawatan diri terbatas, sekitar >50% berada di tempat tidur<br>
                                (saat tidur tidak dihitung).</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="ecog" value="4"> Bedbound</td>
                            <td>4</td>
                            <td>Benar-benar tidak dapat melakukan perawatan diri apa pun.<br>
                                Benar-benar terbatas pada tempat tidur atau kursi.</td>
                        </tr>
                        <tr>
                            <td><input type="radio" name="ecog" value="5"> Death</td>
                            <td>5</td>
                            <td>Kematian</td>
                        </tr>
                    </table>
                </div>
                <hr>
                <div id="Composmentis">
                    <b>6 Visual Analogue Scale (VAS)</b><br>
                    <input type="radio" name="vas" value="Tidak Nyeri (0-4MM)"> Tidak Nyeri (0-4MM) <br>
                    <input type="radio" name="vas" value="Nyeri Ringan (5MM-44MM)"> Nyeri Ringan (5MM-44MM) <br>
                    <input type="radio" name="vas" value="Nyeri Sedang (45MM-74MM)"> Nyeri Sedang (45MM-74MM) <br>
                    <input type="radio" name="vas" value="Nyeri Berat (75MM-100MM) "> Nyeri Berat (75MM-100MM) <br><br>
                </div>
                <div id="NonComposmentis">
                    <hr>
                    <b>6 Non Verbal Paint Scale (NVAS)</b><hr>
                    Wajah<br>
                    <input type="radio" name="wajah" value="Tidak ada ekspresi atau senyum"> Tidak ada ekspresi atau senyum<br>
                    <input type="radio" name="wajah" value="sesekali meringis, mengeluarkan airmata, mengerutkan dahi"> sesekali meringis, mengeluarkan airmata, mengerutkan dahi <br>
                    <input type="radio" name="wajah" value="sering meringis, mengeluarkan airmata, mengerutkan dahi"> sering meringis, mengeluarkan airmata, mengerutkan dahi <br>

                <hr>
                Aktivitas(Gerakan)<br>
                <input type="radio" name="aktivitas1" value="Berbaring tenang, posisi normal"> Berbaring tenang, posisi normal <br>
                <input type="radio" name="aktivitas1" value="Mencari perhatian dengan gerakan hati-hati"> Mencari perhatian dengan gerakan hati-hati <br>
                <input type="radio" name="aktivitas1" value="Gerakan gelisah atau gerakan melawan"> Gerakan gelisah atau gerakan melawan <br>
                <hr>
                Posisi Tubuh<br>
                <input type="radio" name="Posisi" value="Berbaring tenang, tidak ada posisi tangan diatas tubuh"> Berbaring tenang, tidak ada posisi tangan diatas tubuh <br>
                <input type="radio" name="Posisi" value="Gerakan mengeliat, ketegangan pada tubuh"> Gerakan mengeliat, ketegangan pada tubuh <br>
                <input type="radio" name="Posisi" value="kekakuan tubuh"> kekakuan tubuh <br>
                <hr>
                Fisiologi I (Vital Sign)<br>
                <input type="radio" name="fisiologi1" value="Vital sign stabil tidak ada perubahan"> Vital sign stabil tidak ada perubahan <br>
                <input type="radio" name="fisiologi1" value="perubahan dari salah satu"> perubahan dari salah satu<br>
                <!--- Tekanan darah sistolik > 10<br>-->
                <!--- Denyut nadi jantung > 10 <br>-->
                <!--- Laju nafas >5 <br>-->
                <input type="radio" name="fisiologi1" value="kekakuan tubuh"> kekakuan tubuh <br>
                <hr>
                Fisiologi II<br>
                <input type="radio" name="fisiologi2" value="Kulit hangat dan kerin"> Kulit hangat dan kering <br>
                <input type="radio" name="fisiologi2" value="Dilatasi pupil, berkeringat, memerah">  Dilatasi pupil, berkeringat, memerah <br>
                <input type="radio" name="fisiologi2" value="Banyak mengeluarkan keringat, pucat">  Banyak mengeluarkan keringat, pucat <hr>
                </div>
                8. Data Tambahan Nyeri
                <table width="100%">
                    <tr>
                        <td>
                            <input type="checkbox" name="tambahan_nyeri[]" value="Pasien Merasa Depresi (Tertekan)"> Pasien Merasa Depresi (Tertekan)





                        </td>
                        <td><input type="checkbox" name="tambahan_nyeri[]" value="Tidak mampu menuntaskan aktivitas"> 7. Tidak mampu menuntaskan aktivitas</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="tambahan_nyeri[]" value="Gelisah">  Gelisah</td>
                        <td><input type="checkbox" name="tambahan_nyeri[]" value="Tampak Meringis">  Tampak Meringis</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="tambahan_nyeri[]" value="Megeluh Nyeri">  Megeluh Nyeri</td>
                        <td><input type="checkbox" name="tambahan_nyeri[]" value="Bersikap Protektif"> Bersikap Protektif</td>
                    </tr>
                </table>
                {{-- ------------------------------------------------------------------------------- --}}
                {{-- LOKASI NYERI POIN 9 --}}
                <br>
                Lokasi Nyeri
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>
                                <img src="img/anatomi.jpg" height="400" alt="">
                            </td>
                        </tr>
                    </table>
                </div>
                Lokasi nyeri : <br>
                <select name="lokasi_nyeri" class="form-control input-sm">
                    <option required value="">- Pilih -</option>
                    <?php
                        for( $i=1;$i<=48;$i++){
                            echo"<option value='$i'>$i</option>";
                        }
                    ?>
                </select> <br>
                Kualitas nyeri : <br>
                <select name="kualitasnyeri" required class="form-control input-sm">
                    <option value="">- Pilih -</option>
                    <option value="Cekat-cekot(seperti dibebat kain dengan ketat)">Cekat-cekot(seperti dibebat kain dengan ketat)</option>
                    <option value="Menyentak">Menyentak</option>
                    <option value="Menikam(seperti pisau)">Menikam(seperti pisau)</option>
                    <option value="Tajam(seperti silet,perih)">Tajam(seperti silet,perih)</option>
                    <option value="Keram">Keram</option>
                    <option value="Mengigigt">Mengigigt</option>
                    <option value="Terbakar">Terbakar</option>
                    <option value="Ngilu">Ngilu</option>
                    <option value="Berat/pegal">Berat/pegal</option>
                    <option value="Nyeri sentuh">Nyeri sentuh</option>
                    <option value="Mencabik-cabik">Mencabik-cabik</option>
                    <option value="Melelahkan">Melelahkan</option>
                    <option value="Memualkan">Memualkan</option>
                    <option value="Menghukum">Menghukum</option>
                    <option value="Merambat">Merambat</option>
                    <option value="Berdenyut">Berdenyut</option>
                    <option value="Tumpul">Tumpul</option>
                    <option value="Menusuk">Menusuk</option>
                    <option value="Menekan">Menekan</option>
                    <option value="Menekan">Menekan</option>
                </select> <br>
                Frekuensi nyeri : <br>
                <select name="frekuensinyeri" required class="form-control input-sm">
                    <option value="">Pilih</option>
                    <option value="Sering/setiap waktu/ lebih dari 2x">Sering/setiap waktu/ lebih dari 2x</option>
                    <option value="1x di pagi/siang/sore/malam hari">1x di pagi/siang/sore/malam hari</option>
                    <option value="Kadang/jarang">Kadang/jarang</option>
                </select> <br>
                Durasi nyeri : <br>
                <select name="durasinyeri" required class="form-control input-sm">
                    <option value="">Pilih</option>
                    <option value="Terus menerus/persisten">Terus menerus/persisten</option>
                    <option value="Hilang timbul/intermiten">Hilang timbul/intermiten</option>
                    <option value="Konstan">Konstan</option>
                    <option value="Kombinasi">Kombinasi</option>
                </select> <br>
                Periode waktu : <br>
                <select name="periodenyeri" required class="form-control input-sm">
                    <option value="">Pilih</option>
                    <option value="< 3bulan terakhir">< 3bulan terakhir</option>
                    <option value=">3 bulan terakhir">>3 bulan terakhir</option>
                </select>

                <br>
                {{-- --------------------------------------------------------------------------------------- --}}
                <br>
                <b>Aktivitas</b><br>
                <input type="checkbox" name="aktivitas[]" value="Mengeluh Lelah"> 11. Mengeluh Lelah<br>
                <input type="checkbox" name="aktivitas[]" value="Tampak Lesu"> 12. Tampak Lesu<br>
                <input type="checkbox" name="aktivitas[]" value="Merasa energi tidak pulih walaupun lelah"> 13. Merasa energi tidak pulih walaupun lelah<br>
                <input type="checkbox" name="aktivitas[]" value="Tidak mampu mempertahankan aktivitas rutin"> 14. Tidak mampu mempertahankan aktivitas rutin<br>
                <input type="checkbox" name="aktivitas[]" value="Merasa kurang tenaga"> 15. Merasa kurang tenaga<br>
                <input type="checkbox" name="aktivitas[]" value="Mengeluh sulit menggerakkan ekstremitas"> 16. Mengeluh sulit menggerakkan ekstremitas<br>
                <input type="checkbox" name="aktivitas[]" value="Kekuatan otot menurun"> 17. Kekuatan otot menurun <br>
                <input type="checkbox" name="aktivitas[]" value="Rentang gerak(rom) menurun"> 18. Rentang gerak(rom) menurun<br>
                <br>
                <b>Tanda gejala lainnya</b><br>
                <input type="checkbox" name="gejalalain[]" value="Gangguan Sirkulasi"> 19. Gangguan Sirkulasi<br>
                <input type="checkbox" name="gejalalain[]" value="Gangguan Pernapasan"> 19. Gangguan Pernapasan<br>
                <input type="checkbox" name="gejalalain[]" value="Ketidakbugaran Fisik"> 20. Ketidakbugaran Fisik<br>
                <input type="checkbox" name="gejalalain[]" value="Riwayat Intoleransi Sebelumnya"> 21. Riwayat Intoleransi Sebelumnya<br>
                <input type="checkbox" name="gejalalain[]" value="Tidak Berpengalaman Dengan Suatu Aktivitas"> 22. Tidak Berpengalaman Dengan Suatu Aktivitas<br>
                <br>
                <b>Pola Istirahat dan Tidur</b><br>
                <input type="checkbox" name="polaistirahat[]" value="Mengeluh sulit tidur"> 23. Mengeluh sulit tidur<br>
                <input type="checkbox" name="polaistirahat[]" value="Mengeluh sering terjaga"> 24. Mengeluh sering terjaga<br>
                <input type="checkbox" name="polaistirahat[]" value="Mengeluh tidak puas tidur"> 25. Mengeluh tidak puas tidur<br>
                <input type="checkbox" name="polaistirahat[]" value="Mengeluh pola tidur berubah"> 26. Mengeluh pola tidur berubah<br>
                <input type="checkbox" name="polaistirahat[]" value="Mengeluh istirahat tidak cukup"> 27. Mengeluh istirahat tidak cukup<br>
                <input type="checkbox" name="polaistirahat[]" value="Tidak ada keluhan"> 28. Tidak ada keluhan<br>
                <br>
                <b>Nutrisi dan cairan</b><br>
                Keluhan <br>
                <input type="checkbox" name="keluhan[]" value="Mual"> 29. Mual<br>
                <input type="checkbox" name="keluhan[]" value="Muntah"> 30. Muntah<br>
                <input type="checkbox" name="keluhan[]" value="Tidak berniat makan"> 31. Tidak berniat makan<br>
                <input type="checkbox" name="keluhan[]" value="Sulit Menelan"> 32. Sulit Menelan<br>
                <input type="checkbox" name="keluhan[]" value="Tidak ada keluhan"> 33. Tidak ada keluhan<br>
                <table width="100%">
                    <tr>
                        <td>TB</td>
                        <td> : </td>
                        <td>
                            <div class="form-group input-group">
                                <input  type="number" name="tb" class="form-control input-sm" onChange="hitung()">
                                <span class="input-group-addon">cm</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>BB</td>
                        <td> : </td>
                        <td>
                            <div class="form-group input-group">
                                <input  type="number" name="bb"  class="form-control input-sm" onChange="hitung()">
                                <span class="input-group-addon">Kg</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>IMT</td>
                        <td> : </td>
                        <td>
                                <input  type="number" name="imt" readonly class="form-control input-sm">
                        </td>
                    </tr>
                </table><br>
                34,35,36. Interpretasi : <br>
                <input type="text" name="interpretasi" readonly class="form-control input-sm"><br>
                <br>
                37. Peristaltik Usus<br>
                <input type="radio" name="peristaltik" value="Tidak ada"> Tidak ada<br>
                <input type="radio" name="peristaltik" value="Hipoaktif"> Hipoaktif<br>
                <input type="radio" name="peristaltik" value="Hiperaktif"> Hiperaktif<br>
                <br>
                Membran Mukosa<br>
                <input type="radio" name="membranmukosa"  value="Tidak ada"> 38. Lembab<br>
                <input type="radio" name="membranmukosa"  value="Kering"> 39. Kering<br>
                 <br>
                Edema<br>
                <input type="radio" name="edema"  value="Ya"> 40. Ya<br>
                <input type="radio" name="edema"  value="Tidak"> 41. Tidak<br>
                <br>
                Dehidrasi<br>
                <input type="radio" name="dehidrasi"  value="Ya"> 43. Ya<br>
                <input type="radio" name="dehidrasi"  value="Tidak"> 43. Tidak<br>
                <br>


                Terapi Cairan<br>
                <table width="100%">
                    <tr>
                        <TD>
                            <div class="form-group input-group">
                                <input type="number" name="terapicairan"  class="form-control input-sm" >
                                <span class="input-group-addon">CC</span>
                            </div>
                        </TD>
                    </tr>
                </table>

                <BR>

                <b>Tanda gejalanya</b><br>
                <input type="checkbox" name="tandagejala[]" value="Nadi teraba lemah"> 46. Nadi teraba lemah<br>
                <input type="checkbox" name="tandagejala[]" value="Tekanan nadi menyempit"> 47. Tekanan nadi menyempit<br>
                <input type="checkbox" name="tandagejala[]" value="Mengekspresikan keinginan untuk meningkatkan keseimbangan cairan"> 48. Mengekspresikan keinginan untuk meningkatkan keseimbangan cairan<br>
                <input type="checkbox" name="tandagejala[]" value="Mengungkapkan flatus tidak ada"> 49. Mengungkapkan flatus tidak ada<br>
                <input type="checkbox" name="tandagejala[]" value="Asupan makanan dan cairan adekuat untuk kebutuhan harian"> 50. Asupan makanan dan cairan adekuat untuk kebutuhan harian<br>
                <input type="checkbox" name="tandagejala[]" value="Peningkatan kebutuhan metabolisme"> 51. Peningkatan kebutuhan metabolisme<br>
                <input type="checkbox" name="tandagejala[]" value="Penurunan sirkulasi gastroiintestinal"> 52. Penurunan sirkulasi gastroiintestinal<br>
                <input type="checkbox" name="tandagejala[]" value="Kehilangan cairan secara aktif"> 53. Kehilangan cairan secara aktif<br>
                <input type="checkbox" name="tandagejala[]" value="Kekurangan intake cairan"> 53. Kekurangan intake cairan<br>
                <input type="checkbox" name="tandagejala[]" value="Kegagalan mekanisme regasi"> 54. Kegagalan mekanisme regulasi<br>
                <input type="checkbox" name="tandagejala[]" value="Afreis"> 56. Afereis<br>
                <input type="checkbox" name="tandagejala[]" value="Asites"> 56. Asites<br>
                <input type="checkbox" name="tandagejala[]" value="Luka bakar"> 56. Luka bakar<br>
                <input type="checkbox" name="tandagejala[]" value="Pembedahan mayor"> 56.  Pembedahan mayor<br>
                <input type="checkbox" name="tandagejala[]" value="Obstruksi intestinal"> 66. Obstruksi intestinal<br>
                <input type="checkbox" name="tandagejala[]" value="Difusi Ginjal"> 57. Difusi Ginjal<br>
                <input type="checkbox" name="tandagejala[]" value="Disfusi Regulasi endokrin"> 57. Disfusi Regulasi endokrin<br>
                <input type="checkbox" name="tandagejala[]" value="Hipoksemia"> 58. Hipoksemia<br>
                <input type="checkbox" name="tandagejala[]" value="Hipoksia"> 58. Hipoksia<br>
                <input type="checkbox" name="tandagejala[]" value="Hipotensi"> 58.  Hipotensi<br>
                <input type="checkbox" name="tandagejala[]" value="Sepsis"> 58. Sepsis <br>
                <input type="checkbox" name="tandagejala[]" value="SIRS"> 58. SIRS<br>
                <input type="checkbox" name="tandagejala[]" value="Ketidakmampuan mencerna makanan"> 59. Ketidakmampuan mencerna makanan<br>
                <input type="checkbox" name="tandagejala[]" value="Financial tidak mencukupi"> 60. Financial tidak mencukupi<br>
                <input type="checkbox" name="tandagejala[]" value="Ketidakmampuan mengabsorbsi nutrien"> 60. FInancial tidak mencukupi<br>
                <input type="checkbox" name="tandagejala[]" value="Stress"> 61. Stress<br>
                <input type="checkbox" name="tandagejala[]" value="Batuk sebelum menelan"> 62. Batuk sebelum menelan<br>
                <input type="checkbox" name="tandagejala[]" value="Batuk setelah makan dan minum"> 62. Batuk setelah makan dan minum<br>
                <input type="checkbox" name="tandagejala[]" value="Makan tertinggal di rongga mulut"> 63. Makan tertinggal di rongga mulut<br>
                <input type="checkbox" name="tandagejala[]" value="Tersedak"> 63. Tersedak<br>
                <input type="checkbox" name="tandagejala[]" value="Efek agen farmakologis"> 64. Efek agen farmakologis<br>
                <input type="checkbox" name="tandagejala[]" value="Efek prosedur pembedahan"> 65. Efek prosedur pembedahan<br>
                <input type="checkbox" name="tandagejala[]" value="Refulks Gastroiintestinal"> 66. Refulks Gastroiintestinal<br>
                <input type="checkbox" name="tandagejala[]" value="Infeksi Gastroiintestinal"> 66. Infeksi Gastroiintestinal<br>
                <input type="checkbox" name="tandagejala[]" value="Kurangnya sanitasi pada persiapan makanan"> 67. Kurangnya sanitasi pada persiapan makanan<br>
                <input type="checkbox" name="tandagejala[]" value="Gangguan absorbsi cairan"> 68. Gangguan absorbsi cairan<br>
                <input type="checkbox" name="tandagejala[]" value="Status hipermetabolik"> 68. Status hipermetabolik<br>
                <input type="checkbox" name="tandagejala[]" value="Evaporasi"> 68. Evaporasi<br>
                <br>
                <b>Respirasi dan Sirkulasi</b> <br>
                Pola nafas : <br>
                <input type="checkbox" name="polanafas[]" value="Apnea atau tidak adanya pernafasan"> Apnea atau tidak adanya pernafasan<br>
                <input type="checkbox" name="polanafas[]" value="Eupnea atau pernafasan normal"> 69. Eupnea atau pernafasan normal<br>
                <input type="checkbox" name="polanafas[]" value="Dypsnea atau Sesak nafas"> 70. Dypsnea atau Sesak nafas<br>
                <input type="checkbox" name="polanafas[]" value="Ortopnea atau sulit bernafas saat berbaring"> 71. Ortopnea atau sulit bernafas saat berbaring<br>
                <input type="checkbox" name="polanafas[]" value="Paroxymal nocturnal dyspnea(PND) atau Sesak pada malam hari"> 72. Paroxymal nocturnal dyspnea(PND) atau Sesak pada malam hari<br>
                <input type="checkbox" name="polanafas[]" value="Hiperpnea atau peningkatan kedalaman pernafasan"> Hiperpnea atau peningkatan kedalaman pernafasan<br>
                <input type="checkbox" name="polanafas[]" value="Hiperventilasi atau peningkatan kecepatan/kedalaman/keduanya"> 95. Hiperventilasi atau peningkatan kecepatan/kedalaman/keduanya<br>
                <input type="checkbox" name="polanafas[]" value="Hipoventilasi atau penurunan kecepatan/kedalaman/keduanya"> Hipoventilasi atau penurunan kecepatan/kedalaman/keduanya<br>
                <input type="checkbox" name="polanafas[]" value="Biot atau pernafasan dalam dan dangkal disertai apnea"> 74. Biot atau pernafasan dalam dan dangkal disertai apnea<br>
                <input type="checkbox" name="polanafas[]" value="Cheyne stokes atau pernafasan dalam dan dangkal, tidak teratur"> 74. Cheyne stokes atau pernafasan dalam dan dangkal, tidak teratur<br>
                <br>
                <br>
                75. Batuk<br>
                <input type="radio" name="batuk"  value="Efektif"> Efektif <br>
                <input type="radio" name="batuk"  value="Tidak Efektif"> Tidak Efektif <br>
                <input type="radio" name="batuk"  value="Tidak mampu batuk"> Tidak mampu batuk <br>
                <input type="radio" name="batuk"  value="Tidak batuk"> Tidak batuk<br>
                <br>
                76. Sputum<br>
                <input type="radio" name="sputum"  value="Berlebih"> Berlebih <br>
                <input type="radio" name="sputum"  value="Tidak Berlebih"> Tidak Berlebih<br>
                <br>
                77. Penggunaan Otot Bantu Nafas :<br>
                <input type="radio" name="obn"  value="Ya"> Ya <br>
                <input type="radio" name="obn"  value="Tidak"> Tidak<br>
                <br>
                79. Suara Nafas :<br>
                <input type="radio" name="suaranafas"  value="Vesikuler"> Vesikuler <br>
                <input type="radio" name="suaranafas"  value="Tracheal"> Tracheal <br>
                <input type="radio" name="suaranafas"  value="Ronki"> Ronki <br>
                <input type="radio" name="suaranafas"  value="Crakles"> Crakles <br>
                <input type="radio" name="suaranafas"  value="Bronko Vesikuler"> Bronko Vesikuler <br>
                <input type="radio" name="suaranafas"  value="Bronkhial"> Bronkhial <br>
                <input type="radio" name="suaranafas"  value="Wheezing"> Wheezing<br>
                <br>
                78. Irama Jantung :<br>
                <input type="radio" name="jantung"  value="Reguler"> Reguler <br>
                <input type="radio" name="jantung"  value="Irreguler"> Irreguler<br>
                <br>
                Akral :<br>
                <input type="radio" name="akral"  value="Dingin"> Dingin <br>
                <input type="radio" name="akral"  value="Hangat"> Hangat
                <br>
                Warna Kulit :<br>
                <input type="radio" name="warnakulit"  value="Pucat"> Pucat <br>
                <input type="radio" name="warnakulit"  value="Merah"> Merah<br>
                <br>
                CRT :<br>
                <input type="radio" name="crt"  value="< 3 Detik"> 84. < 3 Detik <br>
                <input type="radio" name="crt"  value="> 3 Detik"> 85. > 3 Detik<br>
                <br>
                86. Reflek Hepatojuglar :<br>
                <input type="radio" name="hepatojuglar"  value="Positif"> Positif<br>
                <input type="radio" name="hepatojuglar"  value="Negatif"> Negatif<br>
                <br>

                <table width="100%">
                    <tr valign="top">
                        <td>87. PO2</td>
                        <td> <input type="radio" name="po2"  value="Meningkat">Meningkat <br>
                            <input type="radio" name="po2"  value="Menurun">Menurun <br>
                            <input type="radio" name="po2"  value="Normal">Normal<hr>
                        <td>
                            Nilai : <br>
                            <div class="form-group input-group">
                                <input  type="number" name="nilaipo2" class="form-control input-sm">
                                <span class="input-group-addon">mmhg</span>
                            </div>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>88. PCO2</td>
                        <td> <input type="radio" name="pco2"  value="Meningkat">Meningkat <br>
                            <input type="radio" name="pco2"  value="Menurun">Menurun <br>
                            <input type="radio" name="pco2"  value="Normal">Normal<hr>
                        <td>
                            Nilai : <br>
                            <div class="form-group input-group">
                                <input  type="number" name="nilaipco2" class="form-control input-sm">
                                <span class="input-group-addon">mmhg</span>
                            </div>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>89. pH</td>
                        <td> <input type="radio" name="ph"  value="Meningkat"> Meningkat <br>
                            <input type="radio" name="ph"  value="Menurun"> Menurun <br>
                            <input type="radio" name="ph"  value="Normal"> Normal<hr>
                        </td>
                        <td>
                            Nilai : <br>
                            <div class="form-group input-group">
                                <input  type="text" placeholder="Nilai pH" name="nilaiph" class="form-control input-sm">
                            </div>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>92. Sat O2</td>
                        <td>
                            <input type="radio" name="sato2"  value="Menurun"> Menurun <br>
                            <input type="radio" name="sato2"  value="Normal"> Normal<hr>
                        </td>
                        <td>
                            Nilai : <br>
                            <div class="form-group input-group">
                                <input  type="number" name="nilaisato2" class="form-control input-sm">
                                <span class="input-group-addon">%</span>
                            </div>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>90. JVP</td>
                        <td colspan="2">
                            <input type="radio" name="jvp"  value="Meningkat"> Meningkat <br>
                            <input type="radio" name="jvp"  value="Menurun"> Menurun <br>
                            <input type="radio" name="jvp"  value="Normal"> Normal<hr>
                        <td>                    </td>
                    </tr>
                    <tr valign="top">
                        <td>91. CVP</td>

                        <td colspan="2">
                            <input type="radio" name="cvp"  value="Meningkat"> Meningkat <br>
                            <input type="radio" name="cvp"  value="Menurun"> Menurun <br>
                            <input type="radio" name="cvp"  value="Normal"> Normal<hr>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>93. V.Tidal</td>
                        <td>
                            <input type="radio" name="vtidal"  value="Meningkat"> Meningkat <br>
                            <input type="radio" name="vtidal"  value="Menurun"> Menurun <br>
                            <input type="radio" name="vtidal"  value="Normal"> Normal<hr>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>Hematokrit</td>
                        <td>
                            <input type="radio" name="hematokrit"  value="Meningkat"> 10. Meningkat <br>
                            <input type="radio" name="hematokrit"  value="Menurun"> Menurun <br>
                            <input type="radio" name="hematokrit"  value="Normal"> Normal<hr>
                        </td>
                    </tr>
                </table>
                <br>
                94. Ejection Fration <br>
                <input type="number" name="fration" class="form-control input-sm">
                <br> <br>

                <b>Tanda dan Gejala Lainnya</b> <br>
                <input type="checkbox" name="gejalalain95[]" value="Peningkatan tekanan intragastrik"> 95. Peningkatan tekanan intragastrik <br>
                <input type="checkbox" name="gejalalain95[]" value="Perlambatan pengosongan lambung"> 96. Perlambatan pengosongan lambung <br>
                <input type="checkbox" name="gejalalain95[]" value="Peningkatan residu lambung"> 97. Peningkatan residu lambung <br>
                <input type="checkbox" name="gejalalain95[]" value="Terpasang nasogastrik"> 98. Terpasang nasogastrik<br>
                <input type="checkbox" name="gejalalain95[]" value="Terpasang Trakeostomi"> 98. Terpasang Trakeostomi<br>
                <input type="checkbox" name="gejalalain95[]" value="Terpasang endotracheal tube"> 98. Terpasang endotracheal tube<br>
                <input type="checkbox" name="gejalalain95[]" value="Perubahan afterload (oliguria,nadi perifer teraba lemah)"> 99. Perubahan afterload (oliguria,nadi perifer teraba lemah)<br>
                <input type="checkbox" name="gejalalain95[]" value="Perubahan preload (distensi vena jugularis, hepatomegali)"> 100. Perubahan preload (distensi vena jugularis, hepatomegali)<br>
                <input type="checkbox" name="gejalalain95[]" value="Perubahan irama jantung (gambaran ekg aritmia atau gangguan konduksi)"> 101. Perubahan irama jantung (gambaran ekg aritmia atau gangguan konduksi)<br>
                <input type="checkbox" name="gejalalain95[]" value="perubahan kontaktilitas (terdengar suara jantung s3 dan/atau s4)"> 102. perubahan kontaktilitas (terdengar suara jantung s3 dan/atau s4)<br>
                <input type="checkbox" name="gejalalain95[]" value="Hiperglikemia"> 103. Hiperglikemia<br>
                <input type="checkbox" name="gejalalain95[]" value="Hipertensi"> 103. Hipertensi<br>
                <input type="checkbox" name="gejalalain95[]" value="gaya hidup kurang gerak"> 103. gaya hidup kurang gerak<br>
                <input type="checkbox" name="gejalalain95[]" value="prosedur endovaskular"> 103. prosedur endovaskular<br>
                <br>
                <b>Eliminasi</b> <br>
                Keluhan berkemih <br>
                <input type="checkbox" name="keluhanberkemih[]" value="Urgensi(desakan)"> 115. Urgensi(desakan)<br>
                <input type="checkbox" name="keluhanberkemih[]" value="Dribling(urin menetes)"> 104. Dribling(urin menetes)<br>
                <input type="checkbox" name="keluhanberkemih[]" value="Nokturia (sering BAK malam hari)"> 105. Nokturia (sering BAK malam hari)<br>
                <input type="checkbox" name="keluhanberkemih[]" value="Mengompol"> 106. Mengompol<br>
                <input type="checkbox" name="keluhanberkemih[]" value="Enuresis (hilang kontrol BAK)"> 107. Enuresis (hilang kontrol BAK)<br>
                <input type="checkbox" name="keluhanberkemih[]" value="Hesitancy (kesulitan berkemih)"> 108. Hesitancy (kesulitan berkemih)<br>
                <input type="checkbox" name="keluhanberkemih[]" value="Sering buang air kecil"> 109. Sering buang air kecil<br>
                <input type="checkbox" name="keluhanberkemih[]" value="Distensi kandung kemih"> 110. Distensi kandung kemih<br>
                <input type="checkbox" name="keluhanberkemih[]" value="Tidak mengalami sensasi berkemih"> 111. Tidak mengalami sensasi berkemih<br>
                <input type="checkbox" name="keluhanberkemih[]" value="Keinginan berkemih disertai inkontinensia"> 112. Keinginan berkemih disertai inkontinensia<br>
                <input type="checkbox" name="keluhanberkemih[]" value="Disuria/anuria"> 113. Disuria/anuria<br>
                <input type="checkbox" name="keluhanberkemih[]" value="Sensasi penuh kandung kemih"> 114. Sensasi penuh kandung kemih<br>
                <br>
                115. Volume Urin<br>
                <input type="radio" name="urin"  value="Meningkat"> 44. Meningkat<br>
                <input type="radio" name="urin"  value="Menurun"> 45. Menurun<br>
                <input type="radio" name="urin"  value="Normal"> Normal<br>
                <br>
                <table width="100%">
                    <tr valign="top">
                        <td>BAB</td>
                        <td> : </td>
                        <td>
                            <input type="radio" name="bab1"  value="single"> 116. Teratur <br>
                            <div class="single select" style="display:none">
                                <input type="radio" name="bab"  value="1-2x/hari"> <font color="black">1-2x/hari</font> <br>
                                <input type="radio" name="bab"  value="2-3x/hari"> 2-3x/hari  <br>
                                <input type="radio" name="bab"  value=">3x/hari"> >3x/hari <br>
                            </div>
                        </td>
                        <td>
                            <input type="radio" name="bab1"  value="team"> 117. Tidak Teratur <br>
                            <div class="team select" style="display:none" >
                                <input type="radio" name="bab"  value="1-2x/minggu"> <font color="black">1-2x/hari</font> <br>
                                <input type="radio" name="bab"  value="2-3x/minggu"> 2-3x/hari  <br>
                                <input type="radio" name="bab"  value=">3x/minggu"> >3x/hari <br>
                              </div>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td><hr>Konsistensi</td>
                        <td> : </td>
                        <td colspan="2"><hr>
                            <input type="radio" name="konsistensi"  value="Keras"> 118. Keras <br>
                            <input type="radio" name="konsistensi"  value="Lunak"> 119. Lunak<br>
                            <input type="radio" name="konsistensi"  value="Cair"> 120. Cair <br>
                            <input type="radio" name="konsistensi"  value="Lendir/Darah"> 121. Lendir/Darah <br>
                            <input type="radio" name="konsistensi"  value="Normal"> Normal <hr>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td>Kel BAB</td>
                        <td> : </td>
                        <td colspan="2">
                            <input type="radio" name="kelbab"  value="Lama/Sulit"> 118. Lama/Sulit <br>
                            <input type="radio" name="kelbab"  value="Tak mampu tunda"> 124. Tak mampu tunda <br>
                            <input type="radio" name="kelbab"  value="Tak Terkontrol"> 123. Tak Terkontrol <br>
                            <input type="radio" name="kelbab"  value="Dikit & Sering"> 125. Dikit & Sering <br>
                            <input type="radio" name="kelbab"  value="Tidak Ada Keluhan"> 125. Tidak Ada Keluhan <br><hr>
                        </td>
                    </tr>
                </table>
                <br>
                <b>Tanda dan gejala lainnya</b> <br>
                <input type="checkbox" name="bablain[]" value="Konfusi"> 126. Konfusi <br>
                <input type="checkbox" name="bablain[]" value="depresi"> 126. depresi<br>
                <input type="checkbox" name="bablain[]" value="gangguan emosional"> 126. gangguan emosional<br>
                <input type="checkbox" name="bablain[]" value="Ketidakcukupan asupan serat"> 127. Ketidakcukupan asupan serat<br>
                <input type="checkbox" name="bablain[]" value="Ketidakcukupan diet"> 127. Ketidakcukupan diet<br>
                <input type="checkbox" name="bablain[]" value="Perubahan kebiasaan makan"> 128. Perubahan kebiasaan makan<br>
                <input type="checkbox" name="bablain[]" value="perubahan lingkungan"> 128. perubahan lingkungan<br>
                <input type="checkbox" name="bablain[]" value="Ketidakadekuatan toileting"> 129. Ketidakadekuatan toileting<br>
                <input type="checkbox" name="bablain[]" value="ketidakteraturan kebiasaan defekasi"> 129. ketidakteraturan kebiasaan defekasi<br>
                <input type="checkbox" name="bablain[]" value="Aktivitas harian kurang dari yang dianjurkan"> 130. Aktivitas harian kurang dari yang dianjurkan<br>
                <input type="checkbox" name="bablain[]" value="Penyalahgunaan laksatif"> 131. Penyalahgunaan laksatif<br>
                <br>
                <b>Neurosensor</b> <br>
                <input type="checkbox" name="neurosensor[]" value="Melaporkan pernah mengalami pengalaman lupa"> 132. Melaporkan pernah mengalami pengalaman lupa<br>
                <input type="checkbox" name="neurosensor[]" value="Tidak mampu mempelajari keterampilan baru"> 133. Tidak mampu mempelajari keterampilan baru<br>
                <input type="checkbox" name="neurosensor[]" value="Tidak mampu mengingat informasi faktual"> 134. Tidak mampu mengingat informasi faktual<br>
                <input type="checkbox" name="neurosensor[]" value="Tidak mampu mengingat perilaku tertentu yang pernah dilakukan"> 135. Tidak mampu mengingat perilaku tertentu yang pernah dilakukan<br>
                <input type="checkbox" name="neurosensor[]" value="Tidak mampu mengingat peristiwa"> 136. Tidak mampu mengingat peristiwa<br>
                <input type="checkbox" name="neurosensor[]" value="Tidak mampu melakukan kemampuan yang dipelajari sebelumnya"> 137. Tidak mampu melakukan kemampuan yang dipelajari sebelumnya<br>
                <input type="checkbox" name="neurosensor[]" value="Kurang motivasi untuk memulai/menyelesaikan perilaku berorientasi tujuan"> 138. Kurang motivasi untuk memulai/menyelesaikan perilaku berorientasi tujuan<br>
                <input type="checkbox" name="neurosensor[]" value="Kurang motivasi untuk memulai/menyelesaikan perilaku terarah"> 139. Kurang motivasi untuk memulai/menyelesaikan perilaku terarah<br>
                <input type="checkbox" name="neurosensor[]" value="Fluktuasi fungsi kognitif dan Fluktuasi tingkat kesadaran"> 140. Fluktuasi fungsi kognitif dan Fluktuasi tingkat kesadaran<br>
                <input type="checkbox" name="neurosensor[]" value="Fluktuasi aktivitas psikomotorik"> 141. Fluktuasi aktivitas psikomotorik<br>
                <input type="checkbox" name="neurosensor[]" value="Fungsi kognitif berubah progresif"> 142. Fungsi kognitif berubah progresif<br>
                <input type="checkbox" name="neurosensor[]" value="Memori jangka pendek dan/atau panjang berubah"> 143. Memori jangka pendek dan/atau panjang berubah<br>
                <input type="checkbox" name="neurosensor[]" value="Interpretasi berubah"> 144. Interpretasi berubah<br>
                <input type="checkbox" name="neurosensor[]" value="Fungsi sosial terganggu"> 145. Fungsi sosial terganggu<br>
                <input type="checkbox" name="neurosensor[]" value="Respon terhadap stimulus berubah"> 146. Respon terhadap stimulus berubah<br>
                <br>
                <b>Reproduksi dan seksualitas</b> <br>
                <input type="checkbox" name="reproduksi[]" value="Mengungkapkan aktivitas seksual berubah"> 147. Mengungkapkan aktivitas seksual berubah<br>
                <input type="checkbox" name="reproduksi[]" value="mengungkapkan eksitasi seksual berubah"> 148. mengungkapkan eksitasi seksual berubah<br>
                <input type="checkbox" name="reproduksi[]" value="Merasa hubungan seksual tidak memuaskan"> 149. Merasa hubungan seksual tidak memuaskan<br>
                <input type="checkbox" name="reproduksi[]" value="Mengungkapkan peran dan fungsi seksual berubah"> 150. Mengungkapkan peran dan fungsi seksual berubah<br>
                <input type="checkbox" name="reproduksi[]" value="Mengeluhkan hasrat seksual menurun"> 151. Mengeluhkan hasrat seksual menurun<br>
                <input type="checkbox" name="reproduksi[]" value="Mengeluh nyeri saat berhubungan seksual (dispareunia)"> 152. Mengeluh nyeri saat berhubungan seksual (dispareunia)<br>
                <input type="checkbox" name="reproduksi[]" value="Mengeluh sulit melakukan aktivitas seksual"> 153. Mengeluh sulit melakukan aktivitas seksual<br>
                <input type="checkbox" name="reproduksi[]" value="Mengungkapkan perilaku seksual berubah"> 154. Mengungkapkan perilaku seksual berubah<br>
                <input type="checkbox" name="reproduksi[]" value="Orientasi seksual berubah"> 155. Orientasi seksual berubah<br>
                <br>
                <b>Tanda dan Gejala Lainnya</b> <br>
                <input type="checkbox" name="reproduksilain[]" value="Gangguan neurologi"> 156. Gangguan neurologi<br>
                <input type="checkbox" name="reproduksilain[]" value="Gangguan urologi"> 156. Gangguan urologi<br>
                <input type="checkbox" name="reproduksilain[]" value="Gangguan endokrin"> 156. Gangguan endokrin<br>
                <input type="checkbox" name="reproduksilain[]" value="Keganasan/faktor ginekologi (mis.kehamilan,pasca persalinan)"> 157. Keganasan/faktor ginekologi (mis.kehamilan,pasca persalinan)<br>
                <input type="checkbox" name="reproduksilain[]" value="Depresi/kecemasan/penganiayaan psikologis"> 158. Depresi/kecemasan/penganiayaan psikologis<br>
                <input type="checkbox" name="reproduksilain[]" value="Penyalahgunaan obat/zat"> 159. Penyalahgunaan obat/zat<br>
                <input type="checkbox" name="reproduksilain[]" value="Konflik hubungan/nilai personal dalam keluarga, budaya, agama"> 160. Konflik hubungan/nilai personal dalam keluarga, budaya, agama<br>
                <input type="checkbox" name="reproduksilain[]" value="Pola seksual pasangan menyimpang"> 161. Pola seksual pasangan menyimpang<br>
                <input type="checkbox" name="reproduksilain[]" value="Kurangnya privasi"> 162. Kurangnya privasi<br>
                <input type="checkbox" name="reproduksilain[]" value="ketidakadekuatan edukasi"> 162. ketidakadekuatan edukasi<br>
                <br>
                <b>Kebersihan Diri</b> <br>
                <div class="table-responsive">
                    <table width="100%" class="table">
                        <tr>
                            <td>Mandi</td>
                            <td> : </td>
                            <td>163. <input type="radio" name="mandi"  value="Dibantu Seluruhnya"> Dibantu Seluruhnya </td>
                            <td><input type="radio" name="mandi"  value="Dibantu Sebagian"> Dibantu Sebagian </td>
                            <td><input type="radio" name="mandi"  value="Dibantu Mandiri"> Mandiri </td>
                        </tr>
                        <tr>
                            <td>Berpakaian</td>
                            <td> : </td>
                            <td>164. <input type="radio" name="berpakaian"  value="Dibantu Seluruhnya"> Dibantu Seluruhnya </td>
                            <td><input type="radio" name="berpakaian"  value="Dibantu Sebagian"> Dibantu Sebagian </td>
                            <td><input type="radio" name="berpakaian"  value="Dibantu Mandiri"> Mandiri </td>
                        </tr>
                        <tr>
                            <td>BAB/BAK</td>
                            <td> : </td>
                            <td>165. <input type="radio" name="bababak"  value="Dibantu Seluruhnya"> Dibantu Seluruhnya </td>
                            <td><input type="radio" name="bababak"  value="Dibantu Sebagian"> Dibantu Sebagian </td>
                            <td><input type="radio" name="bababak"  value="Dibantu Mandiri"> Mandiri </td>
                        </tr>
                        <tr>
                            <td>Berhias</td>
                            <td> : </td>
                            <td>166. <input type="radio" name="berhias"  value="Dibantu Seluruhnya"> Dibantu Seluruhnya </td>
                            <td><input type="radio" name="berhias"  value="Dibantu Sebagian"> Dibantu Sebagian </td>
                            <td><input type="radio" name="berhias"  value="Dibantu Mandiri"> Mandiri </td>
                        </tr>
                        <tr>
                            <td>Makan/Minum</td>
                            <td> : </td>
                            <td>167. <input type="radio" name="makanminum"  value="Dibantu Seluruhnya"> Dibantu Seluruhnya </td>
                            <td><input type="radio" name="makanminum"  value="Dibantu Sebagian"> Dibantu Sebagian </td>
                            <td><input type="radio" name="makanminum"  value="Dibantu Mandiri"> Mandiri </td>
                        </tr>
                    </table>
                </div>
                <br>
                <b>Masalah Kebersihan Diri</b> <br>
                <input type="checkbox" name="kebersihandiri[]" value="Menolak melakukan perawatan diri"> 168. Menolak melakukan perawatan diri<br>
                <input type="checkbox" name="kebersihandiri[]" value="Minat melakukan perawatan diri kurang"> 169. Minat melakukan perawatan diri kurang<br>
                <input type="checkbox" name="kebersihandiri[]" value="Tidak mampu mandi/mengenakan pakaian/makan/ketoilet/berhias secara permanen"> 170. Tidak mampu mandi/mengenakan pakaian/makan/ketoilet/berhias secara permanen<br>
                <input type="checkbox" name="kebersihandiri[]" value="Tidak ada masalah Kebersihan diri"> 171. Tidak ada masalah Kebersihan diri<br>
                <br>
                <b>Riwayat dan Proteksi</b> <br>
                Riwayat : <br>
                <input type="checkbox" name="riwayat[]" value="Jatuh">172. Jatuh <br>
                <input type="checkbox" name="riwayat[]" value="Luka Tekan">173. Luka Tekan <br>
                <input type="checkbox" name="riwayat[]" value="Trauma">174. Trauma <br>
                <input type="checkbox" name="riwayat[]" value="Stroke">175. Stroke <br>
                <input type="checkbox" name="riwayat[]" value="Prosedur Invasif">176. Prosedur Invasif <br>
                <br>
                177.Apakah pasien memiliki lebih dari 1 penyakit ? <br>
                <input type="radio" name="apapunyapenyakit"  value="Ya"> Ya
                <input type="radio" name="apapunyapenyakit"  value="Tidak"> Tidak
                <br>
                <br>
                178. Alat bantu jalan : <br>
                <input type="radio" name="alatjalan"  value="bed rest/dibantu perawat">  bed rest/dibantu perawat <br>
                <input type="radio" name="alatjalan"  value="Berpegangan pada benda disekitar">  Berpegangan pada benda disekitar <br>
                <input type="radio" name="alatjalan"  value="kruk/tongkat/walker"> kruk/tongkat/walker<br>
                <input type="radio" name="alatjalan"  value="tidak ada"> tidak ada<br>
                <br>
                <b>Gaya berjalan/Cara berpindah</b> <br>
                <input type="radio" name="gayajalan"  value="Normal">  179. Normal <br>
                <input type="radio" name="gayajalan"  value="Bedrest">  179. Bedrest <br>
                <input type="radio" name="gayajalan"  value="Immobile">  179. Immobile <br>
                <input type="radio" name="gayajalan"  value="tidak dapat berpindah sendiri ">  179. tidak dapat berpindah sendiri <br>
                <input type="radio" name="gayajalan"  value="Lemah/tidak bertenaga">  180. Lemah/tidak bertenaga <br>
                <input type="radio" name="gayajalan"  value="Gangguan/tidak normal(pincang/diseret)">  181. Gangguan/tidak normal(pincang/diseret) <br>
                <br>
                <b>Gejala Lainnya</b> <br>
                <input type="checkbox" name="berpindahlain[]" value="Kerusakan jaringan dan/lapisan kulit"> 182. Kerusakan jaringan dan/lapisan kulit<br>
                <input type="checkbox" name="berpindahlain[]" value="Peningkatan paparan organisme patogen lingkungan"> 183. Peningkatan paparan organisme patogen lingkungan<br>
                <input type="checkbox" name="berpindahlain[]" value="Ketidakadekuatan pertahanan tubuh primer/sekunder"> 184. Ketidakadekuatan pertahanan tubuh primer/sekunder<br>
                <input type="checkbox" name="berpindahlain[]" value="Terpapar patogen/zat kimia toksik/agen nosokomial"> 185. Terpapar patogen/zat kimia toksik/agen nosokomial<br>
                <input type="checkbox" name="berpindahlain[]" value="Ketidakamanan transportasi"> 186. Ketidakamanan transportasi<br>
                <input type="checkbox" name="berpindahlain[]" value="Disfungsi autoimun/biokimia"> 187. Disfungsi autoimun/biokimia<br>
                <input type="checkbox" name="berpindahlain[]" value="Perubahan orientasi afektif"> 188. Perubahan orientasi afektif<br>
                <input type="checkbox" name="berpindahlain[]" value="Perubahan sensasi"> 188. Perubahan sensasi<br>
                <input type="checkbox" name="berpindahlain[]" value="Perubahan fungsi psikomotor"> 188. Perubahan fungsi psikomotor<br>
                <input type="checkbox" name="berpindahlain[]" value="Perubahan fungsi kognitif"> 188. Perubahan fungsi kognitif<br>
                <input type="checkbox" name="berpindahlain[]" value="Skor skala Braden Q ≤16 (anak) atau skor skala Braden ≤18 (dewasa)"> 189. Skor skala Braden Q ≤16 (anak) atau skor skala Braden ≤18 (dewasa)<br>
                <input type="checkbox" name="berpindahlain[]" value="Skor ASA (American in Sensation Anethesiologist) ≥2"> 190. Skor ASA (American in Sensation Anethesiologist) ≥2<br>
                <input type="checkbox" name="berpindahlain[]" value="Periode imobilisasi yang lama diatas permukaan yang keras (mis. prosedur operasi ≥2 jam)"> 191. Periode imobilisasi yang lama diatas permukaan yang keras (mis. prosedur operasi ≥2 jam)<br>
                <input type="checkbox" name="berpindahlain[]" value="Skor RAPS (Risk Assesment Pressure Score) rendah"> 192. Skor RAPS (Risk Assesment Pressure Score) rendah<br>
                <input type="checkbox" name="berpindahlain[]" value="Klasifikasi fungsional NYHA (New York Heart Association) ≥2"> 193. Klasifikasi fungsional NYHA (New York Heart Association) ≥2<br>
                <input type="checkbox" name="berpindahlain[]" value="Dehidrasi/Kulit kering/Kulit bersisik/Peningkatan suhu kulit 1- 2 °C"> 194. Dehidrasi/Kulit kering/Kulit bersisik/Peningkatan suhu kulit 1- 2 °C<br>
                <input type="checkbox" name="berpindahlain[]" value="kurang terpapar informasi tentang pecegahan pendarahan"> 258. kurang terpapar informasi tentang pecegahan pendarahan<br>
                <input type="checkbox" name="berpindahlain[]" value="aneurisma/proses keganasan"> 259. aneurisma/proses keganasan<br>
                <input type="checkbox" name="berpindahlain[]" value="traumayang mengancam nyawa"> 259. traumayang mengancam nyawa<br>
                <br>
                <br>
                <b>B. Kondisi Kesehatan Sosial</b>
                <br>
                Tinggal Bersama : <br>
                <input type="radio" name="tinggalbersama"  value="Suami/Istri">  Suami/Istri <br>
                <input type="radio" name="tinggalbersama"  value="Orang tua">  Orang tua <br>
                <input type="radio" name="tinggalbersama"  value="Anak">  Anak <br>
                <input type="radio" name="tinggalbersama"  value="Saudara">  Saudara <br>
                <input type="radio" name="tinggalbersama"  value="Keluarga">  Keluarga <br>
                <br>
                Adakah anggota keluarga yang masih tergantung pada pasien?<br>
                <input type="radio" name="adakahtergantung"  value="Ya">  Ya
                <input type="radio" name="adakahtergantung"  value="Tidak">  Tidak <br>
                <br>
                Adakah masalah mengenai hubungan dalam keluarga? <br>
                <input type="checkbox" name="masalahkeluarga[]" value="masalah mengenai siapa yang merawat pasien kedepan"> 195. masalah mengenai siapa yang merawat pasien kedepan<br>
                <input type="checkbox" name="masalahkeluarga[]" value="pasien merasa diabaikan/tidak toleran"> 196. pasien merasa diabaikan/tidak toleran<br>
                <input type="checkbox" name="masalahkeluarga[]" value="keluargaTidak memenuhi kebutuhan anggota keluarga"> 197. keluargaTidak memenuhi kebutuhan anggota keluarga<br>
                <input type="checkbox" name="masalahkeluarga[]" value="Pasien mengabaikan angota keluarga"> 198. Pasien mengabaikan angota keluarga<br>
                <input type="checkbox" name="masalahkeluarga[]" value="Pasien mengeluh/khawatir tentang respon orang terdekat pada masalah kesehatan"> 199. Pasien mengeluh/khawatir tentang respon orang terdekat pada masalah kesehatan<br>
                <input type="checkbox" name="masalahkeluarga[]" value="Orang terdekat menarik diri dari klien"> 200. Orang terdekat menarik diri dari klien<br>
                <input type="checkbox" name="masalahkeluarga[]" value="Terbatasnya komunikasi orang terdekat dengan pasien"> 201. Terbatasnya komunikasi orang terdekat dengan pasien<br>
                <br>
                Apakah pasien memiliki dukungan dari pihak lain? <br>
                <input type="radio" name="dukunganlain"  value="Ya">  Ya
                <input type="radio" name="dukunganlain"  value="Tidak">  Tidak <br>
                <br>
                Apakah pasien membutuhkan dukungan dari pihak lain?<br>
                <input type="radio" name="butuhdukungan"  value="Ya">  Ya
                <input type="radio" name="butuhdukungan"  value="Tidak">  Tidak <br>
                <br>
                Masalah Lainnya: <br>
                <input type="checkbox" name="masalahdukungan[]" value="Menyatakan frustasi atau tidak mampu melaksanakan aktifitas sebelumnya"> 202. Menyatakan frustasi atau tidak mampu melaksanakan aktifitas sebelumnya<br>
                <input type="checkbox" name="masalahdukungan[]" value="Bergantung pada orang lain"> 203. Bergantung pada orang lain<br>
                <input type="checkbox" name="masalahdukungan[]" value="Menilai diri negatif (misal tidak berguna, tidak tertolong)"> 204. Menilai diri negatif (misal tidak berguna, tidak tertolong)<br>
                <input type="checkbox" name="masalahdukungan[]" value="Merasa malu/bersalah"> 205. Merasa malu/bersalah<br>
                <input type="checkbox" name="masalahdukungan[]" value="Merasa tidak mampu melakukan apapun"> 206. Merasa tidak mampu melakukan apapun<br>
                <input type="checkbox" name="masalahdukungan[]" value="Meremehkan kemampuan mengatasi masalah"> 207. Meremehkan kemampuan mengatasi masalah<br>
                <input type="checkbox" name="masalahdukungan[]" value="Merasa tidak memiliki kelebihan"> 208. Merasa tidak memiliki kelebihan<br>
                <input type="checkbox" name="masalahdukungan[]" value="Melebih-lebihkan penilaian negatif tentang diri sendiri"> 209. Melebih-lebihkan penilaian negatif tentang diri sendiri<br>
                <input type="checkbox" name="masalahdukungan[]" value="Menolak penilaian positif tentang diri sendiri"> 210. Menolak penilaian positif tentang diri sendiri<br>
                <input type="checkbox" name="masalahdukungan[]" value="Enggan mencoba hal baru"> 211. Enggan mencoba hal baru<br>
                <input type="checkbox" name="masalahdukungan[]" value="Berjalan menunduk/Postur tubuh menunduk"> 211. Berjalan menunduk/Postur tubuh menunduk<br>
                <input type="checkbox" name="masalahdukungan[]" value="Berbicara pelan dan lirih "> 212. Berbicara pelan dan lirih <br>
                <input type="checkbox" name="masalahdukungan[]" value="Menolak berinteraksi dengan orang lain"> 212. Menolak berinteraksi dengan orang lain<br>
                <br>
                Apakah ada pikiran lain yang mengganggu pasien? <br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Mengungkapkan keputusasaan"> 213. Mengungkapkan keputusasaan<br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Berperilaku pasif"> 214. Berperilaku pasif<br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Keluarga tidak mampu beradaptasi terhadap situasi"> 215. Keluarga tidak mampu beradaptasi terhadap situasi<br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Tidak mampu berkomunikasi secara terbuka diantara anggota keluarga"> 216. Tidak mampu berkomunikasi secara terbuka diantara anggota keluarga<br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Menyalahkan orang lain"> 217. Menyalahkan orang lain<br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Menyangkal adanya masalah dan kelemahan diri"> 218. Menyangkal adanya masalah dan kelemahan diri<br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Merasionalkan kegagalan"> 219. Merasionalkan kegagalan<br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Hipersensitif terhadap kritik"> 220. Hipersensitif terhadap kritik<br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Merasa bingung menjalankan peran"> 221. Merasa bingung menjalankan peran<br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Merasa harapan tidak terpenuhi"> 222. Merasa harapan tidak terpenuhi<br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Merasa tidak puas dalam menjalankan peran"> 223. Merasa tidak puas dalam menjalankan peran<br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Konflik peran"> 224. Konflik peran<br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Adaptasi tidak adekuat"> 224. Adaptasi tidak adekuat<br>
                <input type="checkbox" name="pikiranmengganggu[]" value="Strategi koping tidak efektif"> 225. Strategi koping tidak efektif<br>
                <br>
                Apa harapan pasien? <br>
                <input type="checkbox" name="harapanpasien[]" value="Mengekspresikan keinginan untuk meningkatkan dinamika keluarga"> 226. Mengekspresikan keinginan untuk meningkatkan dinamika keluarga<br>
                <input type="checkbox" name="harapanpasien[]" value="Menunjukkan fungsi keluarga dalam memenuhi kebutuhan fisik, sosial dan psikologi anggota keluarga"> 227. Menunjukkan fungsi keluarga dalam memenuhi kebutuhan fisik, sosial dan psikologis
                anggota keluarga<br>
                <input type="checkbox" name="harapanpasien[]" value="Menunjukkan aktivitas untuk mendukung keselamatan dan pertumbuhan anggota keluarga"> 228. Menunjukkan aktivitas untuk mendukung keselamatan dan pertumbuhan anggota keluarga<br>
                <input type="checkbox" name="harapanpasien[]" value="Peran keluarga fleksibel dan tepat dengan tahap perkembangan Terlihat adanya respek dengan anggota keluarga"> 229. Peran keluarga fleksibel dan tepat dengan tahap perkembangan Terlihat adanya respek dengan anggota keluarga<br>
                <br>
                Bagaimana pendapat pasien tentang kehidupan sosial?<br>
                <input type="checkbox" name="pendapatpasien[]" value="Merasa tidak nyaman dengan situasi sosial"> 230. Merasa tidak nyaman dengan situasi sosial<br>
                <input type="checkbox" name="pendapatpasien[]" value="Merasa sulit menerima atau mengkomunikasikan perasaan"> 231. Merasa sulit menerima atau mengkomunikasikan perasaan<br>
                <input type="checkbox" name="pendapatpasien[]" value="Kurang responsif atau tertarik pada orang lain"> 232. Kurang responsif atau tertarik pada orang lain<br>
                <input type="checkbox" name="pendapatpasien[]" value="Tidak berminat melakukan kontak emosi dan fisik"> 233. Tidak berminat melakukan kontak emosi dan fisik<br>
                <input type="checkbox" name="pendapatpasien[]" value="Merasa ingin sendiri/ Menarik diri"> 234. Merasa ingin sendiri/ Menarik diri<br>
                <input type="checkbox" name="pendapatpasien[]" value="Merasa tidak aman ditempat umum"> 235. Merasa tidak aman ditempat umum<br>
                <br>
                Bagaimana mekanisme koping pasien?<br>
                <input type="checkbox" name="kopingpasien[]" value="Mengungkapkan tidak mampu mengatasi masalah"> 236. Mengungkapkan tidak mampu mengatasi masalah<br>
                <input type="checkbox" name="kopingpasien[]" value="Tidak memenuhi peran yang diharapkan (sesuai usia)"> 237. Tidak memenuhi peran yang diharapkan (sesuai usia)<br>
                <input type="checkbox" name="kopingpasien[]" value="Menggunakan mekanisme koping yang tidak sesuai"> 238. Menggunakan mekanisme koping yang tidak sesuai<br>
                <br>
                Bagaimana komunikasi verbal pasien?<br>
                <input type="checkbox" name="kondisiverbal[]" value="Tidak mampu berbicara atau mendengar"> 239. Tidak mampu berbicara atau mendengar<br>
                <input type="checkbox" name="kondisiverbal[]" value="Menunjukkan respon tidak sesuai"> 240. Menunjukkan respon tidak sesuai<br>
                <br>
                Masalah Lainnya <br>
                <input type="checkbox" name="lainnyapasien[]" value="Perjalanan penyakit yang berlangsung lama atau tidak dapat di prediksi"> 241. Perjalanan penyakit yang berlangsung lama atau tidak dapat di prediksi<br>
                <input type="checkbox" name="lainnyapasien[]" value="Harga diri rendah yang berlangsung lama"> 242. Harga diri rendah yang berlangsung lama<br>
                <input type="checkbox" name="lainnyapasien[]" value="Ketidakmampuan mengatasi masalah"> 243. Ketidakmampuan mengatasi masalah<br>
                <input type="checkbox" name="lainnyapasien[]" value="Kurang dukungan sosial"> 244. Kurang dukungan sosial<br>
                <input type="checkbox" name="lainnyapasien[]" value="Penyakit yang melemahkan secara progresif"> 245. Penyakit yang melemahkan secara progresif<br>
                <input type="checkbox" name="lainnyapasien[]" value="Marginalisasi sosial /Kondisi terstigma"> 246. Marginalisasi sosial /Kondisi terstigma<br>
                <input type="checkbox" name="lainnyapasien[]" value="Kurang mendapat kasih sayang/ penghargaan dari orang lain"> 247. Kurang mendapat kasih sayang/ penghargaan dari orang lain<br>
                <input type="checkbox" name="lainnyapasien[]" value="Kurang keterlibatan dalam kelompok/masyarakat"> 248. Kurang keterlibatan dalam kelompok/masyarakat<br>
                <input type="checkbox" name="lainnyapasien[]" value="Ketidakmampuan menunjukkan perasaan"> 249. Ketidakmampuan menunjukkan perasaan<br>
                <input type="checkbox" name="lainnyapasien[]" value="Perasaaan kurang didukung orang lain"> 250. Perasaaan kurang didukung orang lain<br>
                <input type="checkbox" name="lainnyapasien[]" value="Gangguan gambaran diri,fungsi,dan peran sosial"> 251. Gangguan gambaran diri,fungsi,dan peran sosial<br>
                <input type="checkbox" name="lainnyapasien[]" value="Harapan tidak realistis"> 252. Harapan tidak realistis<br>
                <input type="checkbox" name="lainnyapasien[]" value="Kurang pemahaman terhadap situasi"> 253. Kurang pemahaman terhadap situasi<br>
                <input type="checkbox" name="lainnyapasien[]" value="Penurunan kontrol terhadap lingkungan"> 254. Penurunan kontrol terhadap lingkungan<br>
                <input type="checkbox" name="lainnyapasien[]" value="Perilaku tidak sesuai dengan nilai setempat"> 255. Perilaku tidak sesuai dengan nilai setempat<br>
                <input type="checkbox" name="lainnyapasien[]" value="Perasaan tidak berdaya"> 256. Perasaan tidak berdaya<br>
                <input type="checkbox" name="lainnyapasien[]" value="Riwayat pengabaian"> 257. Riwayat pengabaian<br>
                <input type="checkbox" name="lainnyapasien[]" value="Riwayat Penganiayaan"> 257. Riwayat Penganiayaan<br>
                <input type="checkbox" name="lainnyapasien[]" value="Riwayat penolakan"> 257. Riwayat penolakan<br>
                <input type="checkbox" name="lainnyapasien[]" value="Riwayat kehilangan"> 257. Riwayat kehilangan<br>
                <input type="checkbox" name="lainnyapasien[]" value="Merasa sedih/menangis"> 260. Merasa sedih/menangis<br>
                <input type="checkbox" name="lainnyapasien[]" value="Merasa bersalah atau menyalahkan orang lain"> 261. Merasa bersalah atau menyalahkan orang lain<br>
                <input type="checkbox" name="lainnyapasien[]" value="Tidak menerima kehilangan"> 262. Tidak menerima kehilangan<br>
                <input type="checkbox" name="lainnyapasien[]" value="Merasa tidak ada harapan"> 263. Merasa tidak ada harapan<br>
                <input type="checkbox" name="lainnyapasien[]" value="Pola tidur berubah dan tidak dapat berkonsentrasi"> 264. Pola tidur berubah dan tidak dapat berkonsentrasi<br>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr>
                <button type="submit" class="btn btn-primary pull-right" type="submit">Simpan Data</button>
                <br><br><br><br><br><br><br>
            </div>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
        $('input[name="kesadaran"]').click(function () {
          var inputValue = $(this).attr("value");
          var target = $("." + inputValue);
            $(".select").not(target).hide();
            $(target).show();
          if (inputValue == "Composmentis") {
            $("#NonComposmentis").hide();
            $("#Composmentis").show();
          } else {
            $("#NonComposmentis").show();
            $("#Composmentis").hide();
          }
        });
</script>
<script type="text/javascript">
    $(document).ready(function () {
      $('input[name="bab1"]').click(function () {
        var inputValue = $(this).attr("value");
        var target = $("." + inputValue);
        $(".select").not(target).hide();
        $(target).show();
      });
    });
</script>

<script type="text/javascript">
    function hitung(){
        var isi = document.form1;
        var tb = parseInt(isi.tb.value);
        var bb = parseInt(isi.bb.value);
        var inter = isi.interpretasi.value;
        var tinggibadan = (tb/100);
        var hasilimt = (bb)/(tinggibadan*tinggibadan);

        isi.imt.value = hasilimt;

        if(hasilimt < 18){
            isi.interpretasi.value = "BB KURANG/KURUS";
        }else if (hasilimt < 25 ){
            isi.interpretasi.value = "BB NORMAL";
        }else{
            isi.interpretasi.value = "BB LEBIH/GEMMUK";
        }
    }

</script>
@endsection

