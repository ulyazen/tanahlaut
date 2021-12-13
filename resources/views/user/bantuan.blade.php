@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Bantuan</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('Bantuan.store') }}">
                    @csrf
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-pertanyaan">Pertanyaan</label>
                                    <input type="text" id="input-pertanyaan" name="pertanyaan" class="form-control" required placeholder="Pertanyaan">
                                    @error('pertanyaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />

                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
