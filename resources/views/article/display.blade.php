@extends('layouts.app')
@section('content')

<div class="container ">
    <div class="row">
        <div class="col-md-6">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/inst_ads/{{$article->image1}}" alt="">
                    </div>
                    @if ($article->image2)
                    <div class="carousel-item">
                        <img src="/img/inst_ads/{{$article->image2}}" alt="">
                    </div>
                    @endif
                    @if ($article->image3)
                    <div class="carousel-item">
                        <img src="/img/inst_ads/{{$article->image3}}" alt="">
                    </div>
                    @endif
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <hr>
            <div class="card">
                <div class="card-header">
                    <h4>{{ $article->title }}</h4>
                </div>
            </div>
            <hr>
            <div class="card">
                <div class="card-body">
                    <p>{{ $article->text }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3>
                {{$article->title}}
            </h3>
            <p>
                <span>{{$article->created_at->diffForHumans()}} - </span>
                <span>MAD {{$article->price}}</span>
            </p>
            <hr>
            <div class="row">
                <div class="card col-md-6">
                    <div class="card-header">More Info</div>
                    <div class="card-body">
                        <p>Country: {{ $article->country->name ?? 'Not defined' }}</p>
                        <p>State: {{ $article->state->name ?? 'Not defined' }}</p>
                        <p>City: {{ $article->city->name ?? 'Not defined' }}</p>
                        <p>Product condition: {{ $article->inst_condition ?? '' }}</p>
                    </div>
                </div>
                <div class="card col-md-6">
                    <div class="card-header">Seller Info</div>
                    <div class="card-body">
                        @if (!$article->user->pic)
                        <img class="mx-auto d-block img-thumbnail" src="/img/profile/man.png" width="130">
                        @else
                        <img class="mx-auto d-block img-thumbnail" src="/img/profile/{{$article->user->pic}}" width="130">
                        @endif
                        <p class="text-center">{{ $article->user->name}}</p>
                    </div>
                </div>
            </div>

              
        </div>
    </div>


</div>
@endsection