@extends('layouts.app')

@section('content')

<div class="flex-center position-ref full-height" style="    font-family: sans-serif;">
    <div class="col-auto" style="background: rgb(224, 224, 224)">


        <ul class="navbar-nav ml-auto d-flex" style="    display: -webkit-inline-box !important;">


            @guest
            <li class="nav-item" style="    margin-right: 20px;">
                <a class="nav-link" href="{{ route('login') }}">{{ __('შესვლა') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('რეგისტრაცია') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>

    </div>
    <h1 style="    text-align: center;">კითხვები</h1>
    <div class="context-groups-home_featured_right col-sm-7" style="max-width:70%;margin:0 auto;margin-top: 40px">
        <h1>კითხვების რაოდენობა - {{count($posts)}} </h1>

        <div >
        
        @foreach ($posts as $data)
      

        <div class="featured-article-block">
        <h1>კითხვა-{{++$loop->index}}</h1>
                <a href="{{route('adminshow',["id"=>$data->id])}}">
                    <img src="{{asset("storage/$data->image")}}" width="303" height="195" alt="" alt="">


                </a>
                <div class="at-cover" style="   
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;    max-width: 300px;">

                    <a class="e-topic-boxed-link" href="{{route('adminshow',["id"=>$data->id])}}">სათაური - {{$data->title}}</a>

                </div>
          
            <a href="{{route('adminshow',["id"=>$data->id])}}" class="article-link mt-2" style="   
                    overflow: hidden;
                    display: -webkit-box;
                    -webkit-line-clamp: 1;
                    -webkit-box-orient: vertical;    max-width: 300px;">
              აღწერა -   {{$data->description}}
            </a>

        </div>
        

        @endforeach

        </div>
    </div>
</div>
<script>
    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/toggle.js"></script>
@endsection