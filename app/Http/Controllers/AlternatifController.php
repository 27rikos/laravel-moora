<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Alternatif::all();
        return view('admin.alternatif.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alternatif.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'nip' => 'required',
            'golongan' => 'required',
            'jabatan' => 'required',
        ]);
        $data = Alternatif::create([
            'nama' => $request->nama,
            'nip' => $request->nip,
            'golongan' => $request->golongan,
            'jabatan' => $request->jabatan,
        ]);
        $data->save();
        return redirect()->route('alternatif.index')->with('toast_success', 'Alternatif Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function show(Alternatif $alternatif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $find = Alternatif::findOrFail($id);
        return view('admin.alternatif.edit', compact('find'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Alternatif::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('alternatif.index')->with('toast_success', 'Alternatif Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Alternatif::findOrFail($id);
        $data->delete();
        return redirect()->route('alternatif.index')->with('toast_success', 'Alternatif Dihapus');
    }
}
