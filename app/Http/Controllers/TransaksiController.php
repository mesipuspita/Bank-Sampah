<?php
namespace App\Http\Controllers;
use App\Transaksi;
use App\Detail;
use App\Warga;
use APP\PDF;
use App\Sampah;
use App\Invoice;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TransaksiController extends Controller
{
    
    public function index()
    {
        $data = DB::table('transaksi')
        ->leftJoin('wargas','transaksi.user_id','=','wargas.id_warga')
        ->paginate(5);
        return view('transaksi.index',compact('data'));
    }
    public function edit($id_transaksi)
    {
        $trans = Transaksi::findorfail($id_transaksi);
        return view('Transaksi.edit',compact('trans'));
    }

    public function update(Request $request, $id_transaksi)
    {
        
        $trans = Transaksi::findOrFail($id_transaksi);     
        // $trans->update($request->all());
        $trans->status = $request->status;
        $trans->save();
        // \DB::table('transaksi')->where('id',$id)->update(['status' => $request->status]);
        return redirect()->route('transaksi.index')->with('success','Transaksi berhasil di update');
    }
    public function create()
    {
        $data['transaksi'] = DB::table('transaksi')->get();
        $data['data'] = DB::table('wargas')->get();
        return view('transaksi.create',$data);
    }
   
    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Transaksi  $transaksi
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
     {
         $request->validate([
           
            'nama_warga'        => 'required',
            'tgltransaksi'      => 'required',
            
         ]);
        
        $transaksi = new Transaksi;
        $transaksi->user_id = $request->nama_warga;
        $transaksi->tgltransaksi = $request->tgltransaksi;
        $transaksi->save();
         return redirect()->route('transaksi.index')->with('toast_success', 'Data Berhasil Tersimpan');
     }

    public function invoicetransaksi(Request $request,$id){
        // $invoice =Transaksi::where('id_transaksi,$id_transaksi')->first();
        // dd($invoice);
        // if(is_null($invoice));{
            
        // }
        $today = date('d-m-Y');
        $transaksi =$request->id_transaksi;
        $warga=null;
        if($request -> id_warga){
            $warga = Warga:: find($request-> id_warga);
        }
        $detail = Detail::all()->sum('total_jumlah');
        $warga = Warga::count();
        $Sampah = Sampah::select('*');
        $warga = Warga::select('*') // cara menampilkan isi field kelayar
        ->get();

        $dtdetail = DB::table('detail_transaksi')
        ->leftJoin('satuan','satuan.id_satuan','=','detail_transaksi.id_satuan')
        ->leftJoin('sampah','sampah.id_sampah','=','detail_transaksi.id_sampah')
        ->leftJoin('wargas','wargas.id_warga','=','detail_transaksi.id_warga')
        ->leftJoin('transaksi','transaksi.id_transaksi','=','detail_transaksi.id_transaksi')
        ->paginate(50);
        return view('transaksi.invoicetransaksi', compact('dtdetail','warga','Sampah','detail','today'));
    }
     public function bukti(Transaksi $transaksi, $id_transaksi){
        $title = 'Transaksi';
        $data = $transaksi->find($id_transaksi);
        return view('transaksi.bukti',compact('data','title'));
     }
        
        // $data['transaksi'] = DB::table('transaksi')->whereId($id)->first();
        // $transaksi->jumlah = $request->jumlah;
        // $transaksi->jenis_sampah = $request->jenis_sampah;
        // $transaksi->bukti= $request->bukti;

        // if($transaksi->save()){
        //     return redirect()->route('transaksi.bukti')->with('success','Data berhasil di input');    
        // }else{
        //     return redirect()->route('transaksi.bukti')->with('error','Data gagal di input');
        // }
        
     
        // simpan detail transaksi 
        // 1. cari data dari request id_sampah , di tabel sampah pakai first()
        // 2. kalikan harga sampah dari data di first tadi $data->harga * $request->jumlah
        // 3. ambil data di tabel transaksi berdasarkan $id
        // 4. simpan ke detail transaksi id_warga id_transaksi dapat dari poin 3 


        public function indexdata(Detail $transaksi,$id_detail,$id_warga)
        {
            $Detail = new Detail;
            $detail = Detail::all()->sum('total_jumlah');
            $Sampah = Sampah::select('*');
            // $data = $transaksi->findorfail($id_transaksi,$id_warga);
            $dtdetail = DB::table('detail_transaksi')
            ->leftJoin('satuan','satuan.id_satuan','=','detail_transaksi.id_satuan')
            ->leftJoin('sampah','sampah.id_sampah','=','detail_transaksi.id_sampah')
            ->leftJoin('wargas','wargas.id_warga','=','detail_transaksi.id_warga')
            ->leftJoin('transaksi','transaksi.id_transaksi','=','detail_transaksi.id_transaksi')
            ->paginate(50);
            return view('transaksi.indexdata', compact('dtdetail','detail'));
        }

        public function createdata()
          {
            $data['detail_transaksi'] = DB::table('detail_transaksi')->get();
            $data['datawarga'] = DB::table('wargas')->get();
            $data['datasatuan'] = DB::table('satuan')->get();
            $data['data'] = DB::table('sampah')->get();
            $data['datatransaksi'] = DB::table('transaksi')->get();
            return view('transaksi.createdata',$data);
    
         }
         public function storedata(Request $request)
         {
            // dd($id_satuan());
        $request->validate([
            // 'id_satuan'       =>'required',
         ]);

        if($request->hasFile('gambar')){
        
            $data = Detail :: create([
                'id_warga'=>$request->id_warga,
                'id_transaksi'=>$request->id_transaksi,
                'id_satuan'=>$request->id_satuan,
                'id_sampah'=>$request->id_sampah,
                'total'=>$request->total,
                'total_jumlah'=>$request->total_jumlah,
                'gambar'=>$request->file('gambar')->getClientOriginalName()
            ]);
        }else{
            
            $data = Detail :: create([
                'id_warga'=>$request->id_warga,
                'id_transaksi'=>$request->id_transaksi,
                'id_satuan'=>$request->id_satuan,
                'total'=>$request->total,
                'id_sampah'=>$request->id_sampah,
                'total_jumlah'=>$request->total_jumlah
            ]);
        }
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambardetail/',$request->file('gambar')->getClientOriginalName());
            $data->gambar=$request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('indexdata/id_warga/id_transaksi')->with('toast_success', 'Data Berhasil Tersimpan');
    }


    public function show(Transaksi $transaksi,$id_transaksi)
    {
        $data = $transaksi->findorfail($id_transaksi);
        return view('transaksi.show',compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */

    public function destroy(Transaksi $transaksi,$id_transaksi)
    {
         $transaksi->findorfail($id_transaksi)->delete();
         return redirect()->route('transaksi.index')->with('toast_success','Data berhasil dihapus');
    }

    public function cetaktransaksi(){
        return view('transaksi.cetak-transaksi');
    }
    public function cetaktransaksitanggal($tglawal,$tglakhir){
        // dd("Tanggal Awal: ".$tglawal, "Tanggal Akhir :".$tglakhir);
        $cetaktanggaltransaksi = Transaksi::with('transaksi')-> whereBetween('tgltransaksi',[$tglawal,$tglakhir])->get();
        return view('transaksi.cetak-transaksi-pertanggal', compact('cetaktanggaltransaksi'));
    }

    //CONTROLLER HALAMAN KEDUA

    public function usertransaksi()
    {
        $data = DB::table('transaksi')
        ->leftJoin('wargas','transaksi.user_id','=','wargas.id_warga')
        ->paginate(5);
        return view('transaksi.usertransaksi',compact('data'));
    }

    public function pdf(Request $request)
    {
        $data['judul']="Laporan PDF";
        $pdf = FacadePdf::loadView('pdf', $data);
        return $pdf->stream('invoice.pdf');
        $today = date('d-m-Y');
        
    $transaksi =$request->id_transaksi;
    $warga=null;
    if($request -> id_warga){
        $warga = Warga:: find($request-> id_warga);
    }
    $detail = Detail::all()->sum('total_jumlah');
    $warga = Warga::count();
    $Sampah = Sampah::select('*');
    $warga = Warga::select('*') // cara menampilkan isi field kelayar
    ->get();
    $dtdetail = DB::table('detail_transaksi')
        ->leftJoin('satuan','satuan.id_satuan','=','detail_transaksi.id_satuan')
        ->leftJoin('sampah','sampah.id_sampah','=','detail_transaksi.id_sampah')
        ->leftJoin('wargas','wargas.id_warga','=','detail_transaksi.id_warga')
        ->leftJoin('transaksi','transaksi.id_transaksi','=','detail_transaksi.id_transaksi')
        ->paginate(50);
        
        return view('pdf', compact('dtdetail','warga','Sampah','detail','today'));
    }

    public function downloadpdf()
    {
        $data = DB::table('detail_transaksi')->get();
        $pdf =DomPDFPDF::loadView('warga-pdf',compact('data'));
        $pdf->setPaper('A4','landscape');
        return $pdf->stream('warga.downloadpdf');
    }
}
