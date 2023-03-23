@extends('layouts.app')
@section('body-class', 'body-index')
@section('content')

<div class="container main-class py-5">
    <div class="row">
        <div class="col-md-6">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner rounded">
                    <div class="carousel-item carousel-fit-image text-center active">
                        <img src="/img/inst_ads/{{$article->image1}}" alt=""
                            class="rounded max-height-xxl3 max-height-xl3 max-height-lg3 max-height-md3 max-height-sm">
                    </div>
                    @if ($article->image2)
                    <div class="carousel-item carousel-fit-image text-center">
                        <img src="/img/inst_ads/{{$article->image2}}" alt=""
                            class="rounded max-height-xxl3 max-height-xl3 max-height-lg3 max-height-md3 max-height-sm">
                    </div>
                    @endif
                    @if ($article->image3)
                    <div class="carousel-item carousel-fit-image text-center">
                        <img src="/img/inst_ads/{{$article->image3}}" alt=""
                            class="rounded max-height-xxl3 max-height-xl3 max-height-lg3 max-height-md3 max-height-sm">
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
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-white" style="background-color: #354c5c">Seller Info</div>
                        <div class="card-body" style="background-color: #f3f3f3">
                            @if (!$article->user->pic)
                            <img class="mx-auto d-block img-thumbnail" src="/img/profile/man.png" width="130">
                            @else
                            <img class="mx-auto d-block img-thumbnail" src="/img/profile/{{$article->user->pic}}"
                                width="130">
                            @endif
                            <p class="text-center">{{ $article->user->name}}</p>
                            <p class="text-center">{{ $article->phone}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-white" style="background-color: #354c5c">More Info</div>
                        <div class="card-body" style="background-color: #f3f3f3">
                            <p>Published at: {{$article->created_at->format('d M Y')}}</p>
                            <p>Product condition: {{ $article->inst_condition ?? '' }}</p>
                            <p>Country: {{ $article->country->name ?? 'Not defined' }}</p>
                            <p>State: {{ $article->state->name ?? 'Not defined' }}</p>
                            <p>City: {{ $article->city->name ?? 'Not defined' }}</p>
                            <p>Price: MAD {{ $article->price }}</p>
                        </div>
                    </div>
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
            <div class="card">
                <div class="card-body" style="background-color: #f3f3f3">
                    <p>{{ $article->text }}</p>
                </div>
            </div>
            <hr>
            <p>
                <a class="text-dark"
                    href="{{route('subcat', [$article->category->slug, $article->subcategory->slug])}}">Browse for more
                    {{$article->subcategory->name}} instruments</a>
            </p>
            <p>
                <a class="text-dark" href="{{route('cat', $article->category->slug)}}">Browse for more
                    {{$article->category->name}}</a>
            </p>
        </div>
    </div>


</div>
@endsection