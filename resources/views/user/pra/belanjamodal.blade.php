@extends('layouts.dashboard')

@section('content')
<div class="col">
    <ul class="nav nav-pills justify-content-end">
        <li class="nav-item">
            <a href="{{route('user.pra-rka.belanja-modal.add')}}" class="btn nav-link py-2 px-3 d-md-block bg-dark active">+</a>
        </li>
        <li class="nav-item">
            <a class="btn nav-link py-2 px-3 d-md-block bg-dark active">Export</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-xl-12 mt-6">
        @foreach ($belanjamodals as $belanjamodal)
        <div class="card">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase ls-1 mb-1">{{ $belanjamodal->jenis }}</h6>
                        <h3 class="h3 mb-0">{{ $belanjamodal->jenis_barang }}</h3>
                        <h6 class="mt-1">{{ $belanjamodal->created_at }}</h6>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.pra-rka.barang-jasa')}}" class="nav-link py-2 px-3 bg-primary active">
                                    <span class="d-md-block">Jabarkan</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.pra-rka.barang-jasa')}}" class="nav-link py-2 px-3 bg-info active">
                                    <span class="d-md-block">Edit</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.pra-rka.barang-jasa')}}" class="nav-link py-2 px-3 bg-warning active">
                                    <span class="d-md-block">Hapus</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
