<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kuisioner;
use App\Models\Respon;

class DashboardController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::count();
        $respon = Respon::count();
        $kuisioner = Kuisioner::count();
        return view('admin.dashboard.index', compact('alternatif', 'respon', 'kuisioner'));
    }
}
