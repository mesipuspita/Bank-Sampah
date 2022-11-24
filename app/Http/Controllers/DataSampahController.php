<?php
namespace App\Http\Controllers;
use App\DataSampah;
use Illuminate\Http\Request;
class DataSampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datasampah = Datasampah::latest()->paginate(5);
        return view('datasampah.index',compact('datasampah'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datasampah.create');
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
            'nama' => 'required',
            'kategori' => 'required',
            'hargakilo' => 'required',
            'keterangan' => 'required',
        ]);
        DataSampah::create($request->all());
        return redirect()->route('datasampah.index')->with('success','Data berhasil di input');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\DataSampah $datasampah
     * @return \Illuminate\Http\Response
     */
    public function show(datasampah $datasampah,$id)
    {
        $data = $datasampah->find($id);
        return view('datasampah.show',compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataSampah  $datasampah
     * @return \Illuminate\Http\Response
     */
    public function edit(Datasampah $datasampah)
    {
        return view('datasampah.edit',compact('datasampah'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataSampah  $datasampah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataSampah $datasampah,$id)
    {
        $data = $datasampah->find($id)->update();
        $request->validate([
         'nama' => 'required',
         'kategori' => 'required',
         'hargakilo' => 'required',
         'keterangan' => 'required',
        ]);
        $datasampah->update($request->all());
        return redirect()->route('datasampah.index')->with('success','datasampah berhasil di update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataSampah  $datasampah
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataSampah $datasampah,$id)
    {
        $datasampah->find($id)->delete();
        return redirect()->route('datasampah.index')->with('success','DataSampah berhasil dihapus');
    }
}