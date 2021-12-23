<?php

namespace App\Http\Controllers;

use App\Models\Rka;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use PDF;

class RkaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        return view('user.rka', ['title' => 'Rka']);
    }

    public function admin()
    {
        return view('admin.rka', ['title' => 'Rka']);
    }

    public function showPKLulusan($id)
    {

        $pklulusan =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Kompetensi Lulusan')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin', 'id_user')
            ->orderBy('rka.created_at')
            ->get();

        return view('user.rka.pklulusan', ['title' => 'Rka', 'pklulusans' => $pklulusan]);
    }
    public function createPKLulusan()
    {
        return view('user.rka.pklulusan.add', ['title' => 'Rka']);
    }
    public function kuitansiPKLulusan($id)
    {
        // retreive all records from db
        $pklulusan =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Kompetensi Lulusan')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin', 'id_user')
            ->orderBy('rka.created_at')
            ->get();

        // share data to view
        view()->share('pklulusan', $pklulusan);
        $pdf = PDF::loadView('user.rka.pklulusan.kuitansi', $pklulusan);

        // download PDF file with download method
        return $pdf->download('kuitnasi_pengembangan_kompetensi_lulusan.pdf');
    }
    public function showPSI($id)
    {

        $psi =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Standar Isi')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin')
            ->orderBy('rka.created_at')
            ->get();

        return view('user.rka.psi', ['title' => 'Rka', 'psis' => $psi]);
    }
    public function createPSI()
    {
        return view('user.rka.psi.add', ['title' => 'Rka']);
    }
    public function kuitansiPSI($id)
    {
        // retreive all records from db
        $psi =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Standar Isi')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin', 'id_user')
            ->orderBy('rka.created_at')
            ->get();

        // share data to view
        view()->share('pklulusan', $psi);
        $pdf = PDF::loadView('user.rka.psi.kuitansi', $psi);

        // download PDF file with download method
        return $pdf->download('kuitnasi_pengembangan_standar_kompetensi.pdf');
    }


    public function createPK()
    {
        return view('user.rka.pk.add', ['title' => 'Rka']);
    }
    public function showPK($id)
    {

        $pk =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Pendidik dan Tenaga Kependidikan')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin')
            ->orderBy('rka.created_at')
            ->get();

        return view('user.rka.pk', ['title' => 'Rka', 'pks' => $pk]);
    }
    public function kuitansiPK($id)
    {
        // retreive all records from db
        $pk =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Pendidik dan Tenaga Kependidikan')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin', 'id_user')
            ->orderBy('rka.created_at')
            ->get();

        // share data to view
        view()->share('pklulusan', $pk);
        $pdf = PDF::loadView('user.rka.pk.kuitansi', $pk);

        // download PDF file with download method
        return $pdf->download('kuitnasi_pengembangan_pendidik_dan_tenaga_kependidikan.pdf');
    }

    public function showPSK($id)
    {

        $psk =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Standar Kelulusan')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin')
            ->orderBy('rka.created_at')
            ->get();

        return view('user.rka.psk', ['title' => 'Rka', 'psks' => $psk]);
    }
    public function createPSK()
    {
        return view('user.rka.psk.add', ['title' => 'Rka']);
    }
    public function kuitansiPSK($id)
    {
        // retreive all records from db
        $psk =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Standar Kelulusan')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin', 'id_user')
            ->orderBy('rka.created_at')
            ->get();

        // share data to view
        view()->share('pklulusan', $psk);
        $pdf = PDF::loadView('user.rka.psk.kuitansi', $psk);

        // download PDF file with download method
        return $pdf->download('kuitnasi_pengembangan_standar_kelulusan.pdf');
    }

    public function createPS()
    {
        return view('user.rka.ps.add', ['title' => 'Rka']);
    }
    public function showPS($id)
    {

        $ps =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Saran dan Prasarana Sekolah')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin')
            ->orderBy('rka.created_at')
            ->get();

        return view('user.rka.ps', ['title' => 'Rka', 'pss' => $ps]);
    }
    public function kuitansiPS($id)
    {
        // retreive all records from db
        $ps =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Saran dan Prasarana Sekolah')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin', 'id_user')
            ->orderBy('rka.created_at')
            ->get();

        // share data to view
        view()->share('pklulusan', $ps);
        $pdf = PDF::loadView('user.rka.ps.kuitansi', $ps);

        // download PDF file with download method
        return $pdf->download('kuitnasi_pengembangan_sarana_dan_prasarana_sekolah.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPP()
    {
        return view('user.rka.pp.add', ['title' => 'Rka']);
    }
    public function showPP($id)
    {

        $pp =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Standar Pengelolaan')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin')
            ->orderBy('rka.created_at')
            ->get();

        return view('user.rka.pp', ['title' => 'Rka', 'pps' => $pp]);
    }
    public function kuitansiPP($id)
    {
        // retreive all records from db
        $pp =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Standar Pengelolaan')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin', 'id_user')
            ->orderBy('rka.created_at')
            ->get();

        // share data to view
        view()->share('pklulusan', $pp);
        $pdf = PDF::loadView('user.rka.pp.kuitansi', $pp);

        // download PDF file with download method
        return $pdf->download('kuitnasi_pengembangan_standar_pengelolaan.pdf');
    }



    public function showPSP($id)
    {

        $psp =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Standar Pembiayaan')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin')
            ->orderBy('rka.created_at')
            ->get();

        return view('user.rka.psp', ['title' => 'Rka', 'psps' => $psp]);
    }

    public function createPSP()
    {
        return view('user.rka.psp.add', ['title' => 'Rka']);
    }

    public function kuitansiPSP($id)
    {
        // retreive all records from db
        $psp =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Standar Pembiayaan')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin', 'id_user')
            ->orderBy('rka.created_at')
            ->get();

        // share data to view
        view()->share('pklulusan', $psp);
        $pdf = PDF::loadView('user.rka.psp.kuitansi', $psp);

        // download PDF file with download method
        return $pdf->download('kuitnasi_pengembangan_standar_pembiayaan.pdf');
    }
    public function showPI($id)
    {

        $pi =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembagan dan Implementasi Sistem Penilaian')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin')
            ->orderBy('rka.created_at')
            ->get();

        return view('user.rka.pi', ['title' => 'Rka', 'pis' => $pi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPI()
    {
        return view('user.rka.pi.add', ['title' => 'Rka']);
    }

    public function kuitansiPI($id)
    {
        // retreive all records from db
        $pi =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembagan dan Implementasi Sistem Penilaian')
            ->where('id_user', $id)
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota', 'rka.is_approve_admin',  'rka.is_approve_admin_zona',  'rka.is_approve_super_admin', 'id_user')
            ->orderBy('rka.created_at')
            ->get();

        // share data to view
        view()->share('pklulusan', $pi);
        $pdf = PDF::loadView('user.rka.pi.kuitansi', $pi);

        // download PDF file with download method
        return $pdf->download('kuitnasi_pengembangan_dan_implementasi_sistem_penilaian.pdf');
    }

    public function createNota()
    {
        return view('user.nota', ['title' => 'Rka']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jenis' => 'required',
            'jenis_barang' => 'required',
            'kode_rekening' => 'required',
            'jenis_pajak' => 'required',
            'id_user'  => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $rka = Rka::create($request->all());
            $response = [
                'message' => 'rka created',
                'data' => $rka
            ];
            response()->json($response, Response::HTTP_CREATED);
            return redirect()->route('user.rka')
                ->with('success', 'Rka created successfully.');
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rka  $rka
     * @return \Illuminate\Http\Response
     */
    public function show(Rka $rka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rka  $rka
     * @return \Illuminate\Http\Response
     */
    public function edit(Rka $rka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rka  $rka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rka $rka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rka  $rka
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rka $rka)
    {
        //
    }
    public function updateAdmin($id)
    {
        $rka = Rka::findOrFail($id);
        try {
            $rka = Rka::where('id', $id)->update(array('is_approve_admin' => true));
            $response = [
                'message' => 'rka updated',
                'data' => $rka
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }
    public function updateAdminZona($id)
    {
        $rka = Rka::findOrFail($id);
        try {
            $rka = Rka::where('id', $id)->update(array('is_approve_admin_zona' => true));
            $response = [
                'message' => 'rka updated',
                'data' => $rka
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }

    public function updateSuperAdmin($id)
    {
        $rka = Rka::findOrFail($id);
        try {
            $rka = Rka::where('id', $id)->update(array('is_approve_super_admin' => true));
            $response = [
                'message' => 'rka updated',
                'data' => $rka
            ];
            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }
}
