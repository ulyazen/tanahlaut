@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Tambah Nota</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="{{ route('Nota.store') }}">
                    @csrf

                    <input type="hidden" id="input-id-rka" name="id_rka" value="{{request()->route('id')}}">

                    <div class="pl-lg-4">
                        <fieldset class="form-group">
                            <div class="row">
                                <label class="form-control-label col-sm-2 pt-0">Jenis Belanja</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_belanja" id="barang" value="Barang">
                                        <label class="form-check-label" for="barang">
                                            Barang
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_belanja" id="jasa" value="Jasa">
                                        <label class="form-check-label" for="jasa">
                                            Jasa
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_belanja" id="modal" value="Modal">
                                        <label class="form-check-label" for="modal">
                                            Modal
                                        </label>
                                    </div>

                                </div>
                                @error('jenis_belanja')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </fieldset>
                    </div>
                    <hr class="my-4" />
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-jumlah-harga">Jumlah Harga</label>
                                    <input type="text" id="input-jumlah-harga" name="jumlah_harga" class="form-control" required placeholder="Jumlah Harga">
                                    @error('jumlah_harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <!-- Address -->

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

                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
