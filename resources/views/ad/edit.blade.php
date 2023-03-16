@extends('layouts.app')
@section('content')


    <div class="container">
        <h2> Hna chi title </h2>
        <div class="row ">
            <div class="col-md-3">
                @include('sidebar')
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

                <form action="{{route('ad.update', $inst->id)}}" method="post" enctype="multipart/form-data">@csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header text-white" style="background-color: red">
                            Edit your ad.
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
                            <select-category></select-category>


                            <div class="mt-3">
                                <label for="title"><b>Title</b> (Include instrument/accessory name in ad title)</label>
                                <input type="text" name="title" class="form-control" value="{{$inst->title}}">
                            </div>
                            <div class=" mt-3">
                                <label for="text"><b>Description</b></label>
                                <textarea name="text" class="form-control" value="{{$inst->text}}"></textarea>
                            </div>
                            <div class=" mt-3">
                                <label for="price"><b>Price</b></label>
                                <input type="text" name="price" class="form-control" value="{{$inst->price}}">
                            </div>
                            <div class=" mt-3">
                                <label for="inst_condition"><b>Instrument/accessory condition</b></label>
                                <select class="form-control" name="inst_condition">
                                    <option value="">Select </option>
                                    <option value="New" {{$inst->inst_condition == "New" ? 'selected' : ''}}>New</option>
                                    <option value="Like_New" {{$inst->inst_condition == "Like_New" ? 'selected' : ''}}>Like New</option>
                                    <option value="Good" {{$inst->inst_condition == "Good" ? 'selected' : ''}}>Used - Good</option>
                                    <option value="Fair" {{$inst->inst_condition == "Fair" ? 'selected' : ''}}>Used - Fair</option>
                                    <option value="Poor" {{$inst->inst_condition == "Poor" ? 'selected' : ''}}>Used - Poor</option>
                                </select>
                            </div>
                            <div class=" mt-3">
                                <label for="adress"><b>Adress</b></label>
                                <input type="text" class="form-control" name="adress" value="{{$inst->adress}}">
                            </div>
                            <label for="file" class="mt-3"><b>Select Country, State, and City</b></label>
                            <select-location></select-location>

                            <div class=" mt-3">
                                <label for="phone"><b>Contact phone</b></label>
                                <input type="tel" class="form-control" name="phone" value="{{$inst->phone}}">
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
