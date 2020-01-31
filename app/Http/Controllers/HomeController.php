<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class HomeController extends Controller
{
    public function index()
    {
    	# code...
    	$listpegawai = Pegawai::orderBy('id', 'ASC')->get();

    	return view('home_satu::pegawai', ['listpegawai' => $listpegawai]);
    }

    public function search($search)
    {
    	$find = Pegawai::where('nama_pegawai','LIKE','%'.$search.'%')->orderBy('id', 'ASC')->get();
    	return response()->json([
    		'data' => $find
    	]);
    }
}
