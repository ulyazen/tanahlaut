<?php

namespace App\Http\Controllers;

use App\Models\PraRka;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class PraRkaController extends Controller
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
        return view('user.pra');
    }

    public function admin()
    {
        return view('admin.pra');
    }

    public function showBarangJasa()
    {
        $barangjasa = PraRka::where('jenis', 'Barang dan Jasa')
            ->orderBy('created_at')
            ->take(5)
            ->get();
        return view('user.pra.barangjasa', ['barangjasas' => $barangjasa]);
    }
    public function showBelanjaModal()
    {
        $belanjamodal = PraRka::where('jenis', 'Belanja Modal')
            ->orderBy('created_at')
            ->take(5)
            ->get();
        return view('user.pra.belanjamodal', ['belanjamodals' => $belanjamodal]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createBarangJasa()
    {
        return view('user.pra.barangjasa.add');
    }
    public function createBelanjaModal()
    {
        return view('user.pra.belanjamodal.add');
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
            $prarka = PraRka::create($request->all());
            $response = [
                'message' => 'pra rka created',
                'data' => $prarka
            ];
            response()->json($response, Response::HTTP_CREATED);
            return redirect()->route('user.pra-rka')
                ->with('success', 'Pra rka created successfully.');
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PraRka  $praRka
     * @return \Illuminate\Http\Response
     */
    public function show(PraRka $praRka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PraRka  $praRka
     * @return \Illuminate\Http\Response
     */
    public function edit(PraRka $praRka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PraRka  $praRka
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PraRka $praRka)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PraRka  $praRka
     * @return \Illuminate\Http\Response
     */
    public function destroy(PraRka $praRka)
    {
        //
    }
}
