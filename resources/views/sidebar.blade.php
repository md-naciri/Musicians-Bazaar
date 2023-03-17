<div class="card ">
    <div class="card-body ">
        @if (!auth()->user()->pic)
        <img class="mx-auto d-block img-thumbnail" src="/img/profile/man.png" width="130">
        @else
        <img class="mx-auto d-block img-thumbnail" src="/img/profile/{{auth()->user()->pic}}" width="130">
        @endif
        <p class="text-center"><b>{{auth()->user()->name}}</b></p>
    </div>
    <hr style="border:2px solid blue;">
    <div class="vertical-menu">
        <a href="#">Dashboard</a>
        <a href="{{route('user.profile')}}" class="{{request()->is('profile')?'active':''}}">Profile</a>
        <a href="{{route('ad.create')}}" class="{{request()->is('myads/create')?'active':''}}">Create ads</a>
        <a href="{{route('getMyAds')}}" class="{{request()->is('myads')?'active':''}}">Published ads</a>
        <a href="#">Pending ads</a>
        <a href="#" class="">Message</a>
    </div>
</div>