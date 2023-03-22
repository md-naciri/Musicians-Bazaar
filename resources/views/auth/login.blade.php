@extends('layouts.app')
@section('body-class', 'authback')
@section('content')

{{-- <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card bluring"> --}}
                <div class="row container mx-auto d-flex align-items-center justify-content-center"
                    style="height: 100vh;">
                    <div class="card bluring col-xl-5 col-lg-6 col-md-9 col-sm-10">
                        <div class="text-center mt-2">
                            <h4 class="mt-2">Login</h4>
                            @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show mx-auto w-75" role="alert">
                                {{session('status')}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <form action="" method="post">@csrf
                                <div class="form-group row mb-3">
                                    <label for="email" class="col-md-3 col-form-label text-md-right">
                                        Email
                                    </label>
                                    <div class="col-md-9">
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="password" class="col-md-3 col-form-label text-md-right">
                                        Password
                                    </label>
                                    <div class="col-md-9">
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-9 offset-md-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="label">Remember me</label>
                                            <p><a style="color: #354c5c" href="{{route('password.request')}}">Forgot your
                                                    password?</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-9 offset-md-3">
                                        <button type="submit" class="btn btn-style1 w-100">Login</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        {{--
                    </div>
                </div> --}}
            </div>
        </div>
        @endsection