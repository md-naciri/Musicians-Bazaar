@extends('layouts.app')
@section('body-class', 'body-index')
@section('content')

<div class="container main-class py-5">
    <div class="row ">
        <div class="col-md-3">
            @include('sidebar')
        </div>
        <div class="col-md-9">
            @include('admin-dash.include.message')
            <table class="table table-bordered rounded overflow-hidden" style="background-color: #f3f3f3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Edit</th>
                        <th scope="col">View</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($myInstruments as $key => $inst)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>

                            <div id="carouselExample{{$inst->id}}" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="/img/inst_ads/{{$inst->image1}}" style="width: 100px" alt="">
                                    </div>
                                    @if ($inst->image2)
                                    <div class="carousel-item">
                                        <img src="/img/inst_ads/{{$inst->image2}}" style="width: 100px" alt="">
                                    </div>
                                    @endif
                                    @if ($inst->image3)
                                    <div class="carousel-item">
                                        <img src="/img/inst_ads/{{$inst->image3}}" style="width: 100px" alt="">
                                    </div>
                                    @endif
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExample{{$inst->id}}" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExample{{$inst->id}}" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>


                            {{-- <img src="/img/inst_ads/{{$inst->image1}}" style="width: 100px" alt=""> --}}
                            {{-- @if ($inst->image2) --}}
                            {{-- <img src="/img/inst_ads/{{$inst->image2}}" style="width: 100px" alt=""> --}}
                            {{-- @endif --}}
                            {{-- @if ($inst->image3) --}}
                            {{-- <img src="/img/inst_ads/{{$inst->image3}}" style="width: 100px" alt=""> --}}
                            {{-- @endif --}}
                        </td>
                        <td>{{$inst->title}}</td>
                        <td>MAD {{$inst->price}}</td>
                        <td><a href="{{route('ad.edit', $inst->id)}}"><button class="btn btn-style3"
                                    >Edit</button></a>
                        </td>
                        <td>
                            <a href="{{route('article.display',[$inst->id, $inst->slug])}}">
                                <button class="btn btn-style4">View</button>
                            </a>
                        </td>
                        <td><button class="btn btn-style5"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$inst->id}}">Delete</button>
                            <!-- Delete Modal -->
                            <div class="modal fade" id="staticBackdrop{{$inst->id}}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <form action="{{route('ad.destroy', $inst->id)}}" method="post">@csrf
                                        @method('DELETE')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete
                                                    confirmation</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">You will permanently delete this advertisement</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn"
                                                    style="background-color: var(--bs-danger-text); color:aliceblue;">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection