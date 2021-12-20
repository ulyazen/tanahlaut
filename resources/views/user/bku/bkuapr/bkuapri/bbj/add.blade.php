@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Tambah Belanja Barang dan Jasa</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('Rka.store') }}">
                    @csrf
                    <input type="text" hidden name="id_user" value="{{Auth::user()->id}}">
                    <input type="hidden" id="input-jenis" id="jenis" name="jenis"
                        value="Pemgembagan dan Implementasi SIstem Penilaian">
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-jenis-barang">Jenis Barang</label>
                                    <input type="text" id="input-jenis-barang" id="jenis_barang" name="jenis_barang"
                                        class="form-control" required placeholder="Jenis Barang">
                                    @error('jenis_barang')
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
                                    <label class="form-control-label" for="input-kode-rekening">Kode Rekening</label>
                                    <input type="text" id="input-kode-rekening" id="kode_rekening" name="kode_rekening"
                                        class="form-control" required placeholder="Kode Rekening">
                                    @error('kode_rekening')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-harga-barang-satuan">Harga Barang Satuan</label>
                                    <input type="text" id="input-harga-barang-satuan" id="harga_barang_satuan" name="harga_barang_satuan"
                                        class="form-control" required placeholder="Harga Barang Satuan">
                                    @error('harga_barang_satuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-jumlah-barang">Jumlah Barang</label>
                                    <input type="text" id="input-jumlah-barang" id="jumlah_barang" name="jumlah_barang"
                                        class="form-control" required placeholder="Jumlah Barang">
                                    @error('jumlah_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-harga-total">Harga Total</label>
                                    <input type="text" id="input-harga-total" id="harga_total" name="harga_total"
                                        class="form-control" required placeholder="Kode Rekening">
                                    @error('harga_total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <!-- Description -->

                    <div class="pl-lg-4">
                        <fieldset class="form-group">
                            <div class="row">
                                <label class="form-control-label col-sm-2 pt-0">Jenis Pajak</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_pajak" id="ppn10"
                                            value="PPN 10%">
                                        <label class="form-check-label" for="ppn10">
                                            PPN 10%
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_pajak" id="pph234"
                                            value="PPH23 4%">
                                        <label class="form-check-label" for="pph234">
                                            PPH23 4%
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_pajak" id="pd10"
                                            value="Pajak Daerah 10%">
                                        <label class="form-check-label" for="pd10">
                                            Pajak Daerah 10%
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_pajak" id="pph215"
                                            value="PPH21 5%">
                                        <label class="form-check-label" for="pph215">
                                            PPH21 5%
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
                    </div>
                    <hr class="my-4" />
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection