@extends('layouts.app')

@section('content')
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                       
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{ url('/home') }}" class="btn btn-success">
                                        <i class="fa fa-arrow-left"></i>Kembali
                                    </a>
                                    <br>
                                    <br>
                                    <br>
                                    <h1><i class="fa fa-user"></i> My Profile</h1>

                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td>{{ $user->name }}</td
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td>{{ $user->email }}</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>No.HP</td>
                                                <td>:</td>
                                                <td>{{ $user->no_hp }}</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>:</td>
                                                <td>{{ $user->alamat }}</td>
                                                
                                            </tr>
                                            <tr>
                                                
                                                <td colspan="4" align="left">
                                                    <a href="{{ url('edit-profile') }}" class="btn btn-success">
                                                        <i class="fa fa-edit"></i> Edit Profile</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                   
                                
                                
                        

                    </div>
                </div>
            </div>
        </div>
                       
@endsection

