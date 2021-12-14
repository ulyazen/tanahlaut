<?php

namespace App\Http\Controllers;

use App\Models\Rka;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

class RkaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.rka', ['title' => 'Rka']);
    }

    public function admin()
    {
        return view('admin.rka', ['title' => 'Rka']);
    }

    public function showPKLulusan()
    {

        $pklulusan =  DB::table('rka')
            ->join('nota', 'rka.id', '=', 'nota.id_rka', 'full outer')
            ->where('rka.jenis', 'Pengembangan Kompetensi Lulusan')
            ->select('rka.id', 'rka.jenis', 'rka.jenis_barang', 'rka.created_at', 'rka.is_upload_nota', 'nota.file_nota')
            ->orderBy('rka.created_at')
            ->get();

        return view('user.rka.pklulusan', ['title' => 'Rka', 'pklulusans' => $pklulusan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPKLulusan()
    {
        return view('user.rka.pklulusan.add', ['title' => 'Rka']);
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
}
