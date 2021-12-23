@extends('layouts.dashboard')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-12">

        @foreach ($zonas as $zona)

        <div class="card bg-default">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="text-light text-uppercase ls-1 mb-1">{{$zona}}</h5>

                        <div class="row">
                            @foreach ($users as $user)
                            @if ($user->zona === $zona)
                            <div class="col-xl-3">
                                <div class="card border-info mt-3">
                                    <div class="card-body  text-dark">
                                        <h5 class="card-title">Nama User : {{$user->name}}</h5>
                                        <p class="card-text"></p>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection