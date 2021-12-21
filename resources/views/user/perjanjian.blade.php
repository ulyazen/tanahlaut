@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-xl-12">
        @if((isset($perjanjian[0]->id_user) != Auth::user()->id) && count($perjanjian)<1) <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Surat Perjanjian Pencairan</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('Perjanjian.store') }}">
                    @csrf
                    <input type="text" hidden name="id_user" value="{{Auth::user()->id}}">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="hidden" name="is_added" value="1">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-jumlah">Jumlah</label>
                                        <input type="text" id="input-jumlah" name="jumlah" class="form-control" required
                                            placeholder="Jumlah">
                                        @error('jumlah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
    </div>
    @else
    @if(isset($perjanjian[0]->file_perjanjian))
    <div class="card mt-8">
        <div class="card-body bg-transparent">
            <div class="row align-items-ceter">
                <div class="col">
                    <h3 class="h3 mb-0">File Perjanjian</h3>
                </div>
                <div class="col">
                    <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item mr-2 mr-md-0">
                            <a href="{{route('user.perjanjian.download', $perjanjian[0]->file_perjanjian)}}"
                                class="nav-link py-2 px-3 active">
                                <span class="d-md-block">Download</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">File Perjanjian</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data"
                action="{{ route('Perjanjian.update' ,$perjanjian[0]->id) }}">
                @csrf
                @method('PUT')
                <input type="text" hidden name="id_user" value="{{Auth::user()->id}}">
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-file-perjanjian">
                                    Upload File Perjanjian
                                </label>
                                <input type="file" name="file_perjanjian" class="form-control-file"
                                    placeholder="Choose file" id="input-file-perjanjian">
                                @error('file_perjanjian')
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
        @endif
        @endif
    </div>
</div>
@endsection
