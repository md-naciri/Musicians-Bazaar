@extends('layouts.app')
@section('body-class', 'body-index')
@section('content')

<div class="container main-class">
    <div class="row m-3">
        <div class="col-md-3 mb-3">
            @include('sidebar')
        </div>

        <div class="row col-md-9">
            <div class="col-12 mb-3">
                @include('admin-dash.include.message')
                <form action="{{route('update.user')}}" method="post" enctype="multipart/form-data">@csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header text-white" style="background-color: #354c5c">
                            Update profile
                        </div>
                        <div class="card-body" style="background-color: #f3f3f3">
                            <div class="row mb-2">
                                <label for="name" class="col-md-5 col-form-label text-md-right">
                                    Name
                                </label>
                                <div class="col-md-7">
                                    <input type="text" name="name" class="form-control input-white"
                                        value="{{auth()->user()->name}}">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="adress" class="col-md-5 col-form-label text-md-right">
                                    Adress
                                </label>
                                <div class="col-md-7">
                                    <input type="text" name="adress" class="input-white form-control"
                                        value="{{auth()->user()->adress}}">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="pic" class="col-md-5 col-form-label text-md-right">
                                    Profile picture
                                </label>
                                <div class="col-md-7">
                                    <input type="file" name="pic" class="input-white form-control">
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-style2">Update profile</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 mb-3">
                @if (session('status')==='password-updated')
                <div class="alert alert-success alert-dismissible fade show mx-auto" role="alert">
                    Password updated successfully
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="{{route('user-password.update')}}" method="post">@csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header text-white" style="background-color: #354c5c">
                            Change password
                        </div>
                        <div class="card-body" style="background-color: #f3f3f3">
                            <div class="row mb-2">
                                <label for="password" class="col-md-5 col-form-label text-md-right">
                                    Current password
                                </label>
                                <div class="col-md-7">
                                    <input type="password" name="current_password"
                                        class="form-control input-white @error('current_password') is-invalid @enderror">
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
                                    <input type="password" name="password"
                                        class="form-control input-white @error('password') is-invalid @enderror">
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
                                    <input type="password" name="password_confirmation"
                                        class="form-control input-white @error('password_confirmation') is-invalid @enderror">
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
                                <button type="submit" class="btn btn-style2">Create new password</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-header text-white" style="background-color: #354c5c">
                        Delete Account
                    </div>
                    <div class="card-body" style="background-color: #f3f3f3">
                        <div class="row mb-2">
                            <span><b>Warning:</b> By clicking this button, your account and all associated data will be
                                permanently deleted and cannot be recovered.</span>
                        </div>
                        <div class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button data-bs-toggle="modal" data-bs-target="#staticBackdropXyZ" type="submit"
                                class="btn btn-style2">Delete Account</button>
                            <!-- Delete Modal -->
                            <div class="modal fade" id="staticBackdropXyZ" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <form action="{{ route('delete.user') }}" method="post">@csrf
                                        @method('DELETE')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete
                                                    confirmation</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">Are you sure you want to delete your account? Please
                                                note that this action cannot be undone, and all of your associated data,
                                                including articles and other information, will be permanently
                                                deleted from our system. If you're sure you want to proceed, please
                                                click the "Delete Account" button below.
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn"
                                                    style="background-color: var(--bs-danger-text); color:aliceblue;">Delete Account</button>
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
    </div>
</div>
@endsection