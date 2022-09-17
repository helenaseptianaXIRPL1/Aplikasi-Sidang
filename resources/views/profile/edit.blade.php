@extends('layouts.app')

@section('content')
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                       
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{ url('/profil') }}" class="btn btn-success">
                                        <i class="fa fa-arrow-left"></i>Kembali
                                    </a>
                                    <br>
                                    <br>
                                    <br>
                                    <h1><i class="fa fa-edit"></i> Edit Profile</h1>
                                    <form method="POST" action="{{ url('/profil') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="nohp" class="col-md-2 col-form-label text-md-right">No. HP</label>
                
                                            <div class="col-md-6">
                                                <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ $user->no_hp }}" required autocomplete="no_hp" autofocus>
                
                                                @error('no_hp')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="alamat" class="col-md-2 col-form-label text-md-right">Alamat</label>
                
                                            <div class="col-md-6">
                                                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" required="">{{ $user->alamat }}</textarea>
                
                                                @error('alamat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                
                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                                            </div>
                                        </div>
                
                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-2">
                                                <button type="submit" class="btn btn-success">
                                                   <i class="fa fa-check-square"></i> Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                   
                                
                                
                        

                    </div>
                </div>
            </div>
        </div>
                       
@endsection

