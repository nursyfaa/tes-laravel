<?php

namespace App\Http\Controllers;

use App\Models\TransaksiM;
use Illuminate\Http\Request;
use App\Http\Resources\transaksiR;

class transaksiC extends Controller
{
    public function index(){
        $transaksi = TransaksiM::all();
        // return response()-> json($transaksi);
        return TransaksiR::collection($transaksi);
    }

    public function detail($id){
        $transaksi = TransaksiM::findOrFail($id);
    return new TransaksiR($transaksi);
    }
}