@extends('layouts.dashboard')

@section('content')
<div class="col">
    <ul class="nav nav-pills justify-content-end">
        <li class="nav-item">
            <a href="{{route('user.pra-rka.export')}}"
                class="btn nav-link py-2 px-3 d-md-block bg-dark active">Export</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card mt-6">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">Barang dan Jasa</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.pra-rka.barang-jasa', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Jabarkan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">Belanja Modal</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.pra-rka.belanja-modal', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Jabarkan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
