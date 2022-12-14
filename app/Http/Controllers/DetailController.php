<?php
namespace App\Http\Controllers;
use App\Detail;
use App\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_detail)
    {
        $dtdetail = DB::table('detail_transaksi')
        ->leftJoin('satuan','satuan.id_satuan','=','detail_transaksi.id_satuan')
        ->leftJoin('sampah','sampah.id_sampah','=','detail_transaksi.id_sampah')
        ->leftJoin('wargas','wargas.id_warga','=','detail_transaksi.id_warga')
        ->leftJoin('transaksi','transaksi.id_transaksi','=','detail_transaksi.id_transaksi')
        ->paginate(50);
        // dd($dtdetail);
        return view('detail.data-detail', compact('dtdetail'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {
        $data['detail_transaksi'] = DB::table('detail_transaksi')->get();
        $data['datawarga'] = DB::table('wargas')->get();
        $data['data'] = DB::table('sampah')->get();
       
        return view('detail.create-detail',$data);
       
        // $data['transaksi'] = DB::table('transaksi')->whereId($id_transaksi)->first();
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($id_satuan());
        $request->validate([
            'jenis_sampah'       =>'required',
           
            // 'nama_warga'         =>'required',
            // 'id_satuan'             =>'required',
            // 'total'              =>'required',
            // 'harga'              =>'required',
            

         ]);
        // dd($request->all());

        //  $data = Detail::create($request->all());

        // dd($request->id_warga);

        if($request->hasFile('gambar')){
        
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
        }else{
            
            $data = Detail :: create([
                'id_warga'=>$request->id_warga,
                'id_transaksi'=>$request->id_transaksi,
                'id_satuan'=>$request->id_satuan,
                'id_sampah'=>$request->id_sampah,
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
        $dtcetak = DB::table('detail_transaksi')
        ->leftJoin('satuan','satuan.id_satuan','=','detail_transaksi.id_satuan')
        ->leftJoin('sampah','sampah.id_sampah','=','detail_transaksi.id_sampah')
        ->leftJoin('wargas','wargas.id_warga','=','detail_transaksi.id_warga')
        ->leftJoin('transaksi','transaksi.id_transaksi','=','detail_transaksi.id_transaksi')
        ->get();
        // dd($dtdetail);
        return view('detail.cetak-detail', compact('dtcetak'));
    }
}
