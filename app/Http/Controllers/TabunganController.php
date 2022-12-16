<?php
namespace App\Http\Controllers;
use App\Tabungan;
use App\Detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    public function index()
    {
        $data = DB::table('detail_transaksi')
        ->leftJoin('wargas','detail_transaksi.id_detail','=','wargas.id_warga')
        ->get();
        return view('tabungan.index',compact('data'));
    }
    public function detailtarik()
    {
        $data = DB::table('detail_transaksi')
        ->leftJoin('penarikan','detail_transaksi.id_detail','=','penarikan.id_penarikan')
        ->leftJoin('wargas','detail_transaksi.id_detail','=','wargas.id_warga')
        ->get();
        return view('tabungan.tabungan-detail',compact('data'));
    }
    public function invoice()
    {
        $data = DB::table('detail_transaksi')
        ->leftJoin('penarikan','detail_transaksi.id_detail','=','penarikan.id_penarikan')
        ->leftJoin('wargas','detail_transaksi.id_detail','=','wargas.id_warga')
        ->get();
        return view('tabungan.invoice',compact('data'));
    }
    public function create()
    {
        $data['detail_transaksi'] = DB::table('detail_transaksi')->get();
        $data['data'] = DB::table('wargas')->get();
        return view('tabungan.create',$data);
    }
     /**
     * Store a newly created resource in storage.
     *
      * @param  \App\Tabungan  $tabungan
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $request->validate([
            'total'        => 'required',
            'total_jumlah' => 'required',  
            'nama_warga'   => 'required',  
            'nik'          => 'required', 
        ]);
        
        $data = Detail :: create([
            'id_warga'=>$request->id_warga,
            'id_transaksi'=>$request->id_transaksi,
            'id_satuan'=>$request->id_satuan,
            'id_sampah'=>$request->id_sampah,
            'total'=>$request->total,
            'harga'=>$request->harga,
            'total_jumlah'=>$request->total_jumlah,
            'gambar'=>$request->file('gambar')->getClientOriginalName()
        ]);
        return redirect()->route('tabungan.index')->with('success','Data berhasil di input');
    }
    public function show($id)
    {
        $data = DB::table('detail_transaksi')
        ->leftJoin('wargas','detail_transaksi.id_detail','=','wargas.id_warga')
        ->get();
        return view('tabungan.index',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
