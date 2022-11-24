<?php

namespace App\Http\Controllers;
use App\jual;
use Illuminate\Http\Request;
use DB;

class JualController extends Controller
{
    public function index()
    {
        $data = DB::table('jual')->get();
        return view('jual.index',compact('data'));
    }
    
    public function create()
    {
        return view('jual.create');
    }
    /**
     * Store a newly created resource in storage.
     *
      * @param  \App\Jual  $jual
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'beratsampah' => 'required',
            'jumlah' => 'required',
        ]);
        Jual::create($request->all());
        return redirect()->route('jual.index')->with('success','Data berhasil di input');
    }
    public function destroy(Jual $jual,$idjual)
    {
        $jual->find($idjual)->delete();
        return redirect()->route('jual.index')->with('success','jual berhasil dihapus');
    }

    public function edit(Jual $jual)
    {
        return view('jual.edit',compact('jual'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jual $jual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jual $jual,$idjual)
    {
        $data = $jual->find($idjual)->update();
        $request->validate([
            'beratsampah' => 'required',
            'jumlah' => 'required',
        ]);
        $jual->update($request->all());
        return redirect()->route('jual.index')->with('success','jual berhasil di update');
    }
}