<?php

namespace App\Http\Controllers;
use App\Pengajuan;
use Illuminate\Http\Request;
use DB;

class PengajuanController extends Controller
{
    public function index()
    {
        $data = DB::table('pengajuanperubahan')
        ->join('sampah','pengajuanperubahan.id_sampah','=','sampah.id_sampah')
        ->get();
        return view('pengajuanharga.index',compact('data'));
    }
    
    public function create()
    {
        return view('pengajuanharga.create');
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
            'id_pengajuan_harga'   => 'required',
            'jenis_sampah'         => 'required',
            'tanggal_pengajuan'    => 'required',
            'harga_pengajuan'      => 'required',
            'status_pengajuan'     => 'required',
            
        ]);
        Warga::create($request->all());
        return redirect()->route('pengajuanharga.index')->with('success','Data berhasil di input');
    }
    public function destroy(Pengajuan $warga,$idwarga)
    {
        $warga->find($idwarga)->delete();
        return redirect()->route('pengajuanharga.index')->with('success','Data berhasil dihapus');
    }
}