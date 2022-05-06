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
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($user as $data)
                        <tr>
                            <td>{{ ++$no }}</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#show{{ $data->id }}"><b>{{ $data->name }}</b></a>
                            </td>
                            <td>{{ $data->email }}</td>
                            <td>
                                @if ($data->verify == 0)
                                    <button class="btn btn-alert-warning btn-sm">Belum Terverifikasi</button>
                                @endif
                                @if ($data->verify == 1)
                                    <button class="btn btn-primary btn-sm">Terverifikasi</button>
                                @endif
                            </td>
                            <td>
                                <form action="/hapusUser/{{ $data->id }}" method="post">
                                    @csrf
                                    <a href="/verifikasi/{{ $data->id }}" class="btn btn-success btn-sm"><i class="fa fa-check-circle"></i> Verifikasi</a>
                                    <a href="/tolak/{{ $data->id }}" class="btn btn-warning btn-sm"><i class="fa fa-times-circle"></i> Tolak</a>
                                    <button class="btn btn-danger btn-sm" onClick="return confirm('Yakin mau dihapus ?')"><i class="fa fa-trash"></i> Hapus</button>
                                    
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
                {{ $user->links() }}
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


