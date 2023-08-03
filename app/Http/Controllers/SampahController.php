<?php
namespace App\Http\Controllers;
use App\Sampah;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class SampahController extends Controller
{
    public function index()
    {
        $data = DB::table('sampah')
        ->leftJoin('satuan','satuan.id_satuan','=','sampah.id_satuan')
        ->paginate(10);
        // dd($dtdetail);
        return view('sampah.index',compact('data'));
    }
    
    public function create()
    {
    
        return view('sampah.create');
    }
    /**
     * Store a newly created resource in storage.
     *
      * @param  \App\Sampah  $sampah
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_sampah' => 'required',
            'jenis_sampah' => 'required',
            'harga' => 'required',
            'id_satuan' => 'required'
        ]);
        Sampah::create($request->all());
        return redirect()->route('sampah.index')->with('success','Data berhasil di input');
    }
    public function destroy(Sampah $sampah,$id)
    {
        $sampah->findorfail($id)->delete();
        return redirect()->route('sampah.index')->with('info','sampah berhasil dihapus');
    }
    public function show(Sampah $sampah,$id)
    {
        $data = $sampah->find($id);
        return view('sampah.show',compact('data'));
    }

    public function edit(Sampah $sampah)
    {
        return view('sampah.edit',compact('sampah'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sampah $sampah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $sampah =Sampah::findorfail($id);
        $sampah ->nama_sampah = $request->nama_sampah;
        $sampah ->jenis_sampah = $request->jenis_sampah;
        $sampah ->harga = $request->harga;
        $sampah ->id_satuan = $request->id_satuan;
    
        $sampah->save();
        return redirect()->route('sampah.index')->with('success','sampah berhasil di update');
    }
    public function downloadpdf()
    {
        $data = DB::table('sampah')->get();
        $pdf = FacadePdf::loadView('sampah-pdf',compact('data'));
        $pdf->setPaper('A4','pandcape');
        return $pdf->stream('sampah.download.pdf');
    }

    public function editstatus(Sampah $sampah)
    {
        return view('sampah.editstatus',compact('sampah'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sampah $sampah
     * @return \Illuminate\Http\Response
     */
    public function ubah(Request $request,$id)
    {
        $sampah =Sampah::findorfail($id);
        $sampah ->status = $request->status;
        $sampah->save();
        return redirect()->route('sampah.index')->with('success','sampah berhasil di update');
    }
}