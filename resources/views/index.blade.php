@extends('layouts.app')
@section('content')
<div style="margin-top: -25px">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{asset('img/slides/C1.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/slides/C2.jpg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('img/slides/C3.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>

<div class="container mt-5">
    <span>
        <h1>Instruments</h1>
        <a href="#" class="float-right">View all</a>

    </span>
    <div id="carouselExampleFade" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <div class="row">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-3">
                            <img src="{{asset('img/T1.jpg')}}" class="img-thumbnail">
                            <p class="text-center  card-footer">
                                Name of product/$500
                            </p>
                        </div>
                    @endfor
                </div>
            </div>

            <div class="carousel-item">
                <div class="row mx-auto">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-3">
                            <img src="{{asset('img/T2.jpg')}}" class="img-thumbnail">
                            <p class="text-center  card-footer">
                                Name of product/$500
                            </p>
                        </div>
                    @endfor
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@endsection