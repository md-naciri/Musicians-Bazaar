@extends('layouts.app')
@section('content')


    <div class="container">
        <h2> Hna chi title </h2>
        <div class="row ">
            <div class="col-md-3">
                <div class="card ">

                    <div class="card-body ">
                        <img class="mx-auto d-block img-thumbnail" src="/img/man.jpg" width="130">
                        <p class="text-center"><b>Med NACIRI</b></p>
                    </div>
                    <hr style="border:2px solid blue;">
                    <div class="vertical-menu">
                        <a href="#">Dashboard</a>
                        <a href="#">Profile</a>
                        <a href="#">Create ads</a>
                        <a href="#">Published ads</a>
                        <a href="#">Pending ads</a>
                        <a href="#" class="">Message</a>
                    </div>

                </div>
            </div>
            <div class="col-md-9">

                @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show mx-auto w-75" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}. </li>
                        @endforeach
                    </div>
                @endif

                <form action="{{route('ad.store')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="card">
                        <div class="card-header text-white" style="background-color: red">
                            Post your ad.
                        </div>
                        <div class="card-body">
                            <label for="file" class="mt-2"><b>Please upload at least one image for your instrument or accessory</b></label>
                            <div class="row">
                                <div class="col-md-4">
                                    <show-image1></show-image1>
                                </div>
                                <div class="col-md-4">
                                    <show-image2></show-image2>
                                </div>
                                <div class="col-md-4">
                                    <show-image3></show-image3>
                                </div>
                            </div>

                            <label for="file" class="mt-3"><b>Select a category and subcategory</b></label>
                            {{-- <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" name="category_id">
                                        <option value="">Select a category</option>
                                        @foreach (App\Models\Category::all() as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" name="subcategory_id">
                                        <option value="">Select a subcategory</option>
                                        @foreach (App\Models\Subcategory::all() as $subcategory)
                                        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <select-category></select-category>


                            <div class="mt-3">
                                <label for="title"><b>Title</b> (Include instrument/accessory name in ad title)</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class=" mt-3">
                                <label for="text"><b>Description</b></label>
                                <textarea name="text" class="form-control"></textarea>
                            </div>
                            <div class=" mt-3">
                                <label for="price"><b>Price</b></label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class=" mt-3">
                                <label for="inst_condition"><b>Instrument/accessory condition</b></label>
                                <select class="form-control" name="inst_condition">
                                    <option value="">Select </option>
                                    <option value="New">New</option>
                                    <option value="Like_New">Like New</option>
                                    <option value="Good">Used - Good</option>
                                    <option value="Fair">Used - Fair</option>
                                    <option value="Poor">Used - Poor</option>
                                </select>
                            </div>
                            <div class=" mt-3">
                                <label for="adress"><b>Adress</b></label>
                                <input type="text" class="form-control" name="adress">
                            </div>
                            <label for="file" class="mt-3"><b>Select Country, State, and City</b></label>
                            {{-- <div class="row mt-2">
                                <div class="col-md-4">
                                    <select class="form-control" name="country_id">
                                        <option value="">Select country</option>
                                        @foreach (App\Models\Country::all() as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="state_id">
                                        <option value="">Select state</option>
                                        @foreach (App\Models\State::all() as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control" name="city_id">
                                        <option value="">Select city</option>
                                        @foreach (App\Models\City::all() as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <select-location></select-location>

                            <div class=" mt-3">
                                <label for="phone"><b>Contact phone</b></label>
                                <input type="tel" class="form-control" name="phone">
                            </div>
                            <div class=" mt-3">
                                <button class="btn btn-danger float-right" type="submit">Publish</button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
