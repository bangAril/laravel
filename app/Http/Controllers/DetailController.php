<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Detail;
class DetailController extends Controller
{
    public function index(){
        $detail = DB::table('tbl_transaksi_detail')
        ->join('tbl_barang', 'tbl_barang.id_barang', '=', 'tbl_transaksi_detail.id_barang')
        ->where('id_transaksi_detail','Trx')
        ->get();
        return view('/detail.index', compact(['detail']));
    }
}
