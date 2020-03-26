<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Http;

class Covid19Controller extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $restotal = Http::get('https://api.kawalcorona.com/indonesia');
        $data = $response->json();
        $total = $restotal->json();
        return view('covid',compact('data','total'));
        
    }

}
