@extends('admin-dash.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">


            <h3>Add a subcategory</h3>
            <div class="row justify-content-center">
                <div class="col-md-10">

                    <div class="card">
                        <div class="card-body">



                            <form class="forms-sample" action="{{route('subcategory.update',[$subcategory->id])}}" method="post">@csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Subcategory name</label>
                                    <input type="text" value="{{$subcategory->name}}" name="name" class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Choose the supercategory</label>
                                    {{-- <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="name of category"> --}}
                                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                        <option value="">Select</option>
                                        @foreach (App\Models\Category::All() as $category)                                                                               
                                            <option value="{{$category->id}}" {{$category->id == $subcategory->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>

                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
