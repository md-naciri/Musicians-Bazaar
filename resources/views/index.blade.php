@extends('layouts.app')
@section('body-class', 'body-index')
@section('content')


<div class="section-2">
    <div class="container main-class">
        <div class="row align-items-center mx-3">
            <div class="col-md-6">
                <h2 class="" style="color: #354c5c;">Welcome to Musicians Bazaar</h2>
                <p class="text-dark fs-5">The hub of all things musical, where buying and selling instruments is a
                    symphony of simplicity.</p>
                {{-- <p class="text-dark">Open Your online store and get rich by selling dildo </p> --}}
                <a href="#section-3" class="btn w-50 btn-style2 mt-3 shadow rounded-3">Latest listings</a>
            </div>
            <div class="col-md-6 d-md-block d-none text-end">
                <img src="{{asset('img/static/sec1pic2.png')}}" alt="" class="img-fluid my-3">
            </div>
        </div>
    </div>
</div>

{{-- <div class="section-2" id="contactus" style="background-color: #A9A9A9">
    <div class="container my-5">
        <div class="row align-items-center mx-3">
            <div class="col-6">
                <h1 style="color:#476072;">CONTACT US</h1>
                <div class="container-fluid contactusform">
                    <!-- contact us form -->
                    <div class="md-form mb-0">
                        <label for="name" class="" style="color:#476072;">Your name</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="md-form mb-0">
                        <label for="name" class="" style="color:#476072;">Your email</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div>
                        <label for="name" class="" style="color:#476072;">Your message</label>
                        <textarea name="" id="" rows="5" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-4">
                <img src="{{asset('img/static/—Pngtree—hotline service contact us_5413350.png')}}" alt="" srcset=""
                    class="img-fluid">
            </div>
        </div>
    </div>
</div> --}}

<div class="section-1">
    <div class="container mt-5">
        <h4 class="text-center mb-2"><strong style="color: #476072;">Find your sound</strong></h4>
        <!-- search bar for product -->
        <div class="input-group md-form form-sm form-2 mb-3">
            <input class="form-control my-0 py-1 red-border bg-white" type="text" placeholder="Search"
                aria-label="Search">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-text1"><i class="bi bi-search text-dark"></i></span>
            </div>
        </div>
    </div>
</div>


<div id="section-3" class="section-3 container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <p class="fs-5" style="color: #354c5c">The latest listings in {{$category1->name}}</p>
        <a href="{{route('cat', $category1)}}" class="fs-5" style="color: #8b3f1e">View all</a>
    </div>
    <div class="row">
        @foreach ($articles1Slide1 as $key => $item)
        @if ($key == 0)
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card bg-image hover-zoom ripple shadow-1-strong rounded img-style1">
                <a href="{{route('article.display',[$item->id, $item->slug])}}">
                    <span style="color: #131b22" class="badge rounded-1 top-left">MAD {{$item->price}}</span>
                    <img src="/img/inst_ads/{{$item->image1}}"
                        class="w-100 max-height-xxl2 max-height-xl2 max-height-lg2 max-height-md21 max-height-sm" />
                    <div class="card-footer text-center" style="background-color: #354c5c">
                        {{$item->title}}
                    </div>
                </a>
            </div>
        </div>
        @else
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card bg-image hover-zoom ripple shadow-1-strong rounded img-style1">
                <a href="{{route('article.display',[$item->id, $item->slug])}}">
                    <span style="color: #131b22" class="badge rounded-1 top-left">MAD {{$item->price}}</span>
                    <img src="/img/inst_ads/{{$item->image1}}"
                        class="w-100 max-height-xxl2 max-height-xl2 max-height-lg2 max-height-md22 max-height-sm" />
                    <div class="card-footer text-center" style="background-color: #354c5c">
                        {{$item->title}}
                    </div>
                </a>
            </div>
        </div>
        @endif
        @endforeach
    </div>

    <div class="row">
        @foreach ($articles1Slide2 as $item)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card bg-image hover-zoom ripple shadow-1-strong rounded img-style1">
                <a href="{{route('article.display',[$item->id, $item->slug])}}">
                    <span style="color: #131b22" class="badge rounded-1 top-left">MAD {{$item->price}}</span>
                    <img src="/img/inst_ads/{{$item->image1}}"
                        class="w-100 max-height-xxl max-height-xl max-height-lg max-height-md max-height-sm" />
                    <div class="card-footer text-center" style="background-color: #354c5c">
                        {{$item->title}}
                    </div>
                </a>
            </div>
        </div>
        @endforeach

        {{-- <div class="col-lg-3 col-md-6 mb-4">
            <div class="bg-image hover-zoom ripple shadow-1-strong rounded img-style1">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(3).webp" class="w-100" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3);">
                        <div class="d-flex justify-content-start align-items-start h-100 photo">
                            <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">$147</span></h5>
                        </div>
                    </div>
                    <div class="hover-overlay">
                        <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                    </div>
                </a>
            </div>
        </div> --}}
    </div>
