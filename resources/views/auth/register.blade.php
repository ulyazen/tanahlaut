@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
    <div class="container">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                    <h1 class="text-white">Create an account</h1>
                    <p class="text-lead text-white">Use these awesome forms to login or create new account</p>
                </div>
            </div>
        </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
            xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>
<div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary border-0">

                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4">
                        Sign up
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                </div>
                                <input id="name" type="text" placeholder="Nama Sekolah"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input id="email" type="email" placeholder="Email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input id="password" type="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input id="password-confirm" placeholder="Confirm Password" type="password"
                                    class="form-control" name="password_confirmation" required
                                    autocomplete="new-password">
                            </div>
                        </div>

                        <fieldset class="form-group">
                            <div class="row">
                                <label class="form-control-label col-sm-2 pt-0">Pilih Zona</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="zona" id="Pelaihari_I"
                                            value="Pelaihari I" required>
                                        <label class="form-check-label" for="Pelaihari_I">
                                            Pelaihari I
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="zona" id="Bati-Bati"
                                            value="Bati-Bati">
                                        <label class="form-check-label" for="Bati-Bati">
                                            Bati-Bati
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="zona" id="Takisung"
                                            value="Takisung">
                                        <label class="form-check-label" for="Takisung">
                                            Takisung
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="zona" id="Pelaihari_II"
                                            value="Pelaihari II">
                                        <label class="form-check-label" for="Pelaihari_II">
                                            Pelaihari II
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="zona" id="Kurau"
                                            value="Kurau">
                                        <label class="form-check-label" for="Kurau">
                                            Kurau
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="zona" id="Panyipatan"
                                            value="Panyipatan">
                                        <label class="form-check-label" for="Panyipatan">
                                            Panyipatan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="zona" id="Bajuin"
                                            value="Bajuin">
                                        <label class="form-check-label" for="Bajuin">
                                            Bajuin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="zona" id="Bumi_Makmur"
                                            value="Bumi Makmur">
                                        <label class="form-check-label" for="Bumi_Makmur">
                                            Bumi Makmur
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="zona" id="Jorong"
                                            value="Jorong">
                                        <label class="form-check-label" for="Jorong">
                                            Jorong
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="zona" id="Tambang_Ulang"
                                            value="Tambang Ulang">
                                        <label class="form-check-label" for="Tambang_Ulang">
                                            Tambang Ulang
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="zona" id="Batu_Ampar"
                                            value="Batu Ampar'">
                                        <label class="form-check-label" for="Batu_Ampar">
                                            Batu Ampar
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="zona" id="Kintap"
                                            value="Kintap">
                                        <label class="form-check-label" for="Kintap">
                                            Kintap
                                        </label>
                                    </div>
                                </div>
                                @error('jenis_pajak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </fieldset>


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Create Account') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection