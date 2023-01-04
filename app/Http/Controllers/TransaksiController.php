<?php
namespace App\Http\Controllers;
use App\Transaksi;
use App\Detail;
use App\Warga;
use App\Sampah;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TransaksiController extends Controller
{
    
    public function index()
    {
        $title = 'Transaksi';
        $data = DB::table('transaksi')
        ->leftJoin('wargas','transaksi.user_id','=','wargas.id_warga')
        ->paginate(5);
        return view('transaksi.index',compact('data','title'));
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

    public function tambahSampah($id_transaksi)
    {
        $data['transaksi'] = DB::table('transaksi')->whereId($id_transaksi)->first();
        $data['data'] = DB::table('sampah')->get();
        $data['datas'] = DB::table('detail_transaksi')->get();
        return view('transaksi.add-sampah',$data);
    }
    public function invo(Request $request, $id_transaksi)
    {
        
        $warga = Warga::all();
        $sampah = Sampah::all();
        if($request->id_warga){
            $warga = Warga::find($request->id_warga);

        }
        if($sampah !=""){
            $sampah= Sampah::whare('jenis_sampah',$sampah)->get();

        }

        $Sampah = Sampah::count();
        $detail = Detail::all()->sum('total_jumlah');
        return view('informasi.index', compact('warga','Sampah','detail'));
    }
    
    public function storee(Request $request, $id_transaksi)
    {
         $request->validate([
            'jumlah'        =>'required',
            'jenis_sampah'  =>'required',
            'gambar'        =>'mimes:png,jpg,jpeg'
         ]);

        $docName = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('upload'), $docName);
        $id_transaksi = Transaksi ::create([
            'user_id'=>$id_transaksi,
            'jumlah'=>$request->jumlah,
            
        ])->id_transaksi;

        Detail :: create([
            'id_transaksi'=>$id_transaksi,
            'jenis_sampah'=>$request->jenis_sampah,
            'gambar'=>$docName
        ]);

        
        return redirect()->route('transaksi.bukti', $id_transaksi)->with('success','Data berhasil di input');   
    
     }

     public function bukti(Transaksi $transaksi, $id_transaksi){
        $data = $transaksi->find($id_transaksi);
        return view('transaksi.bukti',compact('data'));
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

    public function show(Transaksi $transaksi,$id_transaksi)
    {
        $data = $transaksi->find($id_transaksi);
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
}
