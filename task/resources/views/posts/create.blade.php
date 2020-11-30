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
    <link href='{{asset('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500')}}' rel='stylesheet' type='text/css'>

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

<body >
    <div class="container">
        <form action="{{ route('adminstore')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>სათაური:</label>
            <input required type="text" name="title" placeholder="title" class="form-control"/>
          
            <label>აღწერა:</label>
            <textarea required name="description" id="" cols="10" rows="10"  class="form-control" placeholder="desc"></textarea>
           
            <label>პასუხი:</label>
            <input required type="text" name="answer" placeholder="answer" class="form-control"/>

 
       

            <label>Choose image</label>
            <input type="file" name="image" required class="py-2"/>
            <button class="btn brn-primary">submit</button>
        </form>
    </div>

</body>
</html>