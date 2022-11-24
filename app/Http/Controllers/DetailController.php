<?php

namespace App\Http\Controllers;
use App\Detail;
use DB;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dtdetail = DB::table('detail_transaksi')
        ->leftJoin('satuan','satuan.id_satuan','=','detail_transaksi.id_satuan')
        ->leftJoin('sampah','sampah.id_sampah','=','detail_transaksi.id_sampah')
        ->leftJoin('wargas','wargas.id_warga','=','detail_transaksi.id_warga')
        ->leftJoin('transaksi','transaksi.id_transaksi','=','detail_transaksi.id_transaksi')
        ->paginate(10);
        // dd($dtdetail);
        return view('detail.data-detail', compact('dtdetail'));
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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
    {
        return view('detail.create-detail');
        // $data['transaksi'] = DB::table('transaksi')->whereId($id_transaksi)->first();
    
    }

    public function createDetail(){
        return view('detail.create-detail');
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
            'id_satuan'        =>'required',
         ]);
        // dd($request->all());

         $data = Detail::create($request->all());
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
}
