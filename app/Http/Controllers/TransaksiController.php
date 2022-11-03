<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Transaksi;
use App\Models\Detail;
use App\Models\Baarang;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = DB::table('tbl_transaksi')
        ->get();
        return view('/transaksi.index', compact(['transaksi']));
    }

    public function tambah(){
        $barang = DB::table('tbl_barang')
        ->get();

        return view('/transaksi.tambah',compact(['barang']));
    }

    public function simpan(Request $request){
        //save to transaksi
        $simpan  = Transaksi::create([
            'id_admin'=> $request->id_admin,
            'transaksi_tanggal'=> $request->transaksi_tanggal,
            'transaksi_nonota'=> $request->transaksi_nonota,
            'transaksi_status'=> $request->transaksi_status
        ]);
        echo $simpan->id_transaksi;

        //save to transaksi detail
        $simpan  = Detail::create([
            'id_transaksi'=> $simpan->id_transaksi,
            'id_barang'=> $request->id_barang,
            'transaksi_jenis'=> $request->transaksi_jenis,
            'transaksi_harga'=> $request->transaksi_harga,
            'transaksi_jumlah'=> $request->transaksi_jumlah,
            'transaksi_detail_status'=> $request->transaksi_detail_status
        ]);
        echo $simpan->id_transaksi_detail;
        return redirect('transaksi');
    }

    public function ubah($id){
        $transaksi = Transaksi::find($id);
        return view('transaksi.ubah', compact(['transaksi']));
    }

    public function update($id, request $request){
        $transaksi = Transaksi::find($id);
        $transaksi->update($request->except('_token','_method'));
        return redirect('transaksi');
    }

    public function hapus($id){
        $hapus = Transaksi::find($id);
        $hapus->delete();
        return redirect('transaksi');
    }
}
