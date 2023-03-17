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
            @if (session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
            @endif
            @if (session('sucsess'))
            <div class="alert alert-success">
                {{session('sucsess')}}
            </div>
            @endif
            <form action="{{route('')}}" method="post">@csrf
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
                                <input type="password" name="current_password" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="password" class="col-md-5 col-form-label text-md-right">
                                New password
                            </label>
                            <div class="col-md-7">
                                <input type="password" name="new_password" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <label for="password" class="col-md-5 col-form-label text-md-right">
                                Confirm new password
                            </label>
                            <div class="col-md-7">
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
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