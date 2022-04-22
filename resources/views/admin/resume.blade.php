@extends('admin.pages.main2')


@section('content')
@include('sweetalert::alert')
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Resume Askep</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Nama Pasien</th>
                        <th>Usia</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Ruang Rawat</th>
                        <th>Tanggal Pengkajian</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($resume as $data)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#show{{ $data->id }}"><b>{{ $data->namapasien }}</b></a>
                                <div class="modal fade" id="show{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-body">
                                        ...
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </td>
                            <td>{{ $data->usia }} th</td>
                            <td>{{ $data->tgl_lahir }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            <td>{{ $data->ruang_rawat }}</td>
                            <td>{{ $data->tgl_pengkajian }}</td>
                            <td>
                                <form action="/hapusData/{{ $data->id }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger btn-sm" onClick="return confirm('Yakin mau dihapus ?')"><i class="fa fa-trash"></i> Hapus</button>
                                    <a href="/laporan/{{ $data->id }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Lihat</a>
                                    <a href="/exportlaporan/{{ $data->id }}" class="btn btn-success btn-sm"><i class="fa fa-file-pdf-o"></i> Download</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="col-md-6">
            Jumlah Data : {{ $jmldata }}
        </div>
        <div class="col-md-6">
            <div>
                {{ $resume->links() }}
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
@endsection


