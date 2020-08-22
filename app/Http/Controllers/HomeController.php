<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class HomeController extends Controller
{
    public function index()
    {
    	# code...
    	$listpegawai = Pegawai::orderBy('id', 'ASC')->paginate(config('public.no_of_records'));

    	return view('home_satu::pegawai', ['pegawai' => $listpegawai]);
    }

    public function search(Request $request)
    {
    	$find = Pegawai::where('nama_pegawai','LIKE','%'.$request->search.'%')->orderBy('id', 'ASC');
        $pegawai_list = $find->paginate(config('public.no_of_records'));
        $pagination = $pegawai_list->appends($request->except('page'));
    	return view('home_satu::pegawai', ['pegawai' => $pagination]);
    }
}
