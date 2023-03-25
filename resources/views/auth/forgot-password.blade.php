@extends('layouts.app')
@section('body-class', 'authback')
@section('content')

{{-- <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="text-center mt-2">
                    <h6>Enter your email</h6>
                    @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show mx-auto w-75" role="alert">
                        {{session('status')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
                <div class="card-body">
                    <form action="{{route('password.request')}}" method="post">@csrf

                        <div class="form-group row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                Email
                            </label>
                            <div class="col-md-6">
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
                        <div class="form-group row mb-0">

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">Link</button>

                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}






<div class="row container mx-auto d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card bluring col-xl-5 col-lg-6 col-md-9 col-sm-10">
        <div class="text-center mt-2">
            <h4 class="mt-2">Enter your email</h4>
            @if(session('status'))
            <div class="alert alert-success alert-dismissible fade show mx-auto w-75" role="alert">
                {{session('status')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div class="card-body">
            <form action="{{route('password.request')}}" method="post">@csrf
                <div class="form-group row mb-3">
                    <label for="email" class="col-md-3 col-form-label text-md-right">
                        Email
                    </label>
                    <div class="col-md-9">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
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
                        <button type="submit" class="btn btn-style1 w-100">Send Reset Link</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection