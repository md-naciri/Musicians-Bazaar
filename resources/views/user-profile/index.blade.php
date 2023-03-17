@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Home
                </div>
                <div class="card-body">
                    Hello, {{auth()->user()->name}}
                </div>
            </div>
        </div>
    </div>
    <div class="row m-3">
        <div class="col-md-3">
            @include('sidebar')
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-white" style="background-color:red">
                    Update profile
                </div>
                <div class="card-body">
                    Hello, {{auth()->user()->name}}
                </div>
            </div>
        </div>
        <div class="col-md-4"> 
            @if (session('status')==='password-updated')
            <div class="alert alert-success alert-dismissible fade show mx-auto" role="alert">
                Password updated successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="{{route('user-password.update')}}" method="post">@csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header text-white" style="background-color:red">
                        Change password
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <label for="password" class="col-md-5 col-form-label text-md-right">
                                Current password
                            </label>
                            <div class="col-md-7">
                                <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror">
                            </div>
                            @error('current_password')
                            <span role="alert">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row mb-2">
                            <label for="password" class="col-md-5 col-form-label text-md-right">
                                New password
                            </label>
                            <div class="col-md-7">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                            </div>
                            @error('password')
                            <span role="alert">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row mb-2">
                            <label for="password" class="col-md-5 col-form-label text-md-right">
                                Confirm new password
                            </label>
                            <div class="col-md-7">
                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror">
                            </div>
                            @error('password_confirmation')
                            <span role="alert">
                                <strong>
                                    {{$message}}
                                </strong>
                            </span>
                            @enderror
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-danger">Create new password</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection