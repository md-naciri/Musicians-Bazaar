@extends('admin-dash.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            @include('admin-dash.include.message')
            <h4>Manage Category</h4>
            <div class="row justify-content-center">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <td><img src="/img/category/{{$category->image}}" alt="" width="100px"></td>
                                            <td>{{$category->name}}</td>
                                            <td><a href="{{route('category.edit', $category->id)}}"><button class="btn btn-info"><i class="mdi mdi-table-edit"></i></button></a></td>
                                            
                                                <td>

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$category->id}}">
    <i class="mdi mdi-delete"></i>
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{$category->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('category.destroy', $category->id)}}" method="post">@csrf
            @method('DELETE')
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Delete confirmation</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            You will permanently delete this category
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="sublit" class="btn btn-danger">Delete</button>
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
                </div>
            </div>
@endsection
