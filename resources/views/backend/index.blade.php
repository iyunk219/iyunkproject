@extends('backend.template.main')
@section('content')
<header id="header" class="header">
    <div class="header-menu">
        <div class="col-sm-5">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-7 text-right">
            <div class="user-area dropdown float-right">
                <a href="{{url('/logout')}}" class="nav-link" id="logoutButton"><i class="fa fa-power-off"></i> Logout</a>
            </div>
        </div>
    </div>
</header><!-- /header -->

<div class="content mt-3">
    <div class="col-sm-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-success">Success</span> Kamu Berhasil Login {{ Session::get('username') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

    <!-- Data Cards -->
    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">
                <h4 class="mb-0"><span class="count">{{ $pembeli }}</span></h4>
                <p class="text-light">Data Pembeli</p>
                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart1"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class='col-sm-6 col-lg-3'>
        <div class='card text-white bg-flat-color-2'>
            <div class='card-body pb-0'>
                <h4 class='mb-0'><span class='count'>{{ $produk }}</span></h4>
                <p class='text-light'>Data Produk</p>
                <div class='chart-wrapper px-0' style='height:70px;' height='70'>
                    <canvas id='widgetChart2'></canvas>
                </div>
            </div>
        </div>
    </div>

    <!--/.col-->
    <div class='col-sm-6 col-lg-3'>
        <div class='card text-white bg-flat-color-3'>
            <div class='card-body pb-0'>
                <h4 class='mb-0'><span class='count'>{{ $admin }}</span></h4>
                <p class='text-light'>Data Admin</p>
                <div class='chart-wrapper px-0' style='height:70px;' height='70'>
                    <canvas id='widgetChart3'></canvas>
                </div>
            </div>
        </div>
    </div>

    <!--/.col-->
    <div class='col-sm-6 col-lg-3'>
        <div class='card text-white bg-flat-color-4'>
            <div class='card-body pb-0'>
                <h4 class='mb-0'><span class='count'>{{ $pemesanan }}</span></h4>
                <p class='text-light'>Data Pemesanan</p>
                <div class='chart-wrapper px-3' style='height:70px;' height='70'>
                    <canvas id='widgetChart4'></canvas>
                </div>
            </div>
        </div>
    </div>

</div><!-- /content -->

@endsection