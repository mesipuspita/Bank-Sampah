<?php
namespace App\Http\Controllers;
use App\Biodata;
use Illuminate\Http\Request;
class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $biodata = Biodata::latest()->paginate(5);
        return view('biodata.index',compact('biodata'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biodata.create');
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
            'alamat' => 'required',
        ]);
        Biodata::create($request->all());
        return redirect()->route('biodata.index')->with('success','Data berhasil di input');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $biodata,$id)
    {
        $data = $biodata->find($id);
        return view('biodata.show',compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(Biodata $biodata)
    {
        return view('biodata.edit',compact('biodata'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Biodata $biodata,$id)
    {
        $data = $biodata->find($id)->update();
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);
        $biodata->update($request->all());
        return redirect()->route('biodata.index')->with('success','biodata berhasil di update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biodata $biodata,$id)
    {
        $biodata->find($id)->delete();
        return redirect()->route('biodata.index')->with('success','Biodata berhasil dihapus');
    }
}