@extends('admin-dash.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    @include('admin-dash.include.message')
    <h4>Manage articles</h4>
    <div class="row justify-content-center">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Price</th>
                    <th scope="col">Published</th>
                    <th scope="col">View</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($articles as $article)
                  <tr>
                    <td>
                      <img src="/img/inst_ads/{{$article->image1}}" style="width: 100px" alt="">
                    </td>
                    <td>{{$article->title}}</td>
                    <td>
                      <a target="_blank" href="{{route('user.articles',$article->user_id)}}">{{$article->user->name}}</a>
                    </td>
                    <td>MAD {{$article->price}}</td>
                    <td>
                      <div>{{$article->created_at->format('d-m-Y')}}</div>
                      <div>{{$article->created_at->diffForHumans()}}</div>
                    </td>
                    <td>
                      <a href="{{route('article.display',[$article->id, $article->slug])}}">
                        <button class="btn btn-info">View</button>
                      </a>
                    </td>
                    <td>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal{{$article->id}}">
                        <i class="mdi mdi-delete"></i>
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal{{$article->id}}" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <form action="{{route('ad.destroy', $article->id)}}" method="post">@csrf
                            @method('DELETE')
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete confirmation</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                You will permanently delete this article
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
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
      {{$articles->links()}}
    </div>
    @endsection