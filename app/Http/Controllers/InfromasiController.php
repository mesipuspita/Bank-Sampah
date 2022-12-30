<?php

namespace App\Http\Controllers;
use App\Warga;
use App\Sampah;
use App\Detail;
use Illuminate\Http\Request;

class InfromasiController extends Controller
{
    public function index()
    {
        $warga = Warga::count();
        $Sampah = Sampah::count();
        $detail = Detail::all()->sum('total_jumlah');
        return view('informasi.index', compact('warga','Sampah','detail'));
        
        
    }
}
