@extends('layouts.app')
@section('content')

    <div class="container ">
        <div class="row ">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header text-white text-center" style="background-color: red;">Filter ::</div>
                    <div class="card-body">
                        @foreach ($articleSubcats as $articleSubcat) 
                        <p>
                            <a href="{{url()->current()}}/{{($articleSubcat->subcategory->slug)??''}}">
                                {{$articleSubcat->subcategory->name}}
                            </a>
                        </p>
                        @endforeach
                    </div>
                </div>
                <br>
                <form action="{{url()->current()}}" method="get">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="minPrice" class="form-label">Minimum Price</label>
                                <input type="text" class="form-control" id="" name="minPrice">
                            </div>
                            <div class="mb-3">
                                <label for="maxPrice" class="form-label">Maximum Price</label>
                                <input type="text" class="form-control" id="" name="maxPrice">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-danger">Filter</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @foreach ($articles as $article)
                    
                        <div class="col-3">
                            <img src="/img/inst_ads/{{$article->image1}}" class="img-thumbnail">
                            <p class="text-center  card-footer">
                                {{$article->title}}/${{$article->price}}
                            </p>
                        </div>
    
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection