@extends('layouts.app')
@section('body-class', 'authback1')
@section('content')


<div class="row container mx-auto d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card bluring col-xl-5 col-lg-6 col-md-9 col-sm-10">
        <div class="text-center mt-2">
            <h4 class="mt-2">Change your password</h4>
            <div class="card-body">
                <form class="auth-label" action="{{route('password.update')}}" method="post">@csrf
                    <input type="hidden" name="token" value="{{request()->route("token")}}">
                    <div class="form-group row mb-3">
                        <label for="email" class="col-md-3 col-form-label text-md-right">
                            Email
                        </label>
                        <div class="col-md-9">
                            <input type="email" value="{{request('email')}}" name="email" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{$message}}
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
                                    {{$message}}
                                </strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label for="password_confirmation" class="col-md-3 col-form-label text-md-right">
                            Confirm password
                        </label>
                        <div class="col-md-9">
                            <input type="password" name="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror">
                            @error('password_confirmation')

                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-style1 w-100">Create new password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection