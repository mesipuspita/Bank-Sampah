<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class UserController extends Controller
{
    public function index()
    {
        $data = DB::table('users')->get();
        return view('user.index',compact('data'));
    }
    public function downloaddataakun()
    {
        $data = DB::table('users')->get();
        $pdf = FacadePdf::loadView('data-akun',compact('data'));
        $pdf->setPaper('A4','pandcape');
        return $pdf->stream('user.download.pdf');
    }
}
