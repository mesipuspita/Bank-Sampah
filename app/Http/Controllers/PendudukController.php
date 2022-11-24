<?php

namespace App\Http\Controllers;
use App\Http\Penduduk;
use Illuminate\Http\Request;
use DB;

class PendudukController extends Controller
{
    public function index()
    {
        $data = DB::table('penduduk')->get();
        return view('penduduk.index',compact('data'));
    }
    
    public function create()
    {
        return view('penduduk.create');
    }
    /**
     * Store a newly created resource in storage.
     *
      * @param  \App\penduduk  $penduduk
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'no_kk' => 'required',
        ]);
        Penduduk::create($request->all());
        return redirect()->route('penduduk.index')->with('success','Data berhasil di input');
    }
    public function destroy(Penduduk $penduduk,$id)
    {
        $biodata->find($id)->delete();
        return redirect()->route('penduduk.index')->with('success','Biodata berhasil dihapus');
    }
}