<!DOCTYPE html>
<html lang="en">
<head>
 <title>Document</title>
</head>
<link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{URL::asset('css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css">
<body>
    <div class="container">
        @yield('content')
    </div>

    @yield('footer')
</body>
</html>
