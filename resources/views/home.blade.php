@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-center">
    <div class="col-xl-8">
        <div class="card bg-default">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-light text-uppercase ls-1 mb-1">Pengumuman</h6>
                        <h5 class="h3 text-white mb-0">{{ now()->toDateTimeString() }}</h5>
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
                {{ __('You are logged in!') }}
            </div>
        </div>
    </div>
</div>
@endsection
