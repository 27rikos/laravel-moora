<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Respon;
use Barryvdh\DomPDF\Facade\Pdf;

class RankingController extends Controller
{
    public function index()
    {
        $responses = Respon::all();
        $w1 = Bobot::value('w1');
        $w2 = Bobot::value('w2');
        $w3 = Bobot::value('w3');
        $w4 = Bobot::value('w4');
        $w5 = Bobot::value('w5');

        // Hitung sum kuadrat dari setiap kriteria
        $sum_c1 = sqrt($responses->sum(fn($item) => pow($item->kriteria1, 2)));
        $sum_c2 = sqrt($responses->sum(fn($item) => pow($item->kriteria2, 2)));
        $sum_c3 = sqrt($responses->sum(fn($item) => pow($item->kriteria3, 2)));
        $sum_c4 = sqrt($responses->sum(fn($item) => pow($item->kriteria4, 2)));
        $sum_c5 = sqrt($responses->sum(fn($item) => pow($item->kriteria5, 2)));

        // Normalisasi dan Perhitungan MOORA
        $data = $responses->map(function ($item) use ($w1, $w2, $w3, $w4, $w5, $sum_c1, $sum_c2, $sum_c3, $sum_c4, $sum_c5) {
            $norm_c1 = $item->kriteria1 / $sum_c1;
            $norm_c2 = $item->kriteria2 / $sum_c2;
            $norm_c3 = $item->kriteria3 / $sum_c3;
            $norm_c4 = $item->kriteria4 / $sum_c4;
            $norm_c5 = $item->kriteria5 / $sum_c5;

            $nilai_moora = ($norm_c1 * $w1) + ($norm_c2 * $w2) - ($norm_c3 * $w3) + ($norm_c4 * $w4) + ($norm_c5 * $w5);

            return [
                'alternatif' => $item->alternatif,
                'kemudahan_dalam_pelayanan' => number_format($norm_c1, 3),
                'keterampilan_komunikasi' => number_format($norm_c2, 3),
                'keterampilan_klinis' => number_format($norm_c3, 3),
                'empati_atau_perhatian' => number_format($norm_c4, 3),
                'ketersediaan_atau_responsif' => number_format($norm_c5, 3),
                'nilai_moora' => $nilai_moora, // Note: Keep original value for sorting
            ];
        });

        // Urutkan data berdasarkan nilai MOORA dari tertinggi ke terendah
        $data = $data->sortByDesc('nilai_moora')->values();

        // Tambahkan nomor urut ranking
        $data = $data->map(function ($item, $index) {
            $item['rank'] = $index + 1;
            return $item;
        });

        return view('admin.ranking.index', compact('data'));
    }
    public function show()
    {
        $data = Respon::all();
        return view('admin.ranking.show', compact('data'));
    }

    public function destroy($id)
    {
        $data = Respon::findOrFail($id);
        $data->delete();
        return redirect()->route('show_respon')->with('toast_success', 'Data Dihapus');
    }

    public function export()
    {
        $responses = Respon::all();
        $w1 = Bobot::value('w1');
        $w2 = Bobot::value('w2');
        $w3 = Bobot::value('w3');
        $w4 = Bobot::value('w4');
        $w5 = Bobot::value('w5');

        // Hitung sum kuadrat dari setiap kriteria
        $sum_c1 = sqrt($responses->sum(fn($item) => pow($item->kriteria1, 2)));
        $sum_c2 = sqrt($responses->sum(fn($item) => pow($item->kriteria2, 2)));
        $sum_c3 = sqrt($responses->sum(fn($item) => pow($item->kriteria3, 2)));
        $sum_c4 = sqrt($responses->sum(fn($item) => pow($item->kriteria4, 2)));
        $sum_c5 = sqrt($responses->sum(fn($item) => pow($item->kriteria5, 2)));

        // Normalisasi dan Perhitungan MOORA
        $data = $responses->map(function ($item) use ($w1, $w2, $w3, $w4, $w5, $sum_c1, $sum_c2, $sum_c3, $sum_c4, $sum_c5) {
            $norm_c1 = $item->kriteria1 / $sum_c1;
            $norm_c2 = $item->kriteria2 / $sum_c2;
            $norm_c3 = $item->kriteria3 / $sum_c3;
            $norm_c4 = $item->kriteria4 / $sum_c4;
            $norm_c5 = $item->kriteria5 / $sum_c5;

            $nilai_moora = ($norm_c1 * $w1) + ($norm_c2 * $w2) - ($norm_c3 * $w3) + ($norm_c4 * $w4) + ($norm_c5 * $w5);

            return [
                'alternatif' => $item->alternatif,
                'kemudahan_dalam_pelayanan' => number_format($norm_c1, 3),
                'keterampilan_komunikasi' => number_format($norm_c2, 3),
                'keterampilan_klinis' => number_format($norm_c3, 3),
                'empati_atau_perhatian' => number_format($norm_c4, 3),
                'ketersediaan_atau_responsif' => number_format($norm_c5, 3),
                'nilai_moora' => $nilai_moora, // Note: Keep original value for sorting
            ];
        });

        // Urutkan data berdasarkan nilai MOORA dari tertinggi ke terendah
        $data = $data->sortByDesc('nilai_moora')->values();

        // Tambahkan nomor urut ranking
        $data = $data->map(function ($item, $index) {
            $item['rank'] = $index + 1;
            return $item;
        });
        $pdf = Pdf::loadView('admin.print.print_pdf', ['data' => $data], );
        return $pdf->download('ranking.pdf');

    }

}
