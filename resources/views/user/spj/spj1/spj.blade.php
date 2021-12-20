@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-xl-12">
        @if((isset($spj[0]->id_user) != Auth::user()->id) && count($spj)<1) <div class="card">
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
                    <input type="text" hidden name="id_user" value="{{Auth::user()->id}}">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-pra-rka">Upload File Pra RKA
                                        (.pdf)</label>
                                    <input type="file" name="file_pra_rka" class="form-control-file"
                                        placeholder="Choose file" id="input-pra-rka">
                                    @error('file_pra_rka')
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
                                    <label class="form-control-label" for="input-rka">Upload File RKA
                                        (.pdf)</label>
                                    <input type="file" name="file_rka" class="form-control-file"
                                        placeholder="Choose file" id="input-rka">
                                    @error('file_rka')
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
                                    <label class="form-control-label" for="input-bku">Upload File BKU
                                        (.pdf)</label>
                                    <input type="file" name="file_bku" class="form-control-file"
                                        placeholder="Choose file" id="input-bku">
                                    @error('file_bku')
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
                                    <label class="form-control-label" for="input-lra-bos">Upload File LRA BOS
                                        (.pdf)</label>
                                    <input type="file" name="file_lra_bos" class="form-control-file"
                                        placeholder="Choose file" id="input-lra-bos">
                                    @error('file_lra_bos')
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
                                    <label class="form-control-label" for="input-file-register">Upload File Register
                                        Penutupan Kas
                                        (.pdf)</label>
                                    <input type="file" name="file_register" class="form-file-file"
                                        placeholder="Choose file" id="input-file-register">
                                    @error('file_register')
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
                                    <label class="form-control-label" for="input-file-berita">Upload File Berita Acara
                                        (.pdf)</label>
                                    <input type="file" name="file_berita" class="form-control-file"
                                        placeholder="Choose file" id="input-file-berita">
                                    @error('file_berita')
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
                                    <label class="form-control-label" for="input-file-k7">Upload File K7
                                        (.pdf)</label>
                                    <input type="file" name="file_k7" class="form-control-file"
                                        placeholder="Choose file" id="input-file-k7">
                                    @error('file_k7')
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
    @else
    <div class="card mt-8">
        <div class="card-body bg-transparent">
            <div class="row align-items-ceter">
                <div class="col">
                    <h3 class="h3 mb-0">File Pra Rka</h3>
                </div>
                <div class="col">
                    <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item mr-2 mr-md-0">
                            <a href="{{route('user.spj.download', $spj[0]->file_pra_rka)}}"
                                class="nav-link py-2 px-3 active">
                                <span class="d-md-block">Download</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body bg-transparent">
            <div class="row align-items-ceter">
                <div class="col">
                    <h3 class="h3 mb-0">File Rka</h3>
                </div>
                <div class="col">
                    <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item mr-2 mr-md-0">
                            <a href="{{route('user.spj.download', $spj[0]->file_rka)}}"
                                class="nav-link py-2 px-3 active">
                                <span class="d-md-block">Download</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body bg-transparent">
            <div class="row align-items-ceter">
                <div class="col">
                    <h3 class="h3 mb-0">File BKU</h3>
                </div>
                <div class="col">
                    <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item mr-2 mr-md-0">
                            <a href="{{route('user.spj.download', $spj[0]->file_bku)}}"
                                class="nav-link py-2 px-3 active">
                                <span class="d-md-block">Download</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body bg-transparent">
            <div class="row align-items-ceter">
                <div class="col">
                    <h3 class="h3 mb-0">File LRA BOS</h3>
                </div>
                <div class="col">
                    <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item mr-2 mr-md-0">
                            <a href="{{route('user.spj.download', $spj[0]->file_lra_bos)}}"
                                class="nav-link py-2 px-3 active">
                                <span class="d-md-block">Download</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body bg-transparent">
            <div class="row align-items-ceter">
                <div class="col">
                    <h3 class="h3 mb-0">File Register Penutupan Kas</h3>
                </div>
                <div class="col">
                    <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item mr-2 mr-md-0">
                            <a href="{{route('user.spj.download', $spj[0]->file_register)}}"
                                class="nav-link py-2 px-3 active">
                                <span class="d-md-block">Download</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body bg-transparent">
            <div class="row align-items-ceter">
                <div class="col">
                    <h3 class="h3 mb-0">File Berita Acara</h3>
                </div>
                <div class="col">
                    <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item mr-2 mr-md-0">
                            <a href="{{route('user.spj.download', $spj[0]->file_berita)}}"
                                class="nav-link py-2 px-3 active">
                                <span class="d-md-block">Download</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body bg-transparent">
            <div class="row align-items-ceter">
                <div class="col">
                    <h3 class="h3 mb-0">File K7</h3>
                </div>
                <div class="col">
                    <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item mr-2 mr-md-0">
                            <a href="{{route('user.spj.download', $spj[0]->file_k7)}}"
                                class="nav-link py-2 px-3 active">
                                <span class="d-md-block">Download</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
</div>
@endsection