@extends('admin-dash.layouts.master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    @include('admin-dash.include.message')
    <h4>Delete a User</h4>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Users</div>

                <div class="card-body">
                    {{-- <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <form action="{{ route('admin.user.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table> --}}
                    
                    <table id="users-table" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    
                    <script>
                        $(function() {
                            $('#users-table').dataTable({
                                processing: true,
                                serverSide: true,
                                ajax: '{{ route("admin.users.data") }}',
                                columns: [
                                    {data: 'id', name: 'id'},
                                    {data: 'name', name: 'name'},
                                    {data: 'email', name: 'email'},
                                    {data: 'created_at', name: 'created_at'},
                                    {data: 'actions', name: 'actions', orderable: false, searchable: false},
                                ],
                                lengthMenu: [5, 25, 50, 100] // set the number of rows per page
                            });
                        });
                    </script>
                    
                </div>
            </div>
        </div>
    </div>
    @endsection
    