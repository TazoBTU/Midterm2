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
        <form action="{{ route('adminupdate')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="hidden" name="id" value="{{$posts->id}}">
            <label>სათაური:</label>
            <input type="text" name="title" placeholder="title" class="form-control" value="{{$posts->title}}" />
            
          
            <label>აღწერა:</label>
            <textarea name="description" id="" cols="10" rows="10" class="form-control"
                placeholder="desc">{{ $posts->description}}</textarea>

                <label>პასუხი:</label>
                <input type="text" name="answer" placeholder="answer" class="form-control" value="{{$posts->answer}}" />
            <img src="{{asset("storage/$posts->image")}}" width="303" height="195" alt="" alt="">
            <br />
            <label>Choose image</label>
            <input required type="file" name="image" value="" class="py-2" />
            <button class="btn brn-primary">submit</button>
        </form>
    </div>

</body>

</html>