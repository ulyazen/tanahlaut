@extends('layouts.dashboard')

@section('content')

<script>
    function disable(id) {
        $("#form-" + id).prop("disabled", true);
    }

    function enable(id) {
        $("#form-" + id).prop("disabled", false);
    }
    function proccessAdmin(id){
       var laravelToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
       axios.put('/api/pra-rka/admin/'+id, {
      })
      .then(function (response) {
        console.log(response.data);
        location.reload();
        return false;
      })
      .catch(function (error) {
        console.log(error);
      });
       ;
    };
    function proccessAdminZona(id){
       var laravelToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
       axios.put('/api/pra-rka/admin-zona/'+id, {
      })
      .then(function (response) {
        console.log(response.data);
        location.reload();
        return false;
      })
      .catch(function (error) {
        console.log(error);
      });
       ;
    };
    function proccessSuperAdmin(id){
       var laravelToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
       axios.put('/api/pra-rka/super-admin/'+id, {
      })
      .then(function (response) {
        console.log(response.data);
        location.reload();
        return false;
      })
      .catch(function (error) {
        console.log(error);
      });
       ;
    };
</script>
<div class="col">
    <ul class="nav nav-pills justify-content-end">
        <li class="nav-item">
            <a href="{{route('user.pra-rka.belanja-modal.add', Auth::user()->id)}}"
                class="btn nav-link py-2 px-3 d-md-block bg-dark active">+</a>
        </li>
        <li class="nav-item">
            <a href="{{route('user.pra-rka.belanja-modal.export', Auth::user()->id)}}"
                class="btn nav-link py-2 px-3 d-md-block bg-dark active">Export</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-xl-12 mt-6">
        @foreach ($belanjamodals as $belanjamodal)
        <div class="card">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase ls-1 mb-1">{{ $belanjamodal->jenis }}</h6>
                        <h3 class="h3 mb-0">{{ $belanjamodal->jenis_barang }}</h3>
                        <h6 class="mt-1">{{ $belanjamodal->created_at }}</h6>
                    </div>
                    <div class="col-10">
                        <ul class="nav nav-pills justify-content-end">
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#jabarkan-{{$belanjamodal->id}}"
                                    onclick="disable('{{ $belanjamodal->id}}')"
                                    class="nav-link py-2 px-3 bg-primary active">
                                    <span class="d-md-block">Jabarkan</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#jabarkan-{{$belanjamodal->id}}"
                                    onclick="enable('{{ $belanjamodal->id}}')"
                                    class="nav-link py-2 px-3 bg-info active">
                                    <span class="d-md-block">Edit</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a data-toggle="modal" data-target="#delete-{{$belanjamodal->id}}"
                                    class="nav-link py-2 px-3 bg-warning active">
                                    <span class="d-md-block">Hapus</span>
                                </a>
                            </li>
                            @if (Auth::check() && Auth::user()->is_user == 1 && ( Auth::user()->is_admin == 1))
                            @if($belanjamodal->is_approve_admin == 0)
                            <li class="nav-item mr-2 mr-md-0">
                                <button onclick='proccessAdmin({{$belanjamodal->id}})'
                                    class="btn nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block"> Approve Admin</span>
                                </button>
                            </li>
                            @endif
                            @if($belanjamodal->is_approve_admin == 1)
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="" class="nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block">Sudah Approve Admin</span>
                                </a>
                            </li>
                            @endif
                            @endif
                            @if (Auth::check() && Auth::user()->is_user == 1 && ( Auth::user()->is_admin == 1 ||
                            Auth::user()->is_admin_zona == 1 ))
                            @if($belanjamodal->is_approve_admin_zona == 0)
                            <li class="nav-item mr-2 mr-md-0">
                                <button onclick='proccessAdminZona({{$belanjamodal->id}})'
                                    class="btn nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block"> Approve Admin Zona</span>
                                </button>
                            </li>
                            @endif
                            @if($belanjamodal->is_approve_admin_zona == 1)
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="" class="nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block">Sudah Approve Admin Zona</span>
                                </a>
                            </li>
                            @endif
                            @endif
                            @if (Auth::check() && Auth::user()->is_user == 1 && ( Auth::user()->is_admin == 1 ||
                            Auth::user()->is_admin_zona == 1 || Auth::user()->is_super_admin == 1))
                            @if($belanjamodal->is_approve_super_admin == 0)
                            <li class="nav-item mr-2 mr-md-0">
                                <button onclick='proccessSuperAdmin({{$belanjamodal->id}})'
                                    class="btn nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block"> Approve Super Admin</span>
                                </button>
                            </li>
                            @endif
                            @if($belanjamodal->is_approve_super_admin == 1)
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="" class="nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block">Sudah Approve Super Admin</span>
                                </a>
                            </li>
                            @endif
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="jabarkan-{{$belanjamodal->id}}" tabindex="-1" aria-labelledby="modalJabarkan"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalKabarkan">Penjabaran</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('PraRka.update',$belanjamodal->id) }}">
                        <input type="text" hidden name="id_user" value="{{Auth::user()->id}}">
                        <fieldset id="form-{{ $belanjamodal->id}}">
                            <div class=" modal-body">
                                @csrf
                                @method('PUT')
                                <input type="hidden" id="input-jenis" id="jenis" name="jenis"
                                    value="{{ $belanjamodal->jenis }}">
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-jenis-barang">Jenis
                                                    Barang</label>
                                                <input type="text" id="input-jenis-barang" id="jenis_barang"
                                                    name="jenis_barang" value="{{$belanjamodal->jenis_barang}}"
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
                                                <label class="form-control-label" for="input-kode-rekening">Kode
                                                    Rekening</label>
                                                <input type="text" id="input-kode-rekening" name="kode_rekening"
                                                    value="{{$belanjamodal->kode_rekening}}" class="form-control"
                                                    required placeholder="Kode Rekening">
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
                                                    <input class="form-check-input" type="radio" name="jenis_pajak"
                                                        id="ppn10" value="PPN 10%" {{ $belanjamodal->jenis_pajak=='PPN
                                                    10%' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="ppn10">
                                                        PPN 10%
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_pajak"
                                                        id="pph234" value="PPH23 4%" {{
                                                        $belanjamodal->jenis_pajak=='PPH23 4%' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="pph234">
                                                        PPH23 4%
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_pajak"
                                                        id="pd10" value="Pajak Daerah 10%" {{
                                                        $belanjamodal->jenis_pajak=='Pajak Daerah 10%' ? 'checked' : ''
                                                    }}>
                                                    <label class="form-check-label" for="pd10">
                                                        Pajak Daerah 10%
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jenis_pajak"
                                                        id="pph215" value="PPH21 5%" {{
                                                        $belanjamodal->jenis_pajak=='PPH21 5%' ? 'checked' : '' }}>
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
        <div class="modal fade" id="delete-{{$belanjamodal->id}}" tabindex="-1" aria-labelledby="modalDelete"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDelete">Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('PraRka.destroy',$belanjamodal->id) }}" method="POST">
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
        </div>
        @endforeach
    </div>
</div>
@endsection
