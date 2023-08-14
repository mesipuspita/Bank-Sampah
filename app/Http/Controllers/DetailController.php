<?php
namespace App\Http\Controllers;
use App\Detail;
use App\Sampah;
use App\Transaksi;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index($id_warga,$id_transaksi)
    {
        $dtdetail = DB::table('detail_transaksi')
        ->leftJoin('satuan','satuan.id_satuan','=','detail_transaksi.id_satuan')
        ->leftJoin('sampah','sampah.id_sampah','=','detail_transaksi.id_sampah')
        ->leftJoin('wargas','wargas.id_warga','=','detail_transaksi.id_warga')
        ->leftJoin('transaksi','transaksi.id_transaksi','=','detail_transaksi.id_transaksi')
        ->paginate(50);
        //dd($dtdetail);
        return view('detail.data-detail', compact('dtdetail'));
    }
    public function create()
    {
        
        $data['detail_transaksi'] = DB::table('detail_transaksi')->get();
        $data['datawarga'] = DB::table('wargas')->get();
        $data['datasatuan'] = DB::table('satuan')->get();
        $data['data'] = DB::table('sampah')->get();
       
        return view('detail.create-detail',$data);
        // $data['transaksi'] = DB::table('transaksi')->whereId($id_transaksi)->first();
    }

    public function store(Request $request)
    {
        
        // dd($id_satuan());
        $request->validate([
            'jenis_sampah' =>'required',
            'id_satuan'       =>'required',
         ]);

        if($request->hasFile('gambar')){
        
            $data = Detail :: create([
                'id_warga'=>$request->id_warga,
                'id_transaksi'=>$request->id_transaksi,
                'id_satuan'=>$request->id_satuan,
                'id_sampah'=>$request->jenis_sampah,
                'total'=>$request->total,
                'harga'=>$request->harga,
                'total_jumlah'=>$request->total_jumlah,
                'gambar'=>$request->file('gambar')->getClientOriginalName()
            ]);
        }else{
            
            $data = Detail :: create([
                'id_warga'=>$request->id_warga,
                'id_transaksi'=>$request->id_transaksi,
                'id_satuan'=>$request->id_satuan,
                'id_sampah'=>$request->jenis_sampah,
                'total'=>$request->total,
                'harga'=>$request->harga,
                'total_jumlah'=>$request->total_jumlah
            ]);
        }
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambardetail/',$request->file('gambar')->getClientOriginalName());
            $data->gambar=$request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('data-detail/id_warga/id_transaksi')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return view(detail/edit-detail);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_detail)
    {
        $data = Detail::findorfail($id_detail);
        $data->delete();
    }

    public function cetakdetail()
    {
        $title = 'Transaksi';
        $dtcetak = DB::table('detail_transaksi')
        ->leftJoin('satuan','satuan.id_satuan','=','detail_transaksi.id_satuan')
        ->leftJoin('sampah','sampah.id_sampah','=','detail_transaksi.id_sampah')
        ->leftJoin('wargas','wargas.id_warga','=','detail_transaksi.id_warga')
        ->leftJoin('transaksi','transaksi.id_transaksi','=','detail_transaksi.id_transaksi')
        ->get();

        $pdf = FacadePdf::loadView('detail.cetak-detail', compact('dtcetak','title'));
        $pdf->setPaper('A4','potret');
        return $pdf->stream('detail.download.pdf');
    }
    public function cetakdetaill()
    {
        $title = 'Transaksi';
        $dtcetak = DB::table('detail_transaksi')
        ->leftJoin('satuan','satuan.id_satuan','=','detail_transaksi.id_satuan')
        ->leftJoin('sampah','sampah.id_sampah','=','detail_transaksi.id_sampah')
        ->leftJoin('wargas','wargas.id_warga','=','detail_transaksi.id_warga')
        ->leftJoin('transaksi','transaksi.id_transaksi','=','detail_transaksi.id_transaksi')
        ->get();
        // dd($dtdetail);
        return view('detail.cetak-detail', compact('dtcetak','title'));
    }
     public function cetaklaporantransaksi()
    {
        return view('detail.cetaklaporantransaksi');
    }
    public function CetakPegawaiPertanggalDetail($tglawal, $tglakhir)
    {
        // dd("Tanggal Awal : ".$tglawal, "Tanggal Akhir : ".$tglakhir);
        // $CetakPertanggal =  DB::table('detail_transaksi')
        // ->join('satuan','satuan.id_satuan','=','detail_transaksi.id_satuan')
        // ->join('sampah','sampah.id_sampah','=','detail_transaksi.id_sampah')
        // ->Join('wargas','wargas.id_warga','=','detail_transaksi.id_warga')
        // ->whereBetween('detail_transaksi.created_at', [$tglawal, $tglakhir])
        // ->get();
        
        $CetakPertanggal = Detail:: with('transaksi','sampah')->whereBetween('created_at',[$tglawal,$tglakhir])->get();
        // // kalau urutannya diganti tinggal tambahin ->latest() pada bagian sebelum get()
        return view('detail.Cetak-LaporanPertanggal', compact('CetakPertanggal'));
        
    }
}
