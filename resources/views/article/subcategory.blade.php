@extends('layouts.app')
@section('body-class', 'body-index')
@section('content')

    <div class="container main-class py-5">
        <div class="row ">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-center" style="background-color: #354c5c">
                        <a class="text-white" href="{{route('cat', $articleSubcats->first()->category->slug)}}">{{$articleSubcats->first()->category->name}}</a>
                    </div>
                    <div class="card-body vertical-menu" style="background-color: #f3f3f3">
                        @foreach ($articleSubcats as $articleSubcat) 
                            <a href="{{($articleSubcat->subcategory->slug)??''}}">
                                {{$articleSubcat->subcategory->name}}
                            </a>
                        @endforeach
                    </div>
                </div>
                <br>
                <form action="{{url()->current()}}" method="get">
                    <div class="card">
                        <div class="card-body" style="background-color: #f3f3f3">
                            <div class="mb-3">
                                <label for="minPrice" class="form-label">Minimum Price</label>
                                <input type="text" class="form-control input-white" id="" name="minPrice">
                            </div>
                            <div class="mb-3">
                                <label for="maxPrice" class="form-label">Maximum Price</label>
                                <input type="text" class="form-control input-white" id="" name="maxPrice">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-style2">Filter</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @foreach ($articles as $article)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card bg-image hover-zoom ripple shadow-1-strong rounded img-style1">
                            <a href="{{route('article.display',[$article->id, $article->slug])}}">
                                <span style="color: #131b22" class="badge rounded-1 top-left">MAD {{$article->price}}</span>
                                <img src="/img/inst_ads/{{$article->image1}}"
                                    class="w-100 max-height-xxl max-height-xl max-height-lg max-height-md max-height-sm" />
                                <div class="card-footer text-center" style="background-color: #354c5c">
                                    {{$article->title}}
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="col-md-9">
                <div class="row">
                    @foreach ($articles as $article)
                        <div class="col-3">
                            <a href="{{route('article.display',[$article->id, $article->slug])}}">
                                <img src="/img/inst_ads/{{$article->image1}}" class="img-thumbnail">
                                <p class="text-center  card-footer">
                                    {{$article->title}}/${{$article->price}}
                                </p>
                            </a>
                            
                        </div>
                    @endforeach
                </div>
            </div> --}}
        </div>
    </div>

@endsection