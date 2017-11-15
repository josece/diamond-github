<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Diamond interview</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet">
    <!-- Styles -->
    <style>
    #followers {
        list-style: none;
    }
    #followers li{
        width:25%;
        float: left;
    }
    #followers .avatar {
        width: 70px;
    }
    a#page {
        font-size: 30px;
        display: none;
        margin-top: 20px;
    }

</style>
</head>
<body>
    <div class="container text-center">    
      <div class="row content">
        <div class="col-sm-8 text-left"> 
            <h1>{{ __('index.title')}}</h1>
            
            @include('partials._form')
        </div>
    </div>
</div>

</body>
<script
src="https://code.jquery.com/jquery-3.2.1.min.js" 
crossorigin="anonymous"></script>
@yield('scripts')
</html>
