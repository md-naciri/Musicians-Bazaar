@extends('layouts.app')
@section('body-class', 'authback')
@section('content')

{{-- <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card"> --}}
                <div class="row container mx-auto d-flex align-items-center justify-content-center" style="height: 100vh;">
                    <div class="card bluring col-lg-6 col-md-9 col-sm-10">
                <div class="text-center mt-2">
                <div class="text-center text-white mt-2"><h4>Register</h4></div>
                <div class="card-body">
                    <form class="auth-label" action="{{route('register')}}" method="post">@csrf
                        <div class="form-group row mb-2">
                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                Name
                            </label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{$message}}
                                    </strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                Email
                            </label>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{$message}}
                                    </strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                                Password
                            </label>
                            <div class="col-md-6">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>
                                        {{$message}}
                                    </strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">
                                Confirm password
                            </label>
                            <div class="col-md-6">
                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                                @error('password_confirmation')
                                
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="">
                                <button type="submit" class="btn btn-style1">Register</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            {{-- </div>
        </div> --}}
    </div>
</div>
@endsection

