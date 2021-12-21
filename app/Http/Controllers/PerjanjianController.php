<?php

namespace App\Http\Controllers;

use App\Models\Perjanjian;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PerjanjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $perjanjian = Perjanjian::where('id_user', $id)
            ->orderBy('created_at')
            ->take(1)
            ->get();
        return view('user.perjanjian', ['title' => 'Pra Rka', 'perjanjian' => $perjanjian]);
    }

    public function admin($id)
    {
        $perjanjian = Perjanjian::where('id_user', $id)
            ->orderBy('created_at')
            ->take(1)
            ->get();
        return view('admin.perjanjian', ['title' => 'Pra Rka', 'perjanjian' => $perjanjian]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'jumlah' => 'required',
            'id_user'  => 'required',
        ]);
        $id = $request->id_user;
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $perjanjian = Perjanjian::create($request->all());
            $response = [
                'message' => 'perjanjian created',
                'data' => $perjanjian
            ];
            response()->json($response, Response::HTTP_CREATED);
            return redirect()->route('user.perjanjian', $id)
                ->with('success', 'perjanjian created successfully.');
        } catch (QueryException $e) {
            return response()->json([
                'message' => "Failed" . $e->errorInfo
            ]);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perjanjian  $perjanjian
     * @return \Illuminate\Http\Response
     */
    public function show(Perjanjian $perjanjian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perjanjian  $perjanjian
     * @return \Illuminate\Http\Response
     */
    public function edit(Perjanjian $perjanjian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perjanjian  $perjanjian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $perjanjian = Perjanjian::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'file_perjanjian'  => 'required|max:4096',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $file_perjanjian = time() . '_' . $request->file_perjanjian->getClientOriginalName();
        $filePath1 = $request->file('file_perjanjian')->storeAs('perjanjian', $file_perjanjian, 'public');
        Perjanjian::where('id', $id)->update(array('file_perjanjian' => $file_perjanjian));

        $response = [
            'message' => 'Perjanjian updated',
            'data' => $perjanjian
        ];
        return back()
            ->with('success', 'File has been uploaded.');
    }

    public function download($file)
    {

        return Storage::disk('public')->download('perjanjian/' . $file);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perjanjian  $perjanjian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perjanjian $perjanjian)
    {
        //
    }
}
