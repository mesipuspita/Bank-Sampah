<?php

namespace App\Http\Controllers;
use App\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WargaController extends Controller
{
    public function index()
    {
        $data = DB::table('wargas')->get();
        return view('warga.index',compact('data'));
    }
    public function cetakwarga()
    {
        $cetakdata = DB::table('wargas')->get();
        return view('warga.cetak-warga',compact('cetakdata'));
    }
    public function cardwarga()
    {
        $cetakcard = DB::table('wargas')->get();
        return view('warga.card-warga',compact('cetakcard'));
    }

    
    
    public function create()
    {
        return view('warga.create');
    }
    /**
     * Store a newly created resource in storage.
     *
      * @param  \App\Warga  $warga
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nokk'           => 'required',
            'nik'            => 'required',
            'statuspengguna' => 'required',
            'nama_warga'     => 'required',
            'gender'         => 'required',
            'tgllahir'       => 'required',
            'notelepon'      => 'required',
            'agama'          => 'required',
            'pendidikan'     => 'required',
            'pekerjaan'      => 'required',
            'statustinggal'  => 'required',
        ]);
        Warga::create($request->all());
        return redirect()->route('warga.index')->with('success','Data berhasil di input');
    }
    public function destroy(Warga $warga,$idwarga)
    {
        $warga->find($idwarga)->delete();
        return redirect()->route('warga.index')->with('success','Data berhasil dihapus');
    }
}