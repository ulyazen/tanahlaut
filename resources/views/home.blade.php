@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-center">
    <div class="col-xl-12">
        <div class="card bg-default">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="text-light text-uppercase ls-1 mb-1">Pengumuman</h5>
                        @foreach ($pertanyaans as $pertanyaan)
                        <div class="card border-info mt-3">
                            <div class="card-header">Pertanyan : {{$pertanyaan->pertanyaan}}</div>
                            <div class="card-body  text-dark">
                                <h5 class="card-title">Jawaban :</h5>
                                <p class="card-text">{{$pertanyaan->jawaban}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