</div>


<div class="section-4 container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <p class="fs-5" style="color: #354c5c">The latest listings in {{$category2->name}}</p>
        <a href="{{route('cat', $category2)}}" class="fs-5" style="color: #8b3f1e">View all</a>
    </div>

    <div class="row">
        @foreach ($articles2Slide1 as $item)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card bg-image hover-zoom ripple shadow-1-strong rounded img-style1">
                <a href="{{route('article.display',[$item->id, $item->slug])}}">
                    <span style="color: #131b22" class="badge rounded-1 top-left">MAD {{$item->price}}</span>
                    <img src="/img/inst_ads/{{$item->image1}}"
                        class="w-100 max-height-xxl max-height-xl max-height-lg max-height-md max-height-sm" />
                    <div class="card-footer text-center" style="background-color: #354c5c">
                        {{$item->title}}
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="section-5 container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <p class="fs-5" style="color: #354c5c">The latest listings in {{$category3->name}}</p>
        <a href="{{route('cat', $category3)}}" class="fs-5" style="color: #8b3f1e">View all</a>
    </div>

    <div class="row">
        @foreach ($articles3Slide1 as $key => $item)
        @if ($key == 0)
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card bg-image hover-zoom ripple shadow-1-strong rounded img-style1">
                <a href="{{route('article.display',[$item->id, $item->slug])}}">
                    <span style="color: #131b22" class="badge rounded-1 top-left">MAD {{$item->price}}</span>
                    <img src="/img/inst_ads/{{$item->image1}}"
                        class="w-100 max-height-xxl2 max-height-xl2 max-height-lg2 max-height-md21 max-height-sm" />
                    <div class="card-footer text-center" style="background-color: #354c5c">
                        {{$item->title}}
                    </div>
                </a>
            </div>
        </div>
        @else
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card bg-image hover-zoom ripple shadow-1-strong rounded img-style1">
                <a href="{{route('article.display',[$item->id, $item->slug])}}">
                    <span style="color: #131b22" class="badge rounded-1 top-left">MAD {{$item->price}}</span>
                    <img src="/img/inst_ads/{{$item->image1}}"
                        class="w-100 max-height-xxl2 max-height-xl2 max-height-lg2 max-height-md22 max-height-sm" />
                    <div class="card-footer text-center" style="background-color: #354c5c">
                        {{$item->title}}
                    </div>
                </a>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>

<div class="section-6 p-4" id="contact-us" style="background-color: #354c5c">
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 style="color:#476072;">CONTACT US</h2>
                {{-- <div class="container-fluid"> --}}
                    <!-- contact us form -->
                    <div class="md-form my-2">
                        <label for="name" class="" style="color:#476072;">Name</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="md-form my-2">
                        <label for="name" class="" style="color:#476072;">Email</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="my-2">
                        <label for="name" class="" style="color:#476072;">Message</label>
                        <textarea name="" id="" rows="" class="form-control"></textarea>
                    </div>
                    <div class="mt-3 text-center">
                        <button type="submit" class="btn btn-style2-reversed w-50 ">Submit</button>
                    </div>
                    {{--
                </div> --}}
            </div>
            <div class="col-lg-4 d-lg-block d-none text-end">
                <img src="{{asset('img/static/1074992_105381-OMRNIN-148.png')}}" alt="" srcset="" class="img-fluid">
            </div>
        </div>
    </div>
</div>

{{-- <div style="">
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
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div> --}}

@endsection