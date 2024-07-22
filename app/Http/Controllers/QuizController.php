<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kuisioner;
use App\Models\Respon;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function page()
    {
        return view('kuisioners.landing');
    }
    public function show()
    {
        $alternatif = Alternatif::select('nama')->get();
        $data1 = Kuisioner::where('kategori', 'Keterampilan Klinis')->get();
        $data2 = Kuisioner::where('kategori', 'Kemudahan Dalam Pelayanan')->get();
        $data3 = Kuisioner::where('kategori', 'Keterampilan klinis  ')->get();
        $data4 = Kuisioner::where('kategori', 'Empati atau perhatian ')->get();
        $data5 = Kuisioner::where('kategori', 'Ketersediaan Atau Responsif ')->get();
        return view('kuisioners.kuisioner', compact('alternatif', 'data1', 'data2', 'data3', 'data4', 'data5'));
    }
    public function store(Request $request)
    {
        // $respondent = $request->nama;
        // $respondent_age = $request->umur;
        // $alternatif = $request->alternatif;

        // Array untuk menyimpan nilai rata-rata
        $jawabanKeys = ['jawaban', 'jawaban1', 'jawaban2', 'jawaban3', 'jawaban4'];
        $averages = [];

        foreach ($jawabanKeys as $index => $key) {
            $allAnswers = collect($request->$key)->flatten()->all();
            $totalAnswers = count($allAnswers);
            $sumAnswers = array_sum($allAnswers);
            $average = $totalAnswers > 0 ? $sumAnswers / $totalAnswers : 0;

            $averages["kriteria" . ($index + 1)] = $average;
        }

        // Simpan data ke dalam tabel 'respons'
        Respon::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alternatif' => $request->alternatif,
            'kriteria1' => $averages['kriteria1'],
            'kriteria2' => $averages['kriteria2'],
            'kriteria3' => $averages['kriteria3'],
            'kriteria4' => $averages['kriteria4'],
            'kriteria5' => $averages['kriteria5'],
        ]);

        // Redirect ke halaman sukses atau halaman lain dengan pesan
        return redirect()->route('thanks')
            ->with('success', 'Data kuisioner berhasil disimpan.');
    }
    public function thanks()
    {
        return view('Partials.thanks');
    }

}