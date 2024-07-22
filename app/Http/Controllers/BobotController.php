<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use Illuminate\Http\Request;

class BobotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bobot::all();
        return view('admin.bobot.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bobot.create');
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
            'w1' => 'required',
            'w2' => 'required',
            'w3' => 'required',
            'w4' => 'required',
            'w5' => 'required',
        ]);
        $data = new Bobot;
        $data->w1 = $request->input('w1');
        $data->w2 = $request->input('w2');
        $data->w3 = $request->input('w3');
        $data->w4 = $request->input('w4');
        $data->w5 = $request->input('w5');
        $data->save();
        return redirect()->route('bobot.index')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function show(Bobot $bobot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $find = Bobot::findOrFail($id);
        return view('admin.bobot.edit', compact('find'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Bobot::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('bobot.index')->with('success', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bobot $bobot)
    {
        //
    }
}
