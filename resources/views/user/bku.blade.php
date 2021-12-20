@extends('layouts.dashboard')

@section('content')
<div class="col">
    <ul class="nav nav-pills justify-content-end">
        <li class="nav-item">
            <a href="{{route('user.bku.export')}}"
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
                        <h3 class="h3 mb-0">Januari</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.bku.bakujan', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Details</span>
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
                        <h3 class="h3 mb-0">Februari</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.bku.bkufeb', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                    <div class="card">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">Maret</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.bku.bkumar', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">April</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.bku.bkuapr', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                 <div class="card mt-6">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">Mei</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.bku.bakumei', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="card mt-6">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">Juni</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.bku.bakujun', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="card mt-6">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">Juli</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.bku.bakujuli', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="card mt-6">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">Agustus</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.bku.bakuags', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="card mt-6">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">September</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.bku.bakusep', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="card mt-6">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">Oktober</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.bku.bakuokt', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="card mt-6">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">November</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.bku.bakunov', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="card mt-6">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">Desember</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.bku.bakudes', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 active">
                                    <span class="d-md-block">Details</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
