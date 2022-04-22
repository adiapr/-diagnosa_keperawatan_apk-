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
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user-md fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">
                                <?php
                                    $koneksi = mysqli_connect("localhost","u7693570_diagnosa","u7693570_diagnosa","u7693570_diagnosa");
                                    $query = mysqli_query($koneksi,"select count(name) as jmluser FROM users");
                                    $data = mysqli_fetch_array($query);

                                    echo $data['jmluser'];
                                ?>
                            </div>
                            <div>Pengguna Terdaftar</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Pengguna yang menggunakan applikasi Paker</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">
                                <?php
                                    $koneksi = mysqli_connect("localhost","u7693570_diagnosa","u7693570_diagnosa","u7693570_diagnosa");
                                    $query = mysqli_query($koneksi,"select count(namapasien) as jmlpasien FROM pengkajian");
                                    $data = mysqli_fetch_array($query);

                                    echo $data['jmlpasien'];
                                ?>
                            </div>
                            <div>Data Pengkajian</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">Data pasien yang telah diinput ke sistem</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Jenis Kelamin Pasien
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    {{-- <div id="morris-area-chart"></div> --}}
                    <canvas id="myChart"></canvas>
                </div>
                <!-- /.panel-body -->
            </div>

            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Tingkat Kesadaran Pasien
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <canvas id="myChart1"></canvas>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <!-- /.col-lg-8 (nested) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
@endsection
