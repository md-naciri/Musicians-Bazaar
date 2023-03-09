@if(Session::has('message'))
<div class="alert alert-success alert-dismissible fade show mx-auto w-75" role="alert">
    {{Session::get('message')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif