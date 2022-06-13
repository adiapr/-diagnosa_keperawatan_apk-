@extends('admin.pages.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Welcome</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <b>Aplikasi panduan askep kanker</b> merupakan panduan pembuatan asuhan
             keperawatan paliatif pada pasien kanker dengan fokus masalah biologis
            dan sosial. Aplikasi ini dapat menghasilkan diagnosis, luaran dan intervensi 
            keperawatan yang mengacu pada buku standar asuhan keperawatan yaitu SDKI, 
            SIKI dan SLKI. Selain itu, terdapat beberapa SOP (Standar Operasional Prosedur) 
            yang dapat digunakan sebagai bahan rekomendasi pelaksanaan intervensi keperawatan. 
            Berikut langkah penggunaan aplikasi: 
            <ol>
                <li>Klik form pengkajian > klik OK > isi data </li>
                <li>Setelah selesai mengisi pengkajian sampai akhir, klik simpan data</li>
                <li>Data dapat dilihat pada form  Resume > geser ke kanan > klik lihat</li>
                <li>Hasil resume dapat di download dalam bentuk PDF dengan klik tombol download</li>
                <li>Pada form akun dapat mengganti password dan terdapat tombol logout serta klarifikasi istilah (ASA, RAPS, NYHA, dll)</li>
            </ol>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
@endsection
