<?php
namespace App\Http\Controllers;

use App\KantorCabang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KantorCabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('kantorcabang')
        ->leftJoin('wargas','kantorcabang.id_cabang','=','wargas.id_warga')
        ->paginate(50);
        return view('Banksampah.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Banksampah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
        {
            $request->validate([
                'id_cabang' => 'required',
                'nama_bs' => 'required',
                'alamatbs' => 'required',
                'ket' => 'required',
            ]);
            
            KantorCabang::create($request->all());
            return redirect()->route('Banksampah.index')->with('success','Data berhasil di input');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('Banksampah.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KantorCabang $kantorCabang,$id)
    {
        return view('Banksampah.edit',compact('banksampah'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banksampah =KantorCabang::findorfail($id);
        $banksampah ->nama_bs = $request->nama_bs;
        $banksampah ->alamarbs = $request->alamarbs;
        $banksampah ->ket= $request->ket;
        $banksampah->save();
        return redirect()->route('Banksampah.index')->with('success','sampah berhasil di update');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( KantorCabang $kantorCabang,$id)
    {
        $kantorCabang->findorfail($id)->delete();
        return redirect()->route('Banksampah.index')->with('info','Bank Sampah  berhasil dihapus');
    }
}
