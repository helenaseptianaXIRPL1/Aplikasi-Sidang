<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Pesanan;
use App\PesananDetail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function pesan()
    {
        $barangs = Barang::all();
        return view('pesan', compact('barangs'));
    }
    public function cart(Request $request)
    {
        $barang = Barang::find($request->barang_id)->first();
        $tanggal = Carbon::now();

        if($request->jumlah_pesan > $barang->stok){
            return redirect('/pesan', compact('barang'));
        }
        $cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        if(empty($cek_pesanan)){
        $pesanan = new Pesanan;
        $pesanan->user_id = Auth::user()->id;
        $pesanan->tanggal = $tanggal;
        $pesanan->status = 0;
        $pesanan->jumlah_harga = 0;
        $pesanan->kode = mt_rand(100, 999);
        $pesanan->save();
        }

        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();

        $cek_pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
        
        if(empty($cek_pesanan_detail)){
        $pesanan_detail = new PesananDetail();
        $pesanan_detail->barang_id = $barang->id;
        $pesanan_detail->pesanan_id = $pesanan_baru->id;
        $pesanan_detail->jumlah = $request->jumlah_pesan;
        $pesanan_detail->jumlah_harga = $barang->harga * $request->jumlah_pesan;
        $pesanan_detail->save();
        }else
        {
            $pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
            $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

            $harga_pesanan_detail_baru = $barang->harga*$request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
            $pesanan_detail->update();
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_pesan;
        $pesanan->update();

        return redirect('/check-out')->with('success', 'Berhasil Masuk Ke Keranjang');
    }

    public function checkout(){
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        
        $pesanan_details = [];
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();

        }
        $no = 1;
        return view('checkout', compact('pesanan' ,'no', 'pesanan_details'));
    }

    public function delete($id){
        $pesanan_detail = PesananDetail::where('id', $id)->first();

        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();

        $pesanan_detail->delete();
        return redirect('/check-out')->with('hapus', 'Berhasil di Hapus');
    }

    public function konfirmasi(){
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail) {
            $barang = Barang::where('id', $pesanan_detail->barang_id)->first();
            $barang->stok = $barang->stok-$pesanan_detail->jumlah;
            $barang->update();
        }
        return redirect('/check-out')->with('Pesanan Sukses Check Out', 'Berhasil di Hapus');
    
}
    


}