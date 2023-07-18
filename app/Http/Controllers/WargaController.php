<?php

namespace App\Http\Controllers;
use App\Warga;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WargaController extends Controller
{
    public function index()
    {
        
        $title = 'Data Warga';
        $data = DB::table('wargas')
        ->leftJoin('users','users.id','=','wargas.id_warga')->get();
        return view('warga.index',compact('data','title'));
    }

    public function exportpdf()
    {
        $expo = warga :: all();
        view()->share('expo',$expo);
        $pdf = DomPDFPDF::loadview('dataexpo-pdf');
        return $pdf->download('data.pdf');
       
    }
    public function cetakwarga()
    {
        $title = 'Cetak Laporan';
        $cetakdata = DB::table('wargas')->get();
        return view('warga.cetak-warga',compact('cetakdata','title'));
    }

    public function tampilanwarga()
    {
        $title ="Tampilan Data Warga";
        $tampilan = DB::table('sampah')->get();
        return view('warga.tampilan-warga',compact('tampilan','title'));
    }
    public function cardwarga()
    {
        $title = 'Kartu Anggota';
        $cetakcard = DB::table('wargas')->get();
        return view('warga.card-warga',compact('cetakcard','title'));
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
         $title = 'Tambah Data Warga';
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
    public function downloadpdf()
    {
        $data = DB::table('wargas')->get();
        $pdf = PDF::loadView('warga-pdf',compact('data'));
        $pdf->setPaper('A4','landscape');
        return $pdf->stream('warga.downloadpdf');
    }
    public function update(Request $request,$id)
    {
        $warga =Warga::findorfail($id);
        $warga ->gender = $request->gender;
        
        
        return redirect()->route('warga.edit')->with('success','sampah berhasil di update');
    }
 
}