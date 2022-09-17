@extends('layouts.app')

@section('content')
          <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <a href="{{ url('/home') }}" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="col-md-12 mt-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/pesan') }}">Detail Produk</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
                    <div class="card">
                       
                       
                        <div class="card-body">
                            <div class="row">
                               
                                
                           
                    @if (Session::has('hapus'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('hapus')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                            
                              
                        
                        <div class="col-md-12">
                                <div class="card">
                            
                                    <div class="card-body">
                                <h1><i class="fa fa-cart-plus"></i> Check Out</h1>
                                @if(!empty($pesanan))
                                    
                                
                                <p align='right'>Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Total Harga</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pesanan_details as $pesanan_detail)
                                        <tr>
                                            <td>{{ $no++}}</td>
                                            <td>{{ $pesanan_detail->barang->nama_barang }}</td>
                                            <td>{{ $pesanan_detail->jumlah }}</td>
                                            <td align="left">Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
                                            <td align="left">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                            <td>
                                                <form action="{{ url('check-out') }}/{{ $pesanan_detail->id }}" method="POST">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger btn-sm "
                                                    onclick="return confirm('Anda yakin akan mengapus pesanan ?');"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="right"><strong> Pembayaran :</strong></td>
                                            <td><strong>Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</strong></td>
                                            
                                            <td>
                                                <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success"
                                                onclick="return confirm('Anda yakin akan check out ?');"><i class="fa fa-shopping-cart"></i> Check Out</a>
                                                </td>
                                            </tr>
                                        
                                        @endforeach

                                       
                                      

                                        
                                    </tbody>
                                </table>
                                @endif
                            </div>
                        </div>
                    </div>
                                
                                
                </div>
            </div>

                    </div>
                </div>
            </div>
        </div>
                       
@endsection