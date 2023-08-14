<?php
namespace App\Http\Controllers;
use App\Warga;
use App\KantorCabang;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Polyfill\Intl\Idn\Resources\unidata\Regex;

class WargaController extends Controller
{
    public function index()
    {
        $title = 'Data Anggota';
        $datas['data'] = DB::table('kantorcabang')->get();
        $data = DB::table('wargas')
        ->leftJoin('users','users.id','=','wargas.id_warga')
        ->leftJoin('kantorcabang','kantorcabang.id_cabang','=','wargas.id_warga')->get();
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
    public function cardwarga(Request $request,$id)
    {
        $title = 'Kartu Anggota';
        $cetakcard = DB::table('wargas')->get();
        return view('warga.card-warga',compact('cetakcard','title'));
    }
    public function create()
    {
        $kantorcabang = KantorCabang::all();
        $data['data'] = DB::table('wargas')->get();
        $data['data'] = DB::table('kantorcabang')->get();
        return view('warga.create',$data,compact('kantorcabang'));
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
        // return $request;
         $title = 'Tambah Data Warga';
         $request->validate([
             'nokk'           => 'required',
             'nik'            => 'required',
             'nama_warga'     => 'required',
             'tgllahir'       => 'required',
             'notelepon'      => 'required',
            'statustinggal'  => 'required',
             'id_cabang'       => 'required',
             
         ],);
         $warga = new Warga;
         $warga->nokk = $request->nokk;
         $warga->nik = $request->nik;
         $warga->nama_warga = $request->nama_warga;
         $warga->tgllahir = $request->tgllahir;
         $warga->notelepon = $request->notelepon;
         $warga->statustinggal = $request->statustinggal;
         $warga->id_cabang = $request->nama_bs;
         Warga::create($request->all());
         return redirect()->route('warga.index')->with('success','Data berhasil di input');
    }
    public function destroy($id)
    {
        $warga= Warga::find($id)->delete();
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