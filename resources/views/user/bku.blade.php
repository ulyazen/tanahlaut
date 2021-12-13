@extends('layouts.dashboard')

@section('content')
<div class="col">
    <ul class="nav nav-pills justify-content-end">
        <li class="nav-item">
            <a class="btn nav-link py-2 px-3 d-md-block bg-dark active">Export</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-xl-12 mt-6">
        <div class="card">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">Saldo Tahun Lalu</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">

                            @if (count($saldotahunlalu)>0)
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" onclick="" class="nav-link py-2 px-3 bg-primary active">
                                    <span class="d-md-block">Jabarkan</span>
                                </a>
                            </li>

                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" onclick="" class="nav-link py-2 px-3 bg-info active">
                                    <span class="d-md-block">Edit</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" class="nav-link py-2 px-3 bg-warning active">
                                    <span class="d-md-block">Hapus</span>
                                </a>
                            </li>
                            @else
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#addSaldo" onclick="" class="nav-link py-2 px-3 bg-primary active">
                                    <span class="d-md-block">Tambah</span>
                                </a>
                            </li>
                            @endif


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">Belanja Barang dan Jasa</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            @if (count($belanjabarang)>0)
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" onclick="" class="nav-link py-2 px-3 bg-primary active">
                                    <span class="d-md-block">Jabarkan</span>
                                </a>
                            </li>

                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" onclick="" class="nav-link py-2 px-3 bg-info active">
                                    <span class="d-md-block">Edit</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" class="nav-link py-2 px-3 bg-warning active">
                                    <span class="d-md-block">Hapus</span>
                                </a>
                            </li>
                            @else
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#addBarang" onclick="" class="nav-link py-2 px-3 bg-primary active">
                                    <span class="d-md-block">Tambah</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">Saldo Tunai</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            @if (count($saldotunai)>0)
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" onclick="" class="nav-link py-2 px-3 bg-primary active">
                                    <span class="d-md-block">Jabarkan</span>
                                </a>
                            </li>

                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" onclick="" class="nav-link py-2 px-3 bg-info active">
                                    <span class="d-md-block">Edit</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" class="nav-link py-2 px-3 bg-warning active">
                                    <span class="d-md-block">Hapus</span>
                                </a>
                            </li>
                            @else
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#addSaldoTunai" onclick="" class="nav-link py-2 px-3 bg-primary active">
                                    <span class="d-md-block">Tambah</span>
                                </a>
                            </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="h3 mb-0">Belanja Modal</h3>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            @if (count($belanjamodal)>0)
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" onclick="" class="nav-link py-2 px-3 bg-primary active">
                                    <span class="d-md-block">Jabarkan</span>
                                </a>
                            </li>

                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" onclick="" class="nav-link py-2 px-3 bg-info active">
                                    <span class="d-md-block">Edit</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" class="nav-link py-2 px-3 bg-warning active">
                                    <span class="d-md-block">Hapus</span>
                                </a>
                            </li>
                            @else
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#addBelanja" onclick="" class="nav-link py-2 px-3 bg-primary active">
                                    <span class="d-md-block">Tambah</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="addSaldo" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAdd">Tambah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('Bku.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="modal-body">
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="hidden" id="input-jenis" name="jenis" value="Saldo Tahun Lalu">
                                        <input type="hidden" name="is_added" value="1">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jumlah">Jumlah</label>
                                            <input type="text" id="input-jumlah" name="jumlah" class="form-control" required placeholder="Jumlah">
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-danger">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addBarang" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAdd">Tambah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('Bku.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="modal-body">
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="hidden" id="input-jenis" id="jenis" name="jenis" value="Belanja Barang dan Jasa">
                                        <input type="hidden" name="is_added" value="1">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jumlah">Jumlah</label>
                                            <input type="text" id="input-jumlah"  name="jumlah" class="form-control" required placeholder="Jumlah">
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-danger">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addSaldoTunai" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAdd">Tambah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('Bku.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="modal-body">
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="hidden" id="input-jenis" id="jenis" name="jenis" value="Saldo Tunai">
                                        <input type="hidden" name="is_added" value="1">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jumlah">Jumlah</label>
                                            <input type="text" id="input-jumlah"  name="jumlah" class="form-control" required placeholder="Jumlah">
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-danger">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addBelanja" tabindex="-1" aria-labelledby="modalAdd" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAdd">Tambah</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('Bku.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="modal-body">
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="hidden" id="input-jenis" id="jenis" name="jenis" value="Belanja Modal">
                                        <input type="hidden" name="is_added" value="1">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jumlah">Jumlah</label>
                                            <input type="text" id="input-jumlah"  name="jumlah" class="form-control" required placeholder="Jumlah">
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-danger">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {{-- <div class="modal fade" id="jabarkan-{{$barangjasa->id}}" tabindex="-1" aria-labelledby="modalJabarkan" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalKabarkan">Penjabaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('PraRka.update',$barangjasa->id) }}">
                        <fieldset id="form-{{ $barangjasa->id}}">
                            <div class="modal-body">
                                @csrf
                                @method('PUT')
                                <input type="hidden" id="input-jenis" id="jenis" name="jenis" value="{{ $barangjasa->jenis }}">
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-jenis-barang">Jenis Barang</label>
                                                <input type="text" id="input-jenis-barang" id="jenis_barang" name="jenis_barang" value="{{$barangjasa->jenis_barang}}" class="form-control" required placeholder="Jenis Barang">
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
                                                <input type="text" id="input-kode-rekening" name="kode_rekening" value="{{$barangjasa->kode_rekening}}" class="form-control" required placeholder="Kode Rekening">
                                                @error('kode_rekening')
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
                                                    <input class="form-check-input" type="radio" name="jenis_pajak" id="ppn10" value="PPN 10%" {{ $barangjasa->jenis_pajak=='PPN 10%' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="ppn10">
                                                        PPN 10%
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_pajak" id="pph234" value="PPH23 4%" {{ $barangjasa->jenis_pajak=='PPH23 4%' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="pph234">
                                                        PPH23 4%
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_pajak" id="pd10" value="Pajak Daerah 10%" {{ $barangjasa->jenis_pajak=='Pajak Daerah 10%' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="pd10">
                                                        Pajak Daerah 10%
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_pajak" id="pph215" value="PPH21 5%" {{ $barangjasa->jenis_pajak=='PPH21 5%' ? 'checked' : '' }}>
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

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="delete-{{$barangjasa->id}}" tabindex="-1" aria-labelledby="modalDelete" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDelete">Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('PraRka.destroy',$barangjasa->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                            Yakin untuk menghapus data tersebut?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </div>
</div>
@endsection
