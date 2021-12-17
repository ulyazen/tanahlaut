@extends('layouts.dashboard')

@section('content')
<script>
    function proccessAdmin(id){
       var laravelToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
       axios.put('/api/rka/admin/'+id, {
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
       axios.put('/api/rka/admin-zona/'+id, {
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
       axios.put('/api/rka/super-admin/'+id, {
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
            <a href="{{route('user.rka.psk.add', Auth::user()->id)}}"
                class="btn nav-link py-2 px-3 d-md-block bg-dark active">+</a>
        </li>
        <li class="nav-item">
            <a class="btn nav-link py-2 px-3 d-md-block bg-dark active">Export</a>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-xl-12 mt-6">
        @foreach ($psks as $psk)
        <div class="card">
            <div class="card-body bg-transparent">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase ls-1 mb-1">{{ $psk->jenis }}</h6>
                        <h3 class="h3 mb-0">{{ $psk->jenis_barang }}</h3>
                        <h6 class="mt-1">{{ $psk->created_at }}</h6>
                    </div>
                    <div class="col">
                        <ul class="nav nav-pills justify-content-end">

                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.rka.psk', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 bg-info active">
                                    <span class="d-md-block">Edit</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.rka.psk', Auth::user()->id)}}"
                                    class="nav-link py-2 px-3 bg-warning active">
                                    <span class="d-md-block">Hapus</span>
                                </a>
                            </li>
                            @if (Auth::check() && Auth::user()->is_user == 1 && ( Auth::user()->is_admin == 1))
                            @if($psk->is_approve_admin == 0)
                            <li class="nav-item mr-2 mr-md-0">
                                <button onclick='proccessAdmin({{$psk->id}})'
                                    class="btn nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block"> Approve Admin</span>
                                </button>
                            </li>
                            @endif
                            @if($psk->is_approve_admin == 1)
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="" class="nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block">Sudah Approve Admin</span>
                                </a>
                            </li>
                            @endif
                            @endif
                            @if (Auth::check() && Auth::user()->is_user == 1 && ( Auth::user()->is_admin == 1 ||
                            Auth::user()->is_admin_zona == 1 ))
                            @if($psk->is_approve_admin_zona == 0)
                            <li class="nav-item mr-2 mr-md-0">
                                <button onclick='proccessAdminZona({{$psk->id}})'
                                    class="btn nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block"> Approve Admin Zona</span>
                                </button>
                            </li>
                            @endif
                            @if($psk->is_approve_admin_zona == 1)
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="" class="nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block">Sudah Approve Admin Zona</span>
                                </a>
                            </li>
                            @endif
                            @endif
                            @if (Auth::check() && Auth::user()->is_user == 1 && ( Auth::user()->is_admin == 1 ||
                            Auth::user()->is_admin_zona == 1 || Auth::user()->is_super_admin == 1))
                            @if($psk->is_approve_super_admin == 0)
                            <li class="nav-item mr-2 mr-md-0">
                                <button onclick='proccessSuperAdmin({{$psk->id}})'
                                    class="btn nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block"> Approve Super Admin</span>
                                </button>
                            </li>
                            @endif
                            @if($psk->is_approve_super_admin == 1)
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="" class="nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block">Sudah Approve Super Admin</span>
                                </a>
                            </li>
                            @endif
                            @endif
                            @if ($psk->is_upload_nota==0)
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.rka.nota.add', $psk->id)}}"
                                    class="nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block">Upload Nota</span>
                                </a>
                            </li>
                            @elseif($psk->is_upload_nota==1 && $psk->file_nota!=null)
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="{{route('user.rka.nota.download', $psk->file_nota)}}"
                                    class="nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block">Download Nota</span>
                                </a>
                            </li>
                            <li class="nav-item mr-2 mr-md-0">
                                <a href="" class="nav-link py-2 px-3 bg-success active">
                                    <span class="d-md-block">Kuitansi</span>
                                </a>
                            </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
