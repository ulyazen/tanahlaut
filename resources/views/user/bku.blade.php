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
                        <h2 class="mb-0">Saldo Tahun Lalu {!! (count($saldotahunlalu)>0)
                            ? '<span
                                class="badge badge-primary">Rp.'.number_format($saldotahunlalu[0]->jumlah,2,",",".").'</span>'
                            : '' !!}</h2>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            @if (count($saldotahunlalu)>0)
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" onclick=""
                                    class="nav-link py-2 px-3 bg-info active">
                                    <span class="d-md-block">Edit</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#delete-{{$saldotahunlalu[0]->id}}"
                                    class="nav-link py-2 px-3 bg-warning active">
                                    <span class="d-md-block">Hapus</span>
                                </a>
                            </li>
                            <div class="modal fade" id="delete-{{$saldotahunlalu[0]->id}}" tabindex="-1"
                                aria-labelledby="modalDelete" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalDelete">Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('Bku.destroy',$saldotahunlalu[0]->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body">
                                                Yakin untuk menghapus data tersebut?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @else
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#addSaldo" onclick=""
                                    class="nav-link py-2 px-3 bg-primary active">
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
                        <h2 class="mb-0">Belanja Barang dan Jasa {!! (count($belanjabarang)>0)
                            ? '<span class="badge badge-primary">Rp.'.$belanjabarang[0]->jumlah.'</span>'
                            : '' !!}
                        </h2>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            @if (count($belanjabarang)>0)

                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" onclick=""
                                    class="nav-link py-2 px-3 bg-info active">
                                    <span class="d-md-block">Edit</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#delete-{{$belanjabarang[0]->id}}"
                                    class="nav-link py-2 px-3 bg-warning active">
                                    <span class="d-md-block">Hapus</span>
                                </a>
                            </li>
                            <div class="modal fade" id="delete-{{$belanjabarang[0]->id}}" tabindex="-1"
                                aria-labelledby="modalDelete" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalDelete">Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('Bku.destroy',$belanjabarang[0]->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body">
                                                Yakin untuk menghapus data tersebut?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @else
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#addBarang" onclick=""
                                    class="nav-link py-2 px-3 bg-primary active">
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
                        <h2 class="mb-0">Saldo Tunai {!! (count($saldotunai)>0) ? '<span
                                class="badge badge-primary">Rp.'.number_format($saldotunai[0]->jumlah,2,",",".").'</span>'
                            : '' !!}</h2>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            @if (count($saldotunai)>0)

                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" onclick=""
                                    class="nav-link py-2 px-3 bg-info active">
                                    <span class="d-md-block">Edit</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#delete-{{$saldotunai[0]->id}}"
                                    class="nav-link py-2 px-3 bg-warning active">
                                    <span class="d-md-block">Hapus</span>
                                </a>
                            </li>
                            <div class="modal fade" id="delete-{{$saldotunai[0]->id}}" tabindex="-1"
                                aria-labelledby="modalDelete" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalDelete">Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('Bku.destroy',$saldotunai[0]->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body">
                                                Yakin untuk menghapus data tersebut?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @else
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#addSaldoTunai" onclick=""
                                    class="nav-link py-2 px-3 bg-primary active">
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
                        <h2 class="mb-0">Belanja Modal {!! (count($belanjamodal)>0) ? '<span
                                class="badge badge-primary">Rp.'.number_format($belanjamodal[0]->jumlah,2,",",".").'</span>'
                            : '' !!}</h2>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">
                            @if (count($belanjamodal)>0)

                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="" onclick=""
                                    class="nav-link py-2 px-3 bg-info active">
                                    <span class="d-md-block">Edit</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#delete-{{$belanjamodal[0]->id}}"
                                    class="nav-link py-2 px-3 bg-warning active">
                                    <span class="d-md-block">Hapus</span>
                                </a>
                            </li>
                            <div class="modal fade" id="delete-{{$belanjamodal[0]->id}}" tabindex="-1"
                                aria-labelledby="modalDelete" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalDelete">Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('Bku.destroy',$belanjabarang[0]->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-body">
                                                Yakin untuk menghapus data tersebut?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @else
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#addBelanja" onclick=""
                                    class="nav-link py-2 px-3 bg-primary active">
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
                                            <input type="text" id="input-jumlah" name="jumlah" class="form-control"
                                                required placeholder="Jumlah">
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
                                        <input type="hidden" id="input-jenis" id="jenis" name="jenis"
                                            value="Belanja Barang dan Jasa">
                                        <input type="hidden" name="is_added" value="1">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jumlah">Jumlah</label>
                                            <input type="text" id="input-jumlah" name="jumlah" class="form-control"
                                                required placeholder="Jumlah">
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
                                        <input type="hidden" id="input-jenis" id="jenis" name="jenis"
                                            value="Saldo Tunai">
                                        <input type="hidden" name="is_added" value="1">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jumlah">Jumlah</label>
                                            <input type="text" id="input-jumlah" name="jumlah" class="form-control"
                                                required placeholder="Jumlah">
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
                                        <input type="hidden" id="input-jenis" id="jenis" name="jenis"
                                            value="Belanja Modal">
                                        <input type="hidden" name="is_added" value="1">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jumlah">Jumlah</label>
                                            <input type="text" id="input-jumlah" name="jumlah" class="form-control"
                                                required placeholder="Jumlah">
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
    </div>
</div>
@endsection
