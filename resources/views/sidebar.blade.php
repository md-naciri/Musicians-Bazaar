<div class="card" style="background-color: #f3f3f3">
    <div class="card-body">
        @if (!auth()->user()->pic)
        <img class="mx-auto d-block img-thumbnail" src="/img/profile/man.png" width="130">
        @else
        <img class="mx-auto d-block img-thumbnail" src="/img/profile/{{auth()->user()->pic}}" width="130">
        @endif
        <p class="text-center"><b>{{auth()->user()->name}}</b></p>
    </div>
    <hr style="border:2px solid #8b3f1e;">
    <div class="vertical-menu" >
        @if (Auth::check() && Auth::user()->role==1)
        <a class="" href="{{ route('dashboard') }}">Dashboard</a>
        @endif
        <a href="{{route('user.profile')}}" class="{{request()->is('profile')?'active':''}}">Profile</a>
        <a href="{{route('ad.create')}}" class="{{request()->is('myads/create')?'active':''}}">Create ads</a>
        {{-- <a href="{{route('getMyAds')}}" class="{{request()->is('myads')?'active':''}}">Published ads</a> --}}
        {{-- <a href="#">Pending ads</a> --}}
        {{-- <a href="#" class="">Message</a> --}}
    </div>
</div>