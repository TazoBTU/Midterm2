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
                <a href="{{route('adminindex')}}" class="article-link mt-2 thumbnail" style="    color: #aba8a8;">
                    HOME
                  </a>
            </li>
            @endguest
        </ul>

    </div>





                              
                             
                   

                <div class="container" style="margin-top: 10px">

                    <div class="row">
                        <div class="col-xs-12 col-md-8 order-1 layout-main-column">

                            <header class="eaf-header with-photo om-leak-xs  title-block-normal"
                                data-article-header-enabled="">

                           

                                <div class="eaf-header-content">
                           
                                    <time class="eaf-date om-date" datetime="2020-11-27T23:50:00+0400"
                                        title=""
                                        style="visibility: visible;">{{$posts->created_at}}</time>
                                    <h1 class="eaf-title"><span>კითხვა | {{$posts->description}}</span>
                                    </h1>

                                    <div class="om-text-content eaf-body">
                                        <h1 class="eaf-title"><span>პასუხი  - {{$posts->answer}} </span>
                                        </h1>


                                    </div>
                                </div>
                            </header>
                         








                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>



@endsection