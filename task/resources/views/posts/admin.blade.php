<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechNews - HTML and CSS Template</title>

    <!-- favicon -->
    <link href="{{asset('assets/img/favicon.png')}}" rel=icon>

    <!-- web-fonts -->
    <link href='{{asset('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500')}}' rel='stylesheet'
        type='text/css'>

    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- font-awesome -->
    <link href="{{asset('assets/fonts/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="{{asset('assets/css/mobile-menu.css')}}" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <!-- Theme Style -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    {{-- @yield('seo') --}}

</head>

<body>
    <div class="container">
        <div style="display: flex;    justify-content: space-between;">


            <p class="h1">Dashboard: questions</p>
            <p class="h3">
    
                <a href="{{route('adminindex')}}" class="article-link mt-2 thumbnail" style="    color: #aba8a8;">
                  HOME
                </a>
            </p>
        </div>
        <hr />


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">სურათი</th>
                    <th scope="col">სურათი</th>
                    <th scope="col">აღწერა</th>
                    <th scope="col">პასუხი</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $data)
                <tr>
                    <th scope="row">{{++$loop->index}}</th>
                    <td style="    line-height: 200px;"> 
                        <a href="">
                            <img src="{{asset("storage/$data->image")}}" width="303" height="195" alt="" alt="">


                        </a></td>
                    <td >
                        <a class="e-topic-boxed-link"
                            href="">{{$data->title}}</a></td>
                    <td > <a href="" class="article-link mt-2">
                            {{$data->description}}
                        </a>
                    </td>
                    <td > <a href="" class="article-link mt-2">
                            {{$data->answer}}
                        </a>
                    </td>
                    <td >
                    <div class="media_social" style="display: flex;margin-bottom:10px">
                       
                        <form action="{{ route('admindelete') }}" method="POST" style="line-height: 200px;" >
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <button class="btn btn-danger" >delete</button>
                        </form>
                        <div  style="line-height: 200px;    padding-top: 3px;" >

                            <a  href="{{route('adminedit',["id"=>$data->id])}}" class="btn btn-warning"
                                style="margin-top: -5px;margin-left:5px">edit</a>
                        </div>

                    </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>

</html>