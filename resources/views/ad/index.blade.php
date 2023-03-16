@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                @include('sidebar')
            </div>
            <div class="col-md-9">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Edit</th>
                        <th scope="col">View</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($myInstruments as $key => $inst)
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td><img src="/img/inst_ads/{{$inst->image1}}" style="width: 100px" alt=""></td>
                            <td>{{$inst->title}}</td>
                            <td>MAD {{$inst->price}}</td>
                            <td><button class="btn btn-info">Edit</button></td>
                            <td><button class="btn btn-danger">View</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
    </div>

@endsection