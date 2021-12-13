@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">SPJ</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('Spj.store') }}">
                    @csrf
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-file-nota">Nota (.pdf)</label>
                                    <input type="file" name="file_nota" class="form-control-file" placeholder="Choose file" id="input-file-nota">
                                    @error('file_nota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-file-nota">Nota (.pdf)</label>
                                    <input type="file" name="file_nota" class="form-control-file" placeholder="Choose file" id="input-file-nota">
                                    @error('file_nota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" /><div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-file-nota">Nota (.pdf)</label>
                                    <input type="file" name="file_nota" class="form-control-file" placeholder="Choose file" id="input-file-nota">
                                    @error('file_nota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" /><div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-file-nota">Nota (.pdf)</label>
                                    <input type="file" name="file_nota" class="form-control-file" placeholder="Choose file" id="input-file-nota">
                                    @error('file_nota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" /><div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-file-nota">Nota (.pdf)</label>
                                    <input type="file" name="file_nota" class="form-control-file" placeholder="Choose file" id="input-file-nota">
                                    @error('file_nota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" /><div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-file-nota">Nota (.pdf)</label>
                                    <input type="file" name="file_nota" class="form-control-file" placeholder="Choose file" id="input-file-nota">
                                    @error('file_nota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" /><div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-file-nota">Nota (.pdf)</label>
                                    <input type="file" name="file_nota" class="form-control-file" placeholder="Choose file" id="input-file-nota">
                                    @error('file_nota')
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
