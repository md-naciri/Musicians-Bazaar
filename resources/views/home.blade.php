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
            <div>
                <testing></testing>
            </div>
        </div>
    </div>
</div>
@endsection