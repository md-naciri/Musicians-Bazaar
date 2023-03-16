@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                @include('sidebar')
            </div>
            <div class="col-md-9">
                @include('admin-dash.include.message')
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
                            <td>
                                <img src="/img/inst_ads/{{$inst->image1}}" style="width: 100px" alt="">
                                {{-- @if ($inst->image2) --}}
                                <img src="/img/inst_ads/{{$inst->image2}}" style="width: 100px" alt="">
                                {{-- @endif --}}
                                {{-- @if ($inst->image3) --}}
                                <img src="/img/inst_ads/{{$inst->image3}}" style="width: 100px" alt="">
                                {{-- @endif --}}
                            </td>
                            <td>{{$inst->title}}</td>
                            <td>MAD {{$inst->price}}</td>
                            <td><a href="{{route('ad.edit', $inst->id)}}"><button class="btn btn-info">Edit</button></a></td>
                            <td><button class="btn btn-danger">View</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection