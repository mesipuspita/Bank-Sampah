<?php
namespace App\Http\Controllers;
use App\Petugas;
use App\KantorCabang;
use App\Detailpetugas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class PetugasjemputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('petugasjemput')->get();
        return view('petugasjemput.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        
        return view('petugasjemput.create');
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
            'nama_petugas' => 'required',
            'nohp' => 'required',
            'alamat_petugas' => 'required',
        ]);
        Petugas::create($request->all());
        return redirect()->route ('petugasjemput.index')->with('success','Data berhasil di input');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Petugas $petugas,$id)
    {
        $data = $petugas->find($id);
        return view('petugasjemput.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpetugas(Petugas $petugas)
    {
        return view('petugasjemput.editpetugas',compact('data'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ubah(Request $request, $id)
    {
        $petugas =Petugas::findorfail($id);
        $petugas ->nama_petugas = $request->nama_petugas;
        $petugas->save();
        return redirect()->route('petugasjemput.index')->with('success','sampah berhasil di update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petugas $petugas,$id)
    {
        $petugas->findorfail($id)->delete();
        return redirect()->route('petugasjemput.index')->with('info','Petugas berhasil dihapus');
    }

    public function indexdetail(Detailpetugas $detailpetugas,$id)
    {
        $data = DB::table('detailjemput')
        ->leftJoin('petugasjemput','petugasjemput.id_petugas','=','detailjemput.detail_id')
        ->leftJoin('wargas','wargas.id_warga','=','detailjemput.detail_id')
        ->leftJoin('sampah','sampah.id_sampah','=','detailjemput.detail_id')->get();
        return view('petugasjemput.indexdetail',compact('data'));
    }

    public function createdetail(Detailpetugas $detailpetugas,$id)
    {
        $data = $detailpetugas->find($id);
        $kantorcabang = KantorCabang::all();
        $detailpetugas = DB::table('detailjemput')
        ->leftJoin('petugasjemput','petugasjemput.id_petugas','=','detailjemput.detail_id')
        ->leftJoin('wargas','wargas.id_warga','=','detailjemput.detail_id')
        ->leftJoin('sampah','sampah.id_sampah','=','detailjemput.detail_id')->get();
        return view('petugasjemput.createdetail',compact('data','kantorcabang'));
    }

    public function storee(Request $request)
    {
        $request->validate([
                'id_cabang'      => 'required',
                'hari'           => 'required',
                'jamjemput'      => 'required',
                'tanggal'        => 'required',
            ]);
            return redirect('indexdetail')->with('toast_success', 'Data Berhasil Tersimpan');
    }
    
    public function showdetail(Petugas $petugas,$id)
    {
        $data = $petugas->find($id);
        return view('petugasjemput.show',compact('data'));
    }
}
