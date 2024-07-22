<?php

namespace App\Http\Controllers;

use App\Models\Kuisioner;
use Illuminate\Http\Request;

class KuisionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kuisioner::all();
        return view('admin.kuisioner.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kuisioner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pertanyaan' => 'required',
            'kategori' => 'required',
            'opsi1' => 'required',
            'opsi2' => 'required',
            'opsi3' => 'required',
            'opsi4' => 'required',
            'opsi5' => 'required',
        ]);
        $kuisioner = new Kuisioner();
        $kuisioner->pertanyaan = $validatedData['pertanyaan'];
        $kuisioner->kategori = $validatedData['kategori'];
        $kuisioner->opsi1 = $validatedData['opsi1'];
        $kuisioner->opsi2 = $validatedData['opsi2'];
        $kuisioner->opsi3 = $validatedData['opsi3'];
        $kuisioner->opsi4 = $validatedData['opsi4'];
        $kuisioner->opsi5 = $validatedData['opsi5'];
        $kuisioner->save();
        return redirect()->route('kuisioner.index')->with('toast_success', 'Berhasil Menyimpan Kuisioner');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kuisioner  $kuisioner
     * @return \Illuminate\Http\Response
     */
    public function show(Kuisioner $kuisioner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kuisioner  $kuisioner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $find = Kuisioner::findOrFail($id);
        return view('admin.kuisioner.edit', compact('find'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kuisioner  $kuisioner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Kuisioner::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('kuisioner.index')->with('toast_success', 'Berhasil Mengubah Kuisioner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kuisioner  $kuisioner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kuisioner::findOrFail($id);
        $data->delete();
        return redirect()->route('kuisioner.index')->with('toast_success', 'Berhasil Menghapus Kuisioner');
    }
}