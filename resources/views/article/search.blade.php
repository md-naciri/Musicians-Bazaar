@extends('layouts.app')
@section('body-class', 'body-index')
@section('content')

<div class="container main-class py-5">
    <div class="row">
        <div class="col-md-3 mb-4">
            {{-- <div class="card">
                <div class="card-header text-white text-center" style="background-color: #354c5c">
                    {{$articleSubcats->first()->category->name}}
                </div>
                <div class="card-body vertical-menu" style="background-color: #f3f3f3">
                    @foreach ($articleSubcats as $articleSubcat)
                    <a href="{{url()->current()}}/{{($articleSubcat->subcategory->slug)??''}}">
                        {{$articleSubcat->subcategory->name}}
                    </a>
                    @endforeach
                </div>
            </div>
            <br> --}}
            <form action="{{url()->current()}}" method="get">
                <div class="card">
                    <div class="card-body" style="background-color: #f3f3f3">
                        <input type="hidden" name="search" value="{{ request('search') }}">
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

        {{-- <div class="col-md-9">
            <div class="row">
                @foreach ($searchArticle as $article)
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
        </div> --}}

        <div class="col-md-9">
            @foreach ($searchArticle as $article)
            <div class="card bg-image hover-zoom ripple shadow-1-strong rounded img-style1 mb-3"
                style="background-color: #f3f3f3">
                <div class="row">
                    <div class="col-md-3" style="padding-right: 0;">
                        @if ($article->article_status === 0)
                        <span style="color: #ffffff" class="badge rounded-1 top-right">Promoted</span>
                        @endif
                        <span style="color: #131b22" class="badge rounded-1 top-left">MAD {{$article->price}}</span>
                        <img src="/img/inst_ads/{{$article->image1}}"
                            class="w-100 max-height-xxl max-height-xl max-height-lg max-height-md max-height-sm" />
                    </div>
                    <div class="col-md-9" style="padding-left: 0;">
                        <a href="{{route('article.display',[$article->id, $article->slug])}}">
                            <div class="card-header text-start"
                                style="border-top-left-radius: 0; background-color: #354c5c;">
                                {{$article->title}}
                            </div>
                        </a>
                        <p class="text-start m-2">
                            <b>Instrument: </b>{{ $article->subcategory->name }} - <b>Price: </b>{{ $article->price }}
                            DH
                            <br>
                            <b>Description: </b>
                            @if(strlen($article->text) > 120)
                            {{ substr($article->text, 0, 120) . '...' }}
                            @else
                            {{ $article->text }}
                            @endif
                        </p>

                    </div>
                </div>
            </div>
            @endforeach
            <div class="test">
                {{ $searchArticle->appends(request()->input())->links() }}
            </div>
        </div>
    </div>
</div>

@endsection